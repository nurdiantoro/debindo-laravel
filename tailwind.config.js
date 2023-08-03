/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            warna01: '#14438F',
            warna02: '#FFCB04',
            gradasi01: ['#14438F', '#0061FF'],
          },
    },
  },
  plugins: [],
}

