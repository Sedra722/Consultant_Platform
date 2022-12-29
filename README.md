1 ) TO clone this project : 

git clone https://github.com/Sedra313/Consultant_Platform.git

2) Go to the project directory

  cd project-name

3) Copy .env.example file to .env and edit database credentials there


4)    composer install

5)    php artisan key:generate

6)    php artisan migrate:fresh --seed

###for Seeders:

if above does not work:

php artisan db: seed
php artisan db: seed --class=ExpertSeeder

7) Images are in \public\uploads

8) there is a note in the project named as : "Please Osama remeber this if I forget" very important

Good Luck :)
