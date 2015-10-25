# skeleapi-slim
A lightweight OO Slim Framework Skeleton for quick API development

___
####Some features of this library
- **MVC:** Utilizes models and controllers for API organization. The view is a single view template that processes JSON based on an array. There is no functionality for static pages - it's specifically for APIs.
- **Object Oriented:** Primarily OO design and PSR-4 autoload for controllers and models to minimize "require" calls.
- **Lightweight:** This is built to be as lightweight and quick as possible, with very simple code. It uses no additional vendor libraries but Composer & Slim. It's not using an ORM, just a basic column variable array for each model.
- **Manual Routes:** This doesn't have the usual CRUD route setup like other API frameworks. Routes are setup manually - I did this because it allows for custom route naming, and doesn't setup routes you don't want to use.
- **Multiple Environments:** The config does a check for dev/prod environments to load config for each, and is easily updated to add more.
- **Easy Setup:** For dev running on localhost, just change config and it's good to go. You can then setup your routes, and start building your controllers and models.
- **Auth & Sessions:** Basic user authorization middleware (easily removed).

___
####To Use
1. run `./composer.phar install` in the main directory to install Slim
2. change your config.dev.php and config.prod.php to your environment info
3. Set your user database table & fields in models/User.php

For prod:
- Make sure your prod server directory points to the "public" folder.

___
####Updates In Progress
- **Documentation** Creating actual documentation for setup/usage.
- **Security:** Implementing additional security functionality.
- **Caching:** Implementing caching.

---

Skele-API is a base API skeleton to help with a quickstart of an API. It uses the SLIM framework.

Copyright (C) 2015  Ann Eliese Grey

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details in the "LICENSE" file in this repository.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.