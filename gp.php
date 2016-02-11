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
        // Load user values
        $first = filter_input(INPUT_POST, "firstname");
        $last  = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $company  = filter_input(INPUT_POST, "company");

        
        try{
            $con = new PDO("mysql:host=localhost;dbname=conctact", "root", PASSWORD);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Constrain the query if we got first and last names.
                if ((strlen($first) > 0) && (strlen($last) > 0)) {
                $query = "SELECT * FROM contactinfo ".
                "WHERE email='$email'";
                }

                // Fetch the matching database table rows.
                $data = $con->query($query);
                $data->setFetchMode(PDO::FETCH_ASSOC);

                // Construct the HTML table row by row.
                foreach ($data as $row) {
                    print "<tr>\n";
                    foreach ($row as $name => $value) {
                        print "<td>$value</td>\n";
                    }

                print "
            </tr>\n";
            }

            print "</table>\n";
        }
        catch(PDOException $ex) {
        echo 'ERROR: '.$ex->getMessage();
        }



        ?>
    </body>
</html>