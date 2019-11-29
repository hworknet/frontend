var gulp 		= require('gulp'),
	sass 		= require('gulp-sass'),
	browserSync = require('browser-sync'),
	concat 		= require('gulp-concat'),
	uglify		= require('gulp-uglifyjs');

// gulp.task('mytask', function(){
// 	// console.log('Hello, I am task');
// 	return gulp.src('source-files')
// 	.pipe(plugin())
// 	.pipe(gulp.dest('folder'))
// });

gulp.task('sass', function() {
	// return gulp.src('app/sass/main.sass') // певний файл
	// return gulp.src('app/sass/**/*.sass') // підпапка і всі файли
	// return gulp.src('!app/sass/main.sass') // виключення файла
	// return gulp.src('['!app/sass/main.sass', 'app/sass/**/*.sass']') // всі файли, крім одного
	// return gulp.src('app/sass/*.+(sass|scss)') // всі файли sass i scss
	return gulp.src('app/sass/**/*.sass') // всі файли
	.pipe(sass())
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream()); 
});


gulp.task('scripts', function(){
	return gulp.src([
		'app/libs/jquery/dist/jquery.min.js',
		'app/libs/magnific-popup/dist/jquery.magnific-popup.min.js',
		])
	.pipe(concat('libs.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest('app/js'))
});

gulp.task('browser-sync', function(){
	browserSync.init({
		server: {
			baseDir: 'app'
		}
	});
});

// [] - до основного завдання 
gulp.task('watch', gulp.parallel('browser-sync', 'sass'), function() {
	gulp.watch('app/sass/**/*.sass', gulp.series('sass'));
	gulp.watch('app/*.html', browserSync.reload());
	gulp.watch('app/js/**/*.js', browserSync.reload());
});
