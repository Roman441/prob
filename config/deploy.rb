lock "~> 3.11.0"

set :application, 'prob'
set :repo_url, 'https://github.com/Roman441/prob.git'
set :branch, ENV["branch"] || "develop"
set :deploy_to, '/var/www/laravel-capistrano'
set :laravel_dotenv_file, '/var/www/secrets/.env'
set :keep_releases, 5
append :linked_dirs, 
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs'
namespace :composer do
    desc "Running Composer Install"
    task :install do
        on roles(:composer) do
            within release_path do
                execute :composer, "install --no-dev --quiet --prefer-dist --optimize-autoloader"
            end
        end
    end
end
namespace :laravel do
    task :fix_permission do
        on roles(:laravel) do
            execute :chmod, "-R ug+rwx #{shared_path}/storage/ #{release_path}/bootstrap/cache/"
            execute :chgrp, "-R www-data #{shared_path}/storage/ #{release_path}/bootstrap/cache/"
        end
    end
    task :configure_dot_env do
    dotenv_file = fetch(:laravel_dotenv_file)
        on roles (:laravel) do
        execute :cp, "#{dotenv_file} #{release_path}/.env"
        end
    end
end
namespace :deploy do
    after :updated, "composer:install"
    after :updated, "laravel:fix_permission"
    after :updated, "laravel:configure_dot_env"
end
