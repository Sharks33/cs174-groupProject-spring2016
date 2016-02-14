<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>
            SUPER AWESOME PAGE
        </title>
    </head>

    <body>
        <?php
			define("PI", 3.1415926);
			$name = filter_input(INPUT_POST, 'firstname');
			$cool = filter_input(INPUT_POST, 'check');
			print "<h1>Hello, $name!</h1>";
			if (isset($cool)) {
				print "<h2>You are cool!</h2>";
			}
			print "<h2>By the way... pi = " .PI."<br>";
        ?>
    </body>
</html>
