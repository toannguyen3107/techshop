/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./app/view/**/*.{html,js,php}", "./app/component/*.{html,js,php}", "./public/**/*.{html,js,php}"],
  content: [
    "./*.{html,js,php}",
    "./**/*.{html,js,php}",
    "./**/**/*.{html,js,php}",
    "./**/**/**/*.{html,js,php}",
    "./**/**/**/**/*.{html,js,php}"
],
  theme: {
    extend: {},
  },
  plugins: [],
}