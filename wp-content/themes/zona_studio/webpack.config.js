const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
	devServer: {
		host: '0.0.0.0',
	},
	context: __dirname,
	entry: {
		frontend: ['./src/index.js'],
		style: ['./sass/style.scss'],
	},
	output: {
		path: path.resolve(__dirname, 'public'),
		filename: '[name]-bundle.js',
	},
	mode: 'development',
	// devtool: 'source-map',
	module: {
		rules: [
			{
				test: /\.(woff2?|ttf|otf|eot|svg)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							include: path.resolve(__dirname, 'scss/fonts'),
							name: '[name].[ext]',
							outputPath: './fonts/',
						},
					},
				],
			},
			{
				test: /\.(jpe?g|png|gif)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]',
							outputPath: './',
						},
					},
				],
			},
			{
				test: /\.s?css$/,
				use: [
					'style-loader',
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
					},
					'resolve-url-loader',
					{
						loader: 'postcss-loader', // Run postcss actions
						options: {
							plugins: function () {
								// postcss plugins, can be exported to postcss.config.js
								return [require('autoprefixer')];
							},
						},
					},
					{
						loader: 'sass-loader',
					},
				],
			},
		],
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: '../[name].css',
		}),
		new BrowserSyncPlugin({
			host: '0.0.0.0',
			files: '**/*.*',
			proxy: 'http://localhost',
		}),
	],
	optimization: {
		minimizer: [new UglifyJsPlugin(), new OptimizeCssAssetsPlugin()],
	},
};
