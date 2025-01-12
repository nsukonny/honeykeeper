const pathSrc   = './src';
const pathDest  = './public';

export default {
	root	: pathDest,

	// html	: {
	// 	src		: [pathSrc + '/html/*.html'],
	// 	watch	: pathSrc + '/html/**/*.html',
	// 	dest	: pathDest
	// },

	scss	: {
		src		: pathSrc + '/scss/main.scss',
		watch	: pathSrc + '/scss/**/*.scss',
		dest	: './css'
	},

	js		: {
		src		: pathSrc + '/js/main.js',
		watch	: pathSrc + '/js/**/*.js',
		dest	: './js'
	},

	img		: {
		src		: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		watch	: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		dest	: './img'
	},

	del		: {
		clean	: [
			`${pathDest}/*.html`,
			`${pathDest}/js/**/*`,
			`${pathDest}/scss/**/*`,
			`${pathDest}/img/**/*`
		]
	}
};