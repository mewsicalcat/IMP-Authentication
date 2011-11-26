Issues as of Nov 26, 2011
-if try to directly access landing page w/o logging in, get "Engage_error: Invalid parameter:token"
-if log in with either imp or regular gmail domain: get error "warning: session_start() function.session-start cannot send session on cache limiter-headers already sent" (may be because function_start needs to be first line? or add <?php
require_once('yourpage.php');
?> ???

-if cleared cache: get Warning: session_start() [function.session-start]: Cannot send session cookie - headers already sent by (output started at /home/imptech/public_html/simple/landing.php:2) in /home/imptech/public_html/simple/landing.php on line 46

Warning: session_start() [function.session-start]: Cannot send session cache limiter - headers already sent (output started at /home/imptech/public_html/simple/landing.php:2) in /home/imptech/public_html/simple/landing.php on line 46
