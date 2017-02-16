var gulp = require('gulp');
var runSequence = require('run-sequence');
var ftp = require('vinyl-ftp');
var del = require('del');
var htmlReplace = require('gulp-html-replace');
var args = require('yargs').argv;

gulp.task('copy-dependencies', function() {
    gulp.src('build/header.php')
        .pipe(htmlReplace({
            'css': 'dependencies/bootstrap.css',
            'fa': 'dependencies/font-awesome/css/font-awesome.min.css'
        }))
        .pipe(gulp.dest('build'));

    gulp.src('node_modules/font-awesome/**')
        .pipe(gulp.dest('build/dependencies/font-awesome'));

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
    // get branch name
    var branch = args.branch;
    if (branch !== 'develop' && branch !== 'master') {
        return;
    }

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
    console.log('[Deployment] Removing old build.');
    conn.rmdir('/ict/jburger/' + branch, function(err) {
        console.log(err);

        console.log('[Deployment] Removed old build, deploying the new build.');
        gulp.src('build/**/*')
            .pipe(conn.dest('/ict/jburger/' + branch, function(err) {
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