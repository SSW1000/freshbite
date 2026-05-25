/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public_html/**/*.php",
    "./public_html/**/*.html",
    "./public_html/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Segoe UI"', 'Tahoma', 'Geneva', 'Verdana', 'sans-serif'],
      },
      colors: {
        primary: {
          DEFAULT: '#22c55e',
          light: '#4ade80',
          dark: '#16a34a',
        },
        secondary: {
          DEFAULT: '#10b981',
          light: '#34d399',
          dark: '#059669',
        },
        dark: {
          DEFAULT: '#1a1a2e',
          light: '#252540',
        },
        light: '#f8f9fa',
      }
    },
  },
  plugins: [],
}
