/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
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

