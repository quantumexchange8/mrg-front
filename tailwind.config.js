import defaultTheme from 'tailwindcss/defaultTheme';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '10rem',
            },
        },
        fontFamily: {
            'jost': ['Jost', 'sans-serif'],
        },
        extend: {
            colors: {
                'primary': colors.violet["600"],
                'primary-hover': colors.violet["700"],

                default: colors.slate
            },
        },
    },
    plugins: [
        require('preline/plugin'),
        require("@tailwindcss/forms"),
    ],
};
