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
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                bigShouldersDisplay: ['BigShoulderDisplay'],
                roboto: ['Roboto'],
            },
            colors: {
                'barroc_yellow': '#FDD716',
                'barroc_grey': '#212121',
                'mettalic-yellow': '#fdd716',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
