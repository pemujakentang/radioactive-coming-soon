/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                pathway: ['Pathway Extreme'],
                taruno: ['Taruno Wide'],
                taruno2: ['Taruno Wide Outline']
            },
            spacing: {
                '500': '31rem',
            }
        },
    },
    plugins: [require("daisyui")],
};
