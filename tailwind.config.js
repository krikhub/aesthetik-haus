/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./site/snippets/**/*.php",
    "./site/templates/**/*.php",
    "./content/**/*.txt",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#44A735',      // Forest Green
        secondary: '#7BBE24',    // Apple Green
        text: '#7A7A7A',         // Medium Grey
        accent: '#61CE70',       // Fresh Green
        'sky-blue': '#6EC1E4',
        'charcoal': '#54595F',
      },
    },
  },
  plugins: [],
}
