/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/**/*.php"],
  theme: {
    extend: {
      container: {
        center: true,
        padding: "0.75rem",
      },

    },
  },

  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
