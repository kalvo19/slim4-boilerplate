const
    path = require('path');
    /*
     * Configuración de Webpack.
     */
    module.exports = {
        entry: {
            /**
             * app --> Fichero o ficheros desde donde Webpack iniciará su compilación.
             *
             * NOTA: Al ejecutar primero el polyfill de Babel (@babel/polyfill), permitará utilizar
             * "Promises" o "Object.assign" en los ficheros de JavaScript que se compilen.
             */
            app: ['babel-polyfill', path.join(__dirname, "public/js/library/main.js")],
        },
        output: {
            /**
             * path --> La ruta dónde se va almacenar el fichero generado por Webpack al compilar
             *          el JavaScript.
             * filename --> Nombre del fichero generado por Webpack.
             */
            path: path.join(__dirname, "public/js/"),
            filename: "bundle.js"
        },
        module: {
            rules: [
                {
                    /**
                     * BABEL Configuration
                     *
                     * Reglas para la compilación de ECMAScript 2015 y versiones superiores a
                     * a versiones anteriores compatibles con todos los navegadores.
                     *
                     * test --> TODO
                     * exculde --> Directorios que serán ignorados a la hora de compilar los ficheros
                     *             de JavaScript.
                     * use --> Módulo o clase que se utilizará para interconectar la libreria de Babel y
                     *         Webpack.
                     */
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader'
                    }
                },
                {
                    test: /\.(png|jpe?g|gif|svg)/,
                    use: {
                        loader: 'file-loader'
                    }
                },
            ]
        }
    }