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
                "barlow": ["Barlow", "sans-serif"],
                "barlow-condensed": ["Barlow Condensed", "sans-serif"]
            }
        },
    },
    plugins: [require("@tailwindcss/forms")],
}

