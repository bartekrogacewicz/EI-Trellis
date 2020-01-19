const path = require('path');
const postcssPresetEnv = require('postcss-preset-env');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

const src = 'src';
const dist = 'dist';

const config = {
  devtool: 'source-map',
  entry: {
    euroislam: `./${src}/index.js`
  },
  output: {
    path: path.resolve(__dirname, dist),
    filename: 'js/[name].js'
  },
  module: {
    rules: [{
        test: /\.(scss|sass|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              importLoaders: 2,
              url: false
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              ident: 'postcss',
              plugins: () => [
                postcssPresetEnv({

                })
              ]
            }
          },
          {
            loader: 'sass-loader'
          }
        ]
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [{
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].css'
    }),
    new UglifyJSPlugin({
      uglifyOptions: {
        mangle: false,
        sourcemap: false,
        output: {
          comments: false
        }
      }
    })
  ]
};

module.exports = config;