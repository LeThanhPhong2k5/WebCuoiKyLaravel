import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resource/css/webmain.css',
                'resource/css/noidunganime.css',
                'resource/css/CSS_LoginAndRegister/styleLogin.css',
                'resource/css/CSS_LoginAndRegister/styleRegister.css',
                'resource/css/ANIME/webmain.css',
                'resource/css/ANIME/noidunganime.css',
            ],
            refresh: true,
        }),
    ],
});
