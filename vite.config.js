import { createRequire } from "module";
const requireBraces = createRequire(import.meta.url)("braces");
import * as braces from "braces";
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
