import tailwindforms from '@tailwindcss/forms'
/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],
    content: [
        './vendor/tallstackui/tallstackui/src/**/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [tailwindforms],
}

