/** @type {import('tailwindcss').Config} */

import { blue, slate, indigo, cyan, green, amber, red } from "tailwindcss/colors";

export const content = ["./resources/**/*.{php,css,js}"];
export const theme = {
    extend: {
        colors: {
            primary: blue,
            secondary: slate,
            link: indigo,
            info: cyan,
            success: green,
            warning: amber,
            danger: red,
        },
    },
};
export const plugins = [];
