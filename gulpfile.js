var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix) {
    mix
        .sass('app.scss')
		.browserify('main.js')
		.scripts(
			[
				'resources/assets/js/vendor/JQuery/jquery.js',
				'resources/assets/js/vendor/bootstrap/bootstrap.min.js',
				'resources/assets/js/vendor/SummerNote/summernote.min.js',
				'resources/assets/js/vendor/SummerNote/lang/summernote-da-DK.js',
				'resources/assets/js/general.js',
				'public/js/main.js'
			],
			'public/js/all.js',
			'./'
		)
        .browserSync({
	   		proxy: 'adminpanel.dev',
	   		open: 'external'
		});
});
