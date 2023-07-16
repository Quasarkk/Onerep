import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        colors :{
            light_blue: '#90DDF0',
            main_blue: '#3E7EDE',
            text_white: '#E3E3E3',
            background_dark: '#141721',
            text_dark: '#2B2B2B',
        },

        fontFamily :{
            Title : ['Alfa Slab One'],
            sans : ['Poppins', defaultTheme.fontFamily.sans ]
        },

        // extend: {
        //     fontFamily: {
        //         sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        //     },
        // },
    },


    plugins: [forms, typography],
};
