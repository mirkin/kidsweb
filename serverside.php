<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>A VERY basic PHP server generate page.</title>
  </head>
  <body>

<?php
/*
To view this page run a PHP server php -S localhost:8019 and visit http://localhost:8019/serverside.php
This is a code section
*/
echo '<p>This is being parsed by PHP.</p>';
$myVariable = "<p>this comes from a variable</p>";
echo $myVariable;
// run my function
printDay("Today it is ");


// create a function
function printDay($message) {
  echo "<p>" . $message . date("l"). "</p>";
}

?>

<p>This isn't being parsed by PHP.</p>

<p>
  If the server is set up to parse PHP, then pages ending with .php will be parsed.
</p>

<p>
  The page will be created by code before it is sent by the server to the browser. This is serverside.
  You can change the page using code on the client side using javascript which is run using the browser after is has been sent from the web server.
</p>

<p>
  We used to call the server generated pages dynamic and when we just served files as if they were from a directory we called that static. You can use lots of languages for server side code, PHP is very common.
</p>

</body>
</html>