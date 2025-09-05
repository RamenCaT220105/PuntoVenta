export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          50:  "#eaf2fb",
          100: "#d9e7f8",
          200: "#b7d1f0",
          300: "#8fb6e6",
          400: "#5e94d9",
          500: "#3476c9",
          600: "#1f62b8", // <— primario
          700: "#174d93",
          800: "#123e76",
          900: "#0f335f",
        },
      },
    },
  },
  plugins: [],
}
