const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                gray: {
                    50: '#f8f8f8',
                    100: '#efefef',
                    200: '#cccccc',
                    300: '#b6b6b6',
                    400: '#d9d9d9',
                    500: '#7d7d7d',
                    600: '#686465',
                    700: '#4d4948',
                    800: '#323232',
                    900: '#1c1c1c'
                },
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            backgroundOpacity: ['dark']
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
