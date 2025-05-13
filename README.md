git clone https://github.com/bosspenyu/nugeomu
composer install
php artisan migrate --seed
php artisan serve
chrome: http://127.0.0.1:8000
