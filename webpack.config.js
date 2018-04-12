// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('web/bundles/assets')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/bundles/assets')

    // will create web/build/app.js and web/build/app.css
    // .addEntry('app', './assets/js/app.js')
    .addEntry('main', './assets/sass/main.scss')

    .createSharedEntry('vendor', [
      // 'jquery',
      'bootstrap/dist/js/bootstrap.js',
      // 'bootstrap/scss/bootstrap.scss',
      // 'font-awesome/scss/font-awesome.scss'
      ])

    // allow sass/scss files to be processed
    .enableSassLoader(
      function(sassOptions) {}, {
        resolveUrlLoader: false
      })

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    // .enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();