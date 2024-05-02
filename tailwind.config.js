/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./src/**/*.{html,js,php}", "./*.{html,js,php}", "*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: "#8559f4",
        secondary: "#FF6347",
        success: "#00FF00",
        danger: "#FF0000",
        warning: "#FFA500",
        info: "#00FFFF",
        light: "#F5F5F5",
        myBlack: "#101014",
        secondaryBlack: "#202025",
      },
      fontFamily: {
        Roboto: ["Roboto", "sans-serif"],
      },
    },
  },
  plugins: [],
};

// npx tailwindcss -i ./public/assets/style/input.css -o ./public/assets/style/output.css --watch
