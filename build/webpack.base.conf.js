const path = require('path')
const webpack = require('webpack')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
//const { VueLoaderPlugin } = require('vue-loader')



const PATHS = {
  src: path.join(__dirname, '../src'),
  dist: path.join(__dirname, '../dist'),
  assets: ''
}

module.exports = {
  // BASE config
  externals: {
    paths: PATHS
  },
  entry: {
    app: PATHS.src
  },
  output: {
    filename: `${PATHS.assets}js/main.min.js?v=[hash]`,
    path: PATHS.dist,
    publicPath: ''
  },
  module: {

    rules: [{
      test: /\.js$/,
      loader: 'babel-loader',
      exclude: '/node_modules/'
    }, 
//    {
//      test: /\.vue$/,
//      loader: 'vue-loader',
//      options: {
//        loader: {
//          scss: 'vue-style-loader!css-loader!sass-loader'
//        }
//      }
//    }, 
            
     {
        test: /\.(png|jp(e*)g)$/,  
        use: [{
            loader: 'url-loader',
            loader: 'file-loader',
            options: { 
                limit: 13192, // Convert images < 8kb to base64 strings
//                name: 'img/[hash].[ext]'
              
//             filename: `${PATHS.assets}img/[name].webp`,
                name: 'img/[name].webp',
             publicPath: '../',
          outputPath:'',
          useRelativePath: true
            } 
        },
         {
          loader: 'image-webpack-loader',
              options: {
                mozjpeg: {
                  progressive: true,
                  quality: 80
                },
                // optipng.enabled: false will disable optipng
                optipng: {
                  enabled: false,
                },
                pngquant: {
                  quality: [0.80, 0.90],
                  speed: 4
                },
                gifsicle: {
                  interlaced: false,
                }
          }
         }]
      },
      //File loader used to load fonts
            
      {
        test: /\.(svg)$/,  
        use: [{
          
                      loader: 'url-loader',
//           loader: 'svg-url-loader',
//          loader: 'file-loader',

            options: { 
              limit: 8192,
              
////             filename: `${PATHS.assets}img/[name].[ext]`,
//             name: 'img/[name].[ext]',
//             publicPath: '../',
//                fallback: "file-loader",
//                          iesafe: true,
//                encoding: "base64",
//              esModule: false,
              
             filename: `${PATHS.assets}img/[name].[ext]`,
             name: "img/[name].[ext]",
             publicPath: '../',
          outputPath:'',
          useRelativePath: true
              
              
            } 
        }]
      },    

    {
      // Match woff2 in addition to patterns like .woff?v=1.1.1.
      test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
      use: {
        loader: "url-loader",
//        loader: "file-loader",
        options: {
          // Limit at 50k. Above that it emits separate files
          limit: 8192,

          // url-loader sets mimetype if it's passed.
          // Without this it derives it from the file extension
//          mimetype: "application/font-woff",

          // Output below fonts directory
            
//          name: "[name].[ext]",
//            publicPath: "../fonts/[name]/[name].[ext]", // Take the directory into account
             filename: `${PATHS.assets}fonts/[name]/[name].[ext]`,
             name: "fonts/[name]/[name].[ext]",
             publicPath: '../',
          outputPath:'',
          useRelativePath: true

        }
      },
    },{
        test: /\.pug$/,
     
          loader: 'pug-loader',
          options: {
            pretty: true,
            self: true,
          },
    
      },

    {
      test: /\.s[ac]ss$/i,
      use: [
        'style-loader',
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: { sourceMap: true  /* , url: false  */ }
        }, {
          loader: 'postcss-loader',
          options: { sourceMap: true, config: { path: `${PATHS.src}/js/postcss.config.js` } }
        }, {
          loader: 'sass-loader',
          options: { sourceMap: true, config: { path: `${PATHS.src}/js/postcss.config.js` }  }
        }
      ]
    }, {
      test: /\.css$/,
      use: [
        'style-loader',
        MiniCssExtractPlugin.loader,
        {
          loader: 'css-loader',
          options: { sourceMap: true /* , url: false  */ }
        }, {
          loader: 'postcss-loader',
          options: { sourceMap: true, config: { path: `${PATHS.src}/js/postcss.config.js` } }
        }
      ]
    }]
  },
//  resolve: {
//    alias: {
//      'vue$': 'vue/dist/vue.js'
//    }
//  },
  plugins: [
//    new VueLoaderPlugin(),
    new MiniCssExtractPlugin({
        
 
    filename: `${PATHS.assets}css/min.css?v=[hash]`,
   
        
    publicPath: '../'
    }),
//    new MiniCssExtractPlugin({
//      filename: `${PATHS.src}/css/fonts.css`,
//    }),
    // Copy HtmlWebpackPlugin and change index.html for another html page
    new HtmlWebpackPlugin({

//      hash: false,
      template: `${PATHS.src}/index.pug`,
      filename: './index.html',
    
    }),    
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/home.pug`,
      filename: './home.html'
    }),       
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/404.pug`,
      filename: './404.html'
    }),
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/shop.pug`,
      filename: './shop.html'
    }),  
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/single.pug`,
      filename: './single.html'
    }),    
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/catalog.pug`,
      filename: './catalog.html'
    }),      
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/cart.pug`,
      filename: './cart.html'
    }),              
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/checkout.pug`,
      filename: './checkout.html'
    }),                  
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/confirmation.pug`,
      filename: './confirmation.html'
    }),                      
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/courses.pug`,
      filename: './courses.html'
    }),                         
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/courses-overview.pug`,
      filename: './courses-overview.html'
    }),                            
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/courses-curriculum.pug`,
      filename: './courses-curriculum.html'
    }),                                
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/healers.pug`,
      filename: './healers.html'
    }),                                   
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/healers-overview.pug`,
      filename: './healers-overview.html'
    }),                                     
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/booking.pug`,
      filename: './booking.html'
    }),                                        
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/booking-event.pug`,
      filename: './booking-event.html'
    }),        
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/become-an-healer.pug`,
      filename: './become-an-healer.html'
    }),            
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/in-person.pug`,
      filename: './in-person.html'
    }),      
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/quiz.pug`,
      filename: './quiz.html'
    }),              
    new HtmlWebpackPlugin({
      hash: false,
      template: `${PATHS.src}/events.pug`,
      filename: './events.html'
    }),        
    
    
    
    
//    new HtmlWebpackPlugin({
//      hash: false,
//      template: `${PATHS.src}/500.html`,
//      filename: './500.html'
//    }),
    new CopyWebpackPlugin([
      { from: `${PATHS.src}/img`, to: `${PATHS.assets}img` },
      { from: `${PATHS.src}/static`, to: '' },
//      { from: `${PATHS.src}/img`, to: 'img' },
//      { from: `${PATHS.src}/css`, to: 'css' }
//      { from: `${PATHS.src}/fonts`, to: 'fonts' }        
    ])
  ],
};
