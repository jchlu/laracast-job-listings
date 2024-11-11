import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'my-pink': {
          '50': '#fbf6f5',
          '100': '#f7eae9',
          '200': '#f1d9d7',
          '300': '#e7beba',
          '400': '#d5928b',
          '500': '#c6756d',
          '600': '#b05b52',
          '700': '#934a42',
          '800': '#7b3f39',
          '900': '#673a35',
          '950': '#371b18',
        },
      },
    },
  },
  plugins: [],
};
