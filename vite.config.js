import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            // Using SCSS instead of Sass
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Add resolve object and aliases
    resolve: {
        alias: {
            '~icons': path.resolve(__dirname, 'node_modules/bootstrap-icons/font'),
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': '/resources/'
        }
    }
});
