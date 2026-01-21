import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
  './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  './storage/framework/views/*.php',
  './resources/views/**/*.blade.php',
  './resources/js/**/*.js',
  './resources/css/**/*.css',
],


    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: {
                    50:  '#F2F9FD',
                    100: '#E5F4FA',
                    200: '#D2ECF7',
                    300: '#BBE2F2',
                    400: '#9ED6ED',
                    500: '#5EBAE1', // Azul Sesanus
                    600: '#53A4C6',
                    700: '#468CA9',
                    800: '#387087',
                    900: '#2A5465',
                    950: '#1E3C48',
                },

                accent: '#61C4F4', // Azul claro del isotipo
                ink: '#0B0F14',    // Negro suave para texto
            },
        },
    },

    plugins: [forms],
};

