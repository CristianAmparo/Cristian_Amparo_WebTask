/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1440px',
      '3xl': '1536px',
    },
    extend: {
      colors: {
        primary: '#004080',
        secondary: '#008080',
        tertiary: '#FF6F61',
        tertiarySub: '#FFA500',
        backgroundColor: '#F2F2F2',
        headingColor: '#000000',

      },
      fontFamily: {
        Nunito: ['Nunito'],
        Poppins: ['Poppins'],

      }
    },
  },
  plugins: [],
}
