<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:yusifk88/bgomezconsulting.git');
set("branch", "main");

add('shared_files', []);

add('shared_dirs', ["node_modules","storage","vendor"]);
add('writable_dirs', ["node_modules","storage","vendor"]);

// Hosts

host('138.68.180.185')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/bgomezconsulting/public');

// Hooks

after('deploy:failed', 'deploy:unlock');
