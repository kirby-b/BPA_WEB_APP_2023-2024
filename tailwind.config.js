/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
  ],
  theme: {
    extend: {
      fontFamily: {
        'ArchivoBlack': ['ArchivoBlack'],
        'BalsamiqSans': ['BalsamiqSans'], 
        'Preahvihear' : ['Preahvihear'],
      },
    },
  },
  plugins: [],
}

