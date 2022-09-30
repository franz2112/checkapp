import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/assets/css/theme.css",
                "public/assets/js/theme.css",
                "public/assets/css/style.css",
                "public/assets/css/style.css.map",
                "public/assets/scss/style.scss",
                "public/assets/js/check.css",
            ],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
