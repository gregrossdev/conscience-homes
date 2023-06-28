const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        colors: {
            secondary: "#F4F2ED",
            black: "black",
            white: "white",
        },
        fontFamily: {
            "pt-serif": ["PT Serif", "serif"],
            montserrat: ["Montserrat", "sans-serif"],
        },
        backgroundSize: {
            auto: "auto",
            cover: "cover",
            contain: "contain",
            "100%": "100%",
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                underline1: "url('./assets/Underline1.svg')",
                underline2: "url('./assets/Underline2.svg')",
                underline3: "url('./assets/Underline3.svg')",
                underline4: "url('./assets/Underline4.svg')",
                highlight3: "url('./assets/Highlight3.svg')",
            },
            keyframes: {
                "fade-in-down": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(-10px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
            },
            animation: {
                "fade-in-down": "fade-in-down 0.5s ease-out",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
