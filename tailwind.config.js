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
                'midnight': '#1C1927',
                'blaze': '#F46123',
                'eggshell': '#F9EDBF',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Alfa Slab One', 'cursive'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
