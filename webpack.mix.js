const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |webpackConfig({
        module: {
            rules: [{
                test: /\.ts$/,
                loader: 'ts-loader',
                options: {
                    appendTsSuffixTo: [/\.vue$/]
                },
                include: [
                    path.resolve(__dirname, 'resources/UOM')
                ]
            }]
        },
        resolve: {
            extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
        },
    }).
 */

mix.ts('resources/UOM/app.ts', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
