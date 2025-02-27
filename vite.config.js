import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig(({ command }) => {
    const config = {
        plugins: [
            laravel({
                input: ["resources/css/app.css", "resources/js/app.js"],
                refresh: true,
            }),
        ],
    };

    if (command === "build") {
        config.server = {
            hmr: {
                host: "barkloungetr.com",
            },
        };
    } else {
        config.server = {
            hmr: {
                host: "192.168.1.105",
            },
        };
    }

    return config;
});
