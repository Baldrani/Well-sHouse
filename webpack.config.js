// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('web/build/')
    .setPublicPath('/build')

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning()


    .addEntry('js/app', './src/WellsHouse/HomeBundle/Resources/js/app.js')
    .enableVueLoader()

    .addStyleEntry('css/app', './src/WellsHouse/HomeBundle/Resources/sass/app.sass')

    .enableSassLoader()
    .autoProvidejQuery()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

// export the final configuration
module.exports = Encore.getWebpackConfig();
