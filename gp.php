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
            $name = filter_input(INPUT_GET, firstname);
            print "<h1>Hello, $name!</h1>";
        ?>
    </body>
</html>
