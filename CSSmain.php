<!DOCTYPE html>
<html>
<head>
   <title>PHP Code Executor</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

   <!-- HTML form with POST method -->
   <form action="" method="post">
        <!-- User needs to type php tags and "use Generator\CSS\CSSGenerator as CSSGenerator;" inside -->
        <textarea name="php_code" rows="10" cols="50">
&lt;?php
use Generator\CSS\CSSGenerator as CSSGenerator;

// Add Code Here

$cssGenerator = new CSSGenerator("test");
echo $cssGenerator->setFontStyle()->getCSStext();

?&gt;
        </textarea>
        <input type="submit" value="Execute">
    </form>
    
   <?php
    require_once 'autoloader.php'; 
    session_start();

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Store the PHP code in a session variable
        $_SESSION["php_code"] = $_POST["php_code"];
    }

    // Execute the PHP code stored in the session variable
    if (isset($_SESSION["php_code"])) {
        eval('?>' . $_SESSION["php_code"] . '<?php ');
    }
   ?>

</body>
</html>