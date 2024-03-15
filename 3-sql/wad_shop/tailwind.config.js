/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
      "./*.php",
      "./template/*.php",
      // "./src/**/*.{html,js}",
      "node_modules/preline/dist/*.js",
    ],
    theme: {
      extend: {},
    },
    plugins: [require("preline/plugin")],
  };