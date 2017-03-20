var gulp = require('gulp');
var runSequence = require('run-sequence');
var del = require('del');
var args = require('yargs').argv;
var GulpSSH = require('gulp-ssh');

gulp.task('deploy', function() {
    // get branch name
    const branch = args.branch;
    if (branch !== 'develop' && branch !== 'master') {
        return;
    }

    const directories = {
        'master': '/var/www/html',
        'develop': '/var/www/html-dev/'
    };

    // steps for the deployment process
    console.log('Starting gulp deployment process');

    // pull the branch.
    const directory = directories[branch];

    var config = {
        host: '95.85.39.161',
        port: 22,
        username: 'root',
        password: 'codelance'
    };

    var gulpSSH = new GulpSSH({
        ignoreErrors: false,
        sshConfig: config
    });

    return gulpSSH.shell(['cd ' + directory, 'git pull']);
});

gulp.task('default', function() {
    runSequence(
        'deploy'
    );
});