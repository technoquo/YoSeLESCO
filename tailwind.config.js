/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      lineHeight: {
        'extra-9': '9',
      }
    }
  },
  plugins: [],
}
