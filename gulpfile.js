var gulp = require('gulp');
var runSequence = require('run-sequence');
var ftp = require('vinyl-ftp');
var del = require('del');
var htmlReplace = require('gulp-html-replace');

gulp.task('copy-dependencies', function() {
    gulp.src('build/header.php')
        .pipe(htmlReplace({
            'css': 'dependencies/bootstrap.css'
        }))
        .pipe(gulp.dest('build'));

    return gulp.src('node_modules/bootstrap/dist/css/bootstrap.css')
        .pipe(gulp.dest('build/dependencies'));
});

gulp.task('clean', function() {
    return del('build/**', { force: true });
});

gulp.task('build', function() {
    // steps for the build process
    console.log('Starting gulp build process');

    return gulp.src('website/**/*')
        .pipe(gulp.dest('build'));
});

gulp.task('deploy', function() {
    // steps for the deployment process
    console.log('Starting gulp deployment process');

    // create connection
    var conn = ftp.create(
        {
            host: 'student.aii.avans.nl',
            user: 'jburger',
            password: 'Ab12345'
        }
    );

    // delete old stuff and add the new stuff afterwards
    conn.rmdir('/ict/jburger/master', function(err) {
        console.log(err);
        console.log('Hoi');

        gulp.src('build/**/*')
            .pipe(conn.dest('/ict/jburger/master', function(err) {
                console.log(err);
            }));
    });
});

gulp.task('default', function() {
    runSequence(
        'clean',
        'build',
        'copy-dependencies',
        'deploy'
    );
});