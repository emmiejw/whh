const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        animation: {
            'spin-slow': 'spin 5s linear infinite',
            'ping-slow': 'ping 5s cubic-bezier(1, 1, 0.2, 1) infinite',
            'pulse': 'pulse 5s linear infinite',
            'bonce-slow': 'bounce 3s linear infinite'

        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
