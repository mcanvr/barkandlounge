import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    plugins: [require("preline/plugin")],
    theme: {
        container: {
            center: true,
            padding: "1rem",
            screens: {
                sm: "600px",
                md: "728px",
                lg: "984px",
                xl: "1240px",
                "2xl": "1496px",
            },
        },
        extend: {
            fontFamily: {
                sans: ["STIX Two Text", ...defaultTheme.fontFamily.sans],
                serif: ["Sour Gummy", ...defaultTheme.fontFamily.serif],
            },
            colors: {
                pet: {
                    50: "oklch(0.95 0.03 260)",
                    100: "oklch(0.9  0.05 260)",
                    200: "oklch(0.85 0.07 260)",
                    300: "oklch(0.8  0.09 260)",
                    400: "oklch(0.75 0.11 260)",
                    500: "oklch(0.7  0.13 260)", // Ana renk (daha canlı / doygun lacivert)
                    600: "oklch(0.65 0.11 260)",
                    700: "oklch(0.6  0.09 260)",
                    800: "oklch(0.55 0.07 260)",
                    900: "oklch(0.5  0.05 260)",
                },
                grooming: {
                    50: "oklch(0.97 0.03 195)",
                    100: "oklch(0.95 0.06 195)",
                    200: "oklch(0.92 0.1 195)",
                    300: "oklch(0.88 0.15 195)",
                    400: "oklch(0.84 0.18 195)",
                    500: "oklch(0.8 0.2 195)",
                    600: "oklch(0.75 0.18 195)",
                    700: "oklch(0.7 0.16 195)",
                    800: "oklch(0.65 0.14 195)",
                    900: "oklch(0.6 0.12 195)",
                },
                neutral: {
                    50: "oklch(0.98 0 0)",
                    100: "oklch(0.95 0 0)",
                    200: "oklch(0.9 0 0)",
                    300: "oklch(0.85 0 0)",
                    400: "oklch(0.8 0 0)",
                    500: "oklch(0.75 0 0)",
                    600: "oklch(0.65 0 0)",
                    700: "oklch(0.55 0 0)",
                    800: "oklch(0.45 0 0)",
                    900: "oklch(0.35 0 0)",
                },
                success: "oklch(0.8 0.2 142)",
                warning: "oklch(0.8 0.2 85)",
                error: "oklch(0.8 0.2 25)",
                info: "oklch(0.8 0.2 255)",
                white: "oklch(100% 0 0)",
                black: "oklch(0% 0 0)",
            },
        },
    },
    plugins: [],
};
