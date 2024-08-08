/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      width: {
        '1035px': '1035px',
      },
      maxWidth: {
        '1600px': '1600px',
      },
      height: {
        'tinggiGambar': '548px',
      },
      width: {
        'lebarGambar': '452px',
      },
    },
  },
  plugins: [],
}

