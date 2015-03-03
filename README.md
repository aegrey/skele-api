# skeleapi-slim
A lightweight OO Slim Framework Skeleton for quick API development
___
### STILL UNDER CONSTRUCTION!
I just put this together, still testing and adding functionality, will upload code soon and be VERY thankful for issue reports and feedbacks while I "flesh out" the skeleton. 
___
Some features of this library:
- M(V)C - This utilizes models and controllers for API organization. The view is a single view template that processes JSON based on an array. This doesn't have any functionality for static pages - it's specifically for APIs.
- Object Oriented design and PSR-4 autoload for controllers and models to minimize "require" calls.
- This is build to be as lightweight and quick as possible. It uses no additional vendor libraries but slim. I decided against ORM for lightweight code and increased performance, as well as quicker setup for developers.
