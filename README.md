# skeleapi-slim
A lightweight OO Slim Framework Skeleton for quick API development
___
### In Beta
I just put this together in a day, still testing and adding functionality, and updating code often. I've used this in an application, and ironed out the bugs to get it successfully working. If you use it and find any bugs, **please** submit an issue!

___
####Some features of this library
- **MVC:** Utilizes models and controllers for API organization. The view is a single view template that processes JSON based on an array. There is no functionality for static pages - it's specifically for APIs.
- **Object Oriented:** Primarily OO design and PSR-4 autoload for controllers and models to minimize "require" calls.
- **Lightweight:** This is built to be as lightweight and quick as possible, with very simple code. It uses no additional vendor libraries but Composer & Slim. I'm debating on including an ORM library.
- **Manual Routes:** This doesn't have the usual "get post delete" route setup seen in many API frameworks. Routes are set manually - I did this because it's a bit quicker for me, allows for custom route naming, and doesn't setup methods that you're not using/don't want to be accidentally used.
- **Multiple Environments:** The config does a check for dev/prod environments to load config for each, and is easily updated to add more.
- **Easy Setup:** For dev running on localhost, just change config and it's good to go. You can then setup your routes, and start building your controllers and models.

___
####To Use
1. run `composer install` in the main directory to install slim
2. change your config.dev.php and config.prod.php to your current info

To run the "out of the box" test:
- Make sure your database has a "users" table with one record in it with an id (1)
- Assuming you've put the repo in your hosted directory: http://localhost/skele-api/public/index.php/user/1 

For prod:
- Make sure your prod server directory points to the "public" folder.
- Utilize the .htaccess file to remove the index.php from the querystring

___
####Updates In Progress
- **Documentation** Creating actual documentation for setup/usage.
- **Code Cleanup:** Cleaning up code & adding comments.
- **Models:** I'd like to create a simpler way to handle models, maybe adding ORM
- **Auth Tokens:** I am building this specifically for a mobile app, so tokens are generated within the API, but I haven't implemented storage/usage. In my build, all controllers require an auth token, so I'll be calling api\Auth in the base controller. This can easily be removed from base and put into only the controllers that require auth to access. Auth can also be easily removed if you don't need it.
- **Session/Cookies** - User tracking via sessions & cookies.
- **Security:** Implementing additional security functionality
- **Caching:** Implementing caching using Slim's eTags.

