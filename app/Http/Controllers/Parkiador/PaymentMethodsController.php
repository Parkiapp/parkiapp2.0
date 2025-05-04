<?php
<?php
namespace AppHttpControllersParkiador;
use AppHttpControllersController;
use AppHttpRequestsStorePaymentMethodRequest;
use AppHttpRequestsUpdatePaymentMethodRequest;
use AppModelsPaymentMethod;
use IlluminateHttpRedirectResponse;
use IlluminateViewView;

namespace App\Http\Controllers\Parkiador;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PaymentMethodsController extends Controller
{
    public function index(): View
    {
        \$methods = PaymentMethod::where('user_id', auth()->id())->get();
        return view('parkiador.metodos', compact('methods'));
    }

    public function store(StorePaymentMethodRequest \$request): RedirectResponse
    {
        auth()->user()->paymentMethods()->create(\$request->validated());
        return back()->with('success', 'Método agregado');
    }

    public function update(UpdatePaymentMethodRequest \$request, PaymentMethod \$paymentMethod): RedirectResponse
    {
        \$this->authorize('update', \$paymentMethod);
        \$paymentMethod->update(\$request->validated());
        return back()->with('success', 'Método actualizado');
    }

    public function destroy(PaymentMethod \$paymentMethod): RedirectResponse
    {
        \$this->authorize('delete', \$paymentMethod);
        \$paymentMethod->delete();
        return back()->with('success', 'Método eliminado');
    }
}
