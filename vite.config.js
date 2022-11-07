import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

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
                "public/assets/js/check.js",
            ],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
        vue({
            template: {
                compilerOptions: {
                    // treat all tags with a dash as custom elements
                    isCustomElement: (tag) => tag.includes("-"),
                },
            },
        }),
    ],
});
