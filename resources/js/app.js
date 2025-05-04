import './bootstrap';

// Leaflet para mapas
import 'leaflet/dist/leaflet.css';
import L from 'leaflet';
window.L = L;

// Push subscription
if ('serviceWorker' in navigator && 'PushManager' in window) {
  navigator.serviceWorker.register('/serviceworker.js').then(reg=>{
navigator.serviceWorker.ready.then(async reg => {
  const sub = await reg.pushManager.subscribe({
    userVisibleOnly: true,
    applicationServerKey: atob(window.VAPID_PUBLIC_KEY)
  });
  await fetch('/api/subscribe', {
    method: 'POST',
    headers: {
      'Content-Type':'application/json',
      'Accept':'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({
      endpoint: sub.endpoint,
      public_key: btoa(String.fromCharCode(...new Uint8Array(sub.getKey('p256dh')))),
      auth_token: btoa(String.fromCharCode(...new Uint8Array(sub.getKey('auth')))),
      content_encoding: 'aesgcm'
    })
  });
});    reg.pushManager.getSubscription().then(sub=>{
      if (!sub) {
        // Reemplaza con tu clave pública VAPID
        const vapidPublicKey = 'BHS5botOO_SCfzgt-hN-HpKEQ0wGbq-6BrTqFz_EfVSgmlT3BjlScP-C_1DFhgC7-rXfHkW36Mg97i754fQYb7U';
        const toUint8 = base64String => Uint8Array.from(atob(base64String.replace(/-/g,'+').replace(/_/g,'/')), c=>c.charCodeAt(0));
        reg.pushManager.subscribe({
          userVisibleOnly: true,
          applicationServerKey: toUint8(vapidPublicKey)
        }).then(newSub => {
          // Envía al microservicio
          fetch('http://127.0.0.1:8002/api/subscribe', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Authorization': 'Bearer ' + localStorage.getItem('sanctum_token')
            },
            body: JSON.stringify({
              endpoint: newSub.endpoint,
              p256dh: btoa(String.fromCharCode(...new Uint8Array(newSub.getKey('p256dh')))),
              auth:   btoa(String.fromCharCode(...new Uint8Array(newSub.getKey('auth')))),
            })
          });
        });
      }
    });
  });
}

// —————— Push Notifications ——————
// Registrar el Service Worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', async () => {
    try {
      const reg = await navigator.serviceWorker.register('/serviceworker.js');
      console.log('SW registrado:', reg);

      // Pedir permiso al usuario
      const permission = await Notification.requestPermission();
      if (permission !== 'granted') {
        console.warn('Permiso de notificaciones denegado');
        return;
      }

      // Suscribirse con VAPID_PUBLIC_KEY inyectado en Blade
      const key = window.VAPID_PUBLIC_KEY;
      const sub = await reg.pushManager.subscribe({
        userVisibleOnly: true,
        applicationServerKey: Uint8Array.from(atob(key), c => c.charCodeAt(0))
      });

      // Enviar la suscripción al backend
      await fetch('/api/subscribe', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
          endpoint: sub.endpoint,
          public_key: btoa(String.fromCharCode(...new Uint8Array(sub.getKey('p256dh')))),
          auth_token: btoa(String.fromCharCode(...new Uint8Array(sub.getKey('auth')))),
          content_encoding: sub.options.contentEncoding || 'aesgcm'
        })
      });

      console.log('Suscripción enviada');
    } catch (e) {
      console.error('Error en Push setup:', e);
    }
  });
}
