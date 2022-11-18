/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/**/*.{html,css,vue,php}'],
  theme: {
    extend: {
        fontFamily: {
            'sans': ['Archivo Narrow']
        },
    },
  },
  plugins: [],
}
