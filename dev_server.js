const { resolve } = require('path');
const webpack = require('webpack');
const WebpackDevServer = require('webpack-dev-server');
const config = require('./webpack.config');
const PORT = process.env.PORT || 3000;

<<<<<<< HEAD
const devServer = new WebpackDevServer(webpack(config), {
    contentBase: resolve(__dirname),
    publicPath: '/dist',
=======
new WebpackDevServer(webpack(config), {
    contentBase: resolve(__dirname, 'dist'),
    publicPath: '/',
>>>>>>> 9a897b483992d637e508298a059b2d965aebd217
    hot: false,
    historyApiFallback: true,
    quiet: false,
    noInfo: false,
    stats: {
        assets: false,
        colors: true,
        version: false,
        hash: false,
        timings: false,
        chunks: false,
        chunkModules: false
    }
});

devServer.listen(PORT, 'localhost', function(err){
    if(err){
        console.log(err);
    }

    console.log('\x1b[36m%s\x1b[33m%s\x1b[0m', 'Dev server running at ', 'localhost:' + PORT);
    console.log('\x1b[32m%s\x1b[0m', '\nWebpack compiling...');
});
