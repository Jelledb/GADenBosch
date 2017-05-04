var gulp = require('gulp');
var runSequence = require('run-sequence');
var del = require('del');
var args = require('yargs').argv;
var GulpSSH = require('gulp-ssh');

gulp.task('deploy', function() {
    // get branch name
    const branch = args.branch;
    if (branch !== 'develop' && branch !== 'master'
    ) {
        return;
    }

    const directory = '/var/www/html';

    // steps for the deployment process
    console.log('Starting gulp deployment process');

    const config = {
        host: '95.85.39.161',
        port: 22,
        username: 'root',
        password: 'codelance'
    };

    const gulpSSH = new GulpSSH({
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