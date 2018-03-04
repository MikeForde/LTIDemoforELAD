<?php
echo "<h1>Demo LTI Tool - normally this would be on a separate server</h1>";
echo "<h2>Wouldn't normally display this but this is what is received by the LTI Tool</h2>";
$myarray = array($_POST);
echo "<pre>";
print_r($myarray);
echo "</pre>";

echo "<h2>Here We Have Normal LTI Tool Processing</h2>";
echo "<h3>If it passes then - for the demo - get a welcome message</h3>";
require_once 'ims-blti/blti.php'; 

$context = new BLTI("secret", false, false);

if ($context->valid) { 
     echo"<h2>Hello ELAD student - welcome to the LTI tool!</h2>";
} else {
    echo"<h2>This was not a valid LTI launch</h2>";
}

echo "<h2>We can now use the \$context object to get - for example - the consumer key and user id for our tool database</h2>";

echo $context->getUserKey();

echo "<h2>The rest of your e-learning tool can now proceed as it would have had it logged in the user itself</h2>";
