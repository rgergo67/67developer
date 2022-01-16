const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",  ],
  theme: {
    extend: {
      colors: {
        retrodark: {
          dark: "#04060f",
          DEFAULT: "#0a1025",
        },
        retropurple: {
          dark: "#28214e",
          DEFAULT: "#452a71",
          light: "#803599",
        },
        retropink: "#eb2eb9",
        retroyellow: "#fbae01",
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio')],
}
