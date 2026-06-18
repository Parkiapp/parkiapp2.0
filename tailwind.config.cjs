/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',  // Just-In-Time mode
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js'
  ],
  theme: {
    extend: {},
  },
  corePlugins: {
    aspectRatio: false,
    float: false,
    container: false,
  },
  plugins: [],
};
