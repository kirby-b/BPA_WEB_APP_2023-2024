/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
    './src/**/*.{js,ts,jsx,tsx}'
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

