const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {},
      colors:{
          transparent: 'transparent',
          current: 'currentColor',
        primary: '#002870',
        secondary: '#00C4E4',
        'dark-primary': '#060521',
          black: colors.black,
          white: colors.white,
          gray: colors.gray,
          emerald: colors.emerald,
          indigo: colors.indigo,
          yellow: colors.yellow,
          green: colors.green,
          background: '#EFF3FD',
          success: '#4EEA7A',
          danger: '#D62C2C'
      }
  },
  plugins: [
  ],
}

