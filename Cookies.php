<?php
	
 /*
  setcookie(name, value, expire, path, domain, secure, httponly);
  Only the name parameter is required.
  All other parameters are optional.
 */

 $cookie_name = "language";
 $cookie_value = "PHP";

 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

 if(!isset($_COOKIE[$cookie_name]))
 {
     echo "Cookie named '" . $cookie_name . "' is not set!";
 }
 else
 {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
 }
?>
<?php
	
 /*
  setcookie(name, value, expire, path, domain, secure, httponly);
  Only the name parameter is required.
  All other parameters are optional.
 */

 // set the expiration date to one hour ago
 setcookie("user", "", time() - 3600);

 echo "Cookie 'user' is deleted.";
?>




<?php
	
 /*
  setcookie(name, value, expire, path, domain, secure, httponly);
  Only the name parameter is required.
  All other parameters are optional.
 */

 $cookie_name = "language";
 $cookie_value = "Java";

 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

 if(!isset($_COOKIE[$cookie_name]))
 {
     echo "Cookie named '" . $cookie_name . "' is not set!<br>";
     echo "Reload to view cookies.";
 }
 else
 {
     echo "Cookie named '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
 }
?>






<?php
	
 /*
  setcookie(name, value, expire, path, domain, secure, httponly);
  Only the name parameter is required.
  All other parameters are optional.
 */
 setcookie("test_cookie", "test", time() + 3600, '/');

 if(count($_COOKIE) > 0)
 {
     echo "Cookies are enabled.";
 }
 else
 {
     echo "Cookies are disabled.";
 }
?>

