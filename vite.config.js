import kirby from 'vite-plugin-kirby';
import mkcert from'vite-plugin-mkcert'

export default ({ mode }) => ({
  root: 'public',
  base: mode === 'development' ? '/' : '/dist/',
  build: {
    cssMinify: 'lightningcss',
    rollupOptions: {
      input: [
        'public/assets/styles/app.css',
        'public/assets/scripts/app.js',
        'public/assets/styles/map.css',
        'public/assets/scripts/map.js',
      ]
    },
  },
  css: {
    transformer: 'lightningcss',
    lightningcss: {
      drafts: {
        customMedia: true
      }
    }
  },
  plugins: [
    kirby({
      watch: [
        '../site/(templates|snippets|controllers|models)/**/*.php',
        '../content/**/*',
      ],
    }),
    mkcert()
  ],
  server: {
    https: true
  }
});
