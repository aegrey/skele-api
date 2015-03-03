# skeleapi-slim
A lightweight OO Slim Framework Skeleton for quick API development
___
### STILL UNDER CONSTRUCTION!
I just put this together, still testing and adding functionality, and updating code often. It's not really ready for "consumption" yet, but I'd be VERY thankful for any feedback while I "flesh out" the skeleton. I've also only used Slim a couple times, so any best practice suggestions are also welcome. 

___
**Some features of this library:**
- MVC: Well really MC, this utilizes models and controllers for API organization. The view is a single view template that processes JSON based on an array. This doesn't have any functionality for static pages - it's specifically for APIs.
- Object Oriented: Primarily OO design and PSR-4 autoload for controllers and models to minimize "require" calls.
- Lightweight: This is built to be as lightweight and quick as possible, with very simple code. It uses no additional vendor libraries but Slim. I decided against ORM for increased performance, and also a bit less setup.
- Manual Routes: This doesn't have the usual "get post delete" route setup seen in many API frameworks. Routes are set manually - I did this because it's a bit quicker for me, allows for custom route naming, and doesn't automatically setup methods that you're not using.
- Multiple Environments: The config does a check for dev/prod environments to load config for each, and is easily updated to add more.
- Easy Setup: For dev running on localhost, just change config and it's good to go. You can then setup your routes, then start building your controllers and models.

___
**Things I'm working on adding:**
- COMMENTS!: I haven't added comments at all (hence still under contstruction). This is #1 on my list.
- Auth Tokens: I am building this specifically for a mobile app, so tokens are generated within the API, but I haven't implemented storage/useage. On my end, I'm handling this in a controller. For me, ALL controllers require an auth token, so I've set the use use api\Auth in the base controller. This can easily be removed from base and put into only the controllers that require auth to access. Auth can also be easily removed if you don't need it.
- Security: Implementing additional security functionality
- Caching
- Base Model: Implementing a base model that does get, post, and delete based on table name and key=>val array.
- Base Controller: Building out the base controller.
