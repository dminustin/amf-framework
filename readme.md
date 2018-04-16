<h1>AMF Framework</h1>

Version 1.0.0
Last update: Apr 16, 2018

Lightweight Framework for any purposes.

Project's page
https://github.com/dminustin/amf-framework

Created under Apache license

Feel free to use the framework in your projects.

<h2>Minimal requirements:</h2>
- PHP 5.6
- MySQLi
- Apache with Mod Rewrite or Nginx (in this case, you have to configure nginx)
- composer



<h2>Built With</h2>
- <a href="https://github.com/nikic/FastRoute" target="_blank">FastRoute</a>

<h2>Additional info</h2>
Functions are described at functions.md

HOWTOs is placed in howtos.md

<h2>Code structure</h2>

The framework used namespaces.

Application path is "application/"


**The main class named "application"** is placed in "application/base/application_base.php"

**Functions file** is placed in "application/functions.php"

More information about base functions you can read at functions.md file


You can create the child of it and use it in your project

<pre>
&lt;?php
class myApp extends application {
    public function __construct() {
        parent::__construct();
        //you code here
    }
}
</pre>

- application/config

folder where config files are placed
here you can find configuration files and routing config

- application/controlles

folder where controllers are placed

- application/models

models folder

- application/views

views folder

- application/base

here you can place base classes
you can add your own folders

Also, you can use subfolders, for example
<pre>
application/controllers/mainpage/main_page_controller.php
&lt;?php
class main_page_controller {
    //some methods, variables, etc
}
</pre>


<h2>Configuration:</h2>

Create and edit application/config/local_config.php

<pre>
&lt;?php

class local_config extends base_config {
    //some variables are here
}

</pre>

<h2>Usage</h2>
- Run composer in the project's root directory
<pre>composer install</pre>

- Set site`s home dir to /public folder

All public files such as images, css must be placed here

- Change your configuration (application/config/local_config.php) file as you wish

- Enjoy :)

At production, do not forget to switch "debug" flag in config file to false 