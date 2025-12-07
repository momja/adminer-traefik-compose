<?php
require_once('plugins/login-password-less.php');

/** Set allowed password
* @param string $password_hash result of password_hash()
*/
return new AdminerLoginPasswordLess(
    $password_hash = '$2y$12$QniPoU7HYF87syZ4lOotHOxr9rVbTC9kk/RJsW//iZxirQNX4/14u'
);
