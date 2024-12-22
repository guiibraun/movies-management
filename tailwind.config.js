/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/**/*.php"],
  theme: {
    extend: {
      container: {
        center: true,
        padding: "0.75rem",
      },
      backgroundImage: {
        "custom-gradient":
          "linear-gradient(180deg, rgba(9, 9, 16, 0) 0%, rgba(9, 9, 16, 0.9) 72.94%)",
      },
    },

    daisyui: {
      themes: ["dark"],
    },
  },

  plugins: [require("@tailwindcss/typography")],
};
