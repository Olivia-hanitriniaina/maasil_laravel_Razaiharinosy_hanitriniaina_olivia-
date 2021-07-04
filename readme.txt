In order to run this project, you need to follows these steps:

Step1:
Create a database named laravel in your mysql database

Step2:
Copy the project into a random folder in your computer

Step2:
To prevent errors, go to resources/script then open laravel.sql copy everything and run execute it on your newly created laravel database

Step3:
Now, open the .env file and change the below part according to your mysql configuration 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=?
DB_PASSWORD=?

Step4:
Open the root of the project in console and run: php artisan serve

Step5:
After waiting a few seconds, it could now working.
Open the giving link in your favourite brower and the home page should be displayed

Thank you!
