Mood Log
========

Mood Log is an web application build with php and Laravel. It lets users record their mood with a daily questionnaire.


Installation
------------
If you already have Laravel installed, skip this step and go to step 3.

You need composer in order to install laravel
1) Install Composer

      https://getcomposer.org/


  2) Install Laravel

    composer global require "laravel/installer=~1.1"
 3) Database set up
     run the following commands in your terminal

        - composer install
        - mysql -uroot -p
        - create database ableto;
        - exit
        - php artisan migrate
        - php artisan db:seed

  4)   Run the app locally

     - Type the following command in your terminal

               php artisan serve
      - Go to your Browser

             http://localhost:8000



  5) Run tests

         composer require laravel/browser-kit-testing

         vendor/bin/phpunit
