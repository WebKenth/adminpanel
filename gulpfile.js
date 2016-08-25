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
				'resources/assets/js/vendor/insp/inspinia.js',
				'resources/assets/js/vendor/pace/pace.min.js',
				'resources/assets/js/vendor/metisMenu/jquery.metisMenu.js',
				'resources/assets/js/vendor/slimscroll/jquery.slimscroll.min.js',
				'resources/assets/js/vendor/list/list.min.js',
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
