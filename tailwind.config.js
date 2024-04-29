/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/welcome.blade.php",
        "./resources/js/app.js",
        "./resources/css/app.css",
        "./resources/js/components/ExampleComponent.vue",
    ],
    theme: {
        extend: {
            spacing: {
                128: "32rem",
            },
        },
    },
    plugins: [],
};
