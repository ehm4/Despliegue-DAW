import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fontsPlugin from 'vite-plugin-fonts';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/carta.css', 
                    'resources/css/clientes.css', 
                    'resources/css/contacto.css', 
                    'resources/css/formulario.css', 
                    'resources/css/galeria.css', 
                    'resources/css/historia.css', 
                    'resources/css/index.css', 
                    'resources/css/pedido.css', 
                    'resources/css/registro.css', 
                    'resources/js/main.js',
                    'resources/js/cliente.js',
                    'resources/js/galeria.js'
                    ],
            refresh: true,
        }),
        fontsPlugin({
            custom: {
                families: [
                    {
                      name: 'texto',
                      file: '/fonts/IBMPLEXSANS/IBMPlexSans-Regular.ttf',
                    },
                    {
                      name: 'titulos',
                      file: '/fonts/IBMPLEXSERIF/IBMPlexSerif-Regular.ttf',
                    },
                  ],
            },
          }),
    ],
});
