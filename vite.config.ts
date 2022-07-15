import { defineConfig } from 'vite'
import tailwindcss from 'tailwindcss'
import vue from '@vitejs/plugin-vue'
import autoprefixer from 'autoprefixer'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	plugins: [
		vue(),
		laravel({
			postcss: [
				tailwindcss(),
				autoprefixer(),
			],
		}),
	],
})
