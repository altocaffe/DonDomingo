module.exports = {
    purge: [

        './resources/**/*.blade.php',

        './resources/**/*.js',

        './resources/**/*.vue',

        './resources/views/**/**/*.blade.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
