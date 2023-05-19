import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

const host = 'mobile-api.dev';

export default defineConfig({
    server: {
        host: host,
        hmr: {host},
        https: {
            key: fs.readFileSync('C:/laragon/etc/ssl/laragon.key'),
            cert: fs.readFileSync('C:/laragon/etc/ssl/laragon.crt'),
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/highlight.min.css',
                'resources/css/easymde.min.css',
                'resources/css/fancybox.css',
                'resources/css/file-upload-with-preview.min.css',
                'resources/css/flatpickr.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/fullcalendar.min.css',
                'resources/css/highlight.min.css',
                'resources/css/markdown-editor.css',
                'resources/css/nice-select.css',
                'resources/css/nice-select2.css',
                'resources/css/nouislider.min.css',
                'resources/css/quill.snow.css',
                'resources/css/swiper-bundle.min.css',
                'resources/css/tippy.css',
            ],
            refresh: true,
        }),
    ],
});
