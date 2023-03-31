/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
      minHeight: {
        '4/5': '80%',
      },
        extend: {},
    },
    plugins: [],
};
