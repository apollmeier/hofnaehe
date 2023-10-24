/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                ...defaultTheme.colors,
                everglade: {
                    50: "#f3fbf2",
                    100: "#e2f7e1",
                    200: "#c7edc5",
                    300: "#99de97",
                    400: "#65c662",
                    500: "#41aa3d",
                    600: "#308c2d",
                    700: "#296e27",
                    800: "#225321",
                    900: "#1e491e",
                    950: "#0c270c",
                    DEFAULT: "#225321"
                },
                orange: {
                    50: "#fff3ed",
                    100: "#ffe5d4",
                    200: "#ffc6a9",
                    300: "#ff9e72",
                    400: "#fe5d26",
                    500: "#fd4412",
                    600: "#ee2a08",
                    700: "#c51b09",
                    800: "#9c1810",
                    900: "#7e1610",
                    950: "#440706",
                    DEFAULT: "#fe5d26"
                },
                saffron: {
                    50: "#fffaeb",
                    100: "#fdf0c8",
                    200: "#fcde8b",
                    300: "#fac446",
                    400: "#f9b026",
                    500: "#f38e0d",
                    600: "#d76908",
                    700: "#b2480b",
                    800: "#91370f",
                    900: "#772e10",
                    950: "#441604",
                    DEFAULT: "#fac446"
                },
                mine: {
                    50: "#f6f6f6",
                    100: "#e7e7e7",
                    200: "#d1d1d1",
                    300: "#b0b0b0",
                    400: "#888888",
                    500: "#6d6d6d",
                    600: "#5d5d5d",
                    700: "#4f4f4f",
                    800: "#454545",
                    900: "#333333",
                    950: "#262626",
                    DEFAULT: "#333333"
                },
            },
            fontFamily: {
                "barlow": ["Barlow", "sans-serif"],
                "barlow-condensed": ["Barlow Condensed", "sans-serif"]
            }
        },
    },
    plugins: [require("@tailwindcss/forms")],
}

