import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/generalStyles.css',
                'resources/css/home/index.css',
                'resources/css/basket/index.css',
            ],
            refresh: true,
        }),
    ],
});
