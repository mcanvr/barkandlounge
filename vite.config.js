import laravel from "laravel-vite-plugin";
import { defineConfig, loadEnv } from "vite";

export default defineConfig(({ command }) => {
    const env = loadEnv(command, process.cwd());
    return {
        server: {
            hmr: {
                host: env.APP_HOST,
            },
        },
        plugins: [
            laravel({
                input: ["resources/css/app.css", "resources/js/app.js"],
                refresh: true,
            }),
        ],
        build: {
            minify: true,
        },
    };
});
