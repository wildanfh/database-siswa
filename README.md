# How to Start a Laravel Project from GitHub

To start a Laravel project from GitHub, follow these steps:

1. **Clone the GitHub repository**

   Clone the Laravel project from the GitHub repository using the following command in your terminal:
   
   git clone <repository-url>


Replace `<repository-url>` with the URL of the GitHub repository that you want to clone.

2. **Install dependencies**

Navigate into the project folder in your terminal and run the following command to install the required dependencies:
  
  composer install


This will install all the required packages and dependencies for the Laravel project.

3. **Set up environment variables**

Copy the `.env.example` file in the root of your project and rename it to `.env`. Then, update the values in the `.env` file according to your project requirements.
  
4. **Change value environment variables**

open .env and search these variables and change the value like this
  
  DB_DATABASE=database-siswa2
  *
  *
  SESSION_DRIVER=database
  

5. **Generate an application key**

Run the following command to generate an application key for your Laravel project:
  
  php artisan key:generate


This will generate a random key that Laravel will use to secure your application.

6. **Run migrations**

If the Laravel project you cloned has a database, run migrations to create the required tables using the following command:
  
  php artisan migrate
  
7. **Install npm dependencies**

Navigate into the project folder in your terminal and run the following command to install the required dependencies:
  
  npm install


8. **Start the server**

Finally, start the Laravel development server and vite in another terminal by running the following command:
  
  php artisan serve
  npm run dev
  

This will start the server on the default port 8000. You can access the application by opening your web browser and navigating to `http://localhost:8000`.

