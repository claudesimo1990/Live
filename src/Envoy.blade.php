@servers(['web' => ['quigo@142.93.173.204']])

@task('deploy', ['on' => 'web'])
   cd /var/www/html
   sudo git reset --hard
   sudo git pull
   sudo npm install --no-progress
   sudo npm  run production --no-progress
@endtask