import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                pt_serif: ["PT Serif", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                backgroundColor: "#EFDFD5",
                primaryColor: "#7F2B28",
                secondaryColor: "#9E6E52",
                greenColor: "#D8E0D5",
                solidGreen: "#3A4838",
            },
        },
    },

    plugins: [forms],
};
