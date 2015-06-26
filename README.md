# skeleapi-slim
A lightweight OO Slim Framework Skeleton for quick API development
___
### In Beta
I put this together in a day, still updating frequently, testing, and adding functionality. I'm using this in an application, and ironing out any bugs I encounter. If you use it and find any, **please** submit an issue!

___
####Some features of this library
- **MVC:** Utilizes models and controllers for API organization. The view is a single view template that processes JSON based on an array. There is no functionality for static pages - it's specifically for APIs.
- **Object Oriented:** Primarily OO design and PSR-4 autoload for controllers and models to minimize "require" calls.
- **Lightweight:** This is built to be as lightweight and quick as possible, with very simple code. It uses no additional vendor libraries but Composer & Slim. It's not using an ORM, just a basic column variable array for each model.
- **Manual Routes:** This doesn't have the usual CRUD route setup like other API frameworks. Routes are setup manually - I did this because it allows for custom route naming, and doesn't setup routes you don't want to use.
- **Multiple Environments:** The config does a check for dev/prod environments to load config for each, and is easily updated to add more.
- **Easy Setup:** For dev running on localhost, just change config and it's good to go. You can then setup your routes, and start building your controllers and models.

___
####To Use
1. run `composer install` in the main directory to install slim
2. change your config.dev.php and config.prod.php to your environment(s) info

To run the "out of the box" test:
- Make sure your database has a "users" table with one record in it with an id (1).
- Update the "Users" model with your table fields.
- Navigate to http://#YOUR_URL#/public/index.php/user/1 

For prod:
- Make sure your prod server directory points to the "public" folder.
- Utilize the .htaccess file to remove the index.php from the querystring

___
####Updates In Progress
- **Documentation** Creating actual documentation for setup/usage.
- **Code Cleanup:** Cleaning up code & adding comments.
- **Auth:** Implementing oAuth as middleware (easily removed).
- **User Sessions** - Create user sessions for API users.
- **Security:** Implementing additional security functionality.
- **Caching:** Implementing caching.


I'll be adding a skeleton front-end app in AngularJS to compliment this (that can be used as a mobile or web app).

