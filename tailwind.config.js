module.exports = {
  darkMode: "class",
  content: [
    "./site/templates/**/*.php",
    "./site/snippets/**/*.php",
    "./site/plugins/**/*.php",
    "./content/**/*.txt",
  ],
  theme: {
    extend: {
      colors: {
        cararra: {
          50: "#f6f7f3",
          100: "#eceee7",
          200: "#c8ceb9",
          300: "#acb495",
          400: "#9ba37c",
          500: "#91956b",
          600: "#81825d",
          700: "#6e6b4f",
          800: "#5c5944",
          900: "#4d4a3a",
          950: "#2a281e",
        },
      },
    },
  },
  variants: {},
  plugins: [],
};
