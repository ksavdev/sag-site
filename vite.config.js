// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  // 1) Параметр base указывает, что пути должны быть относительными.
  base: './',
  
  // 2) Параметры сборки.
  build: {
    outDir: 'dist',  // папка, куда складываются файлы
    // assetsDir: 'assets', // по умолчанию 'assets'
    // возможна тонкая настройка Rollup здесь же
  },
  
  // 3) Настройки сервера (по желанию).
  server: {
    // Можете указать здесь хост или порт, если нужно
    port: 3000,
    open: true
  }
});
