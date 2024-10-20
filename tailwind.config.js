import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['montserrat', ...defaultTheme.fontFamily.sans],
                poppins: ['poppins', ...defaultTheme.fontFamily.sans],
                century: ['century', ...defaultTheme.fontFamily.serif],
                smoothy: ['"Smoothy-Regular"', 'sans-serif'], // Adicionando a fonte personalizada
            },
            colors: {
                'azul-200': '#365498',
                azul2    : "#00355e",
                azul     : "#1B365D",
                vermelho : "#BE3A34",
                vermelho2: "#ff3334",
                amarelo  : "#F0B323",
                grafite  : "#222224",
                preto    : "#040504",
            },
        },
        screens: {
            "xs" : "480px",
            "sm" : "640px",
            "sm2": "700px",
            "md" : "768px",
            "md2": "991px",
            "lg" : "1024px",
            "lg2": "1180px",
            "xl" : "1280px",
            "2xl": "1536px",
        },
    },

    // plugins: [forms],
};
