const path = require('path');

module.exports = {
	entry: './src/js/index.js', 
	output: {
		filename: 'index.js', 
		path: path.resolve(__dirname, 'dist/js')
	}, 
	module: {
	  rules: [
		{
		  test: /\.m?js$/,
		  exclude: /(node_modules|bower_components)/,
		  use: {
			loader: 'babel-loader',
			options: {
			  presets: ['@babel/preset-env']
			}
		  }
		}
	  ]
	} 
}
