README

Jessie Young and Matt Li

TODO: try accessing after clearing cache/starting new session

-add log out option 

--On including files: http://php.net/manual/en/function.require-once.php

If your code is running on multiple servers with different environments (locations from where your scripts run) the following idea may be useful to you: 

a. Do not give absolute path to include files on your server. 
b. Dynamically calculate the full path (absolute path) 

ex. <?php 
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/config.php); 
?> 

--note: headers must be parsed before any html code
