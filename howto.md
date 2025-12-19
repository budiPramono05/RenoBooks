1. Turn On XAMPP Apache and MySQL
2. Open Laravel Project
3. Run this Command: 
- composer install
- php artisan key:generate
- php artisan session:table
- php artisan migrate
- php artisan db:seed --class=BookSeeder
- php artisan db:seed --class=UserSeeder
- php artisan db:seed --class=OrderSeeder
- php artisan serve