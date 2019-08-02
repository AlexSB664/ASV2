mysqladmin -h localhost -u root -p drop Santa
mysqladmin -h localhost -u root -p create Santa
php artisan migrate -v
php artisan db:seed
