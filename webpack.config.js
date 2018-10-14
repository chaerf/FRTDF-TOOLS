const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
    resolve: {
        extensions: ['.ts', '.mjs', '.js'],
        alias: {
            '@': path.join(__dirname, 'resources')
        }
    },
    entry: {
        UOM_main: path.join(
            __dirname,
            'resources',
            'UOM',
            'app.ts'
        )
    },
    output: {
        filename: '[name].js',
        path: path.join(__dirname, '.', '.', 'public', 'build')
    },
    mode: 'development',
    devtool: 'source-map',
    module: {
        rules: [{
                test: /\.scss$/,
                use: [
                    'style-loader', // creates style nodes from JS strings
                    'css-loader', // translates CSS into CommonJS
                    'sass-loader' // compiles Sass to CSS, using Node Sass by default
                ],
                include: /sass/
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                include: /UOM/
            },
            {
                test: /\.ts$/,
                loader: 'ts-loader',
                options: {
                    appendTsSuffixTo: [/\.vue$/]
                }
            },
            {
                test: /\.mjs$/,
                include: /node_modules/,
                type: 'javascript/auto'
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    },
    plugins: [
        new VueLoaderPlugin()
    ]
};
