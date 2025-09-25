<html>
    <body>
        <?php
        $files = "students.txt";
        if (isset($_POST["save"])) {
            $id = htmlspecialchars($_POST["ID"]);
            $fname = htmlspecialchars($_POST["FirstName"]);
            $lname = htmlspecialchars($_POST["LastName"]);
            $number = htmlspecialchars($_POST["number"]);
            $birthdate = htmlspecialchars($_POST["birthdate"]);
            $address = htmlspecialchars($_POST["address"]);
            $emergency = htmlspecialchars($_POST["emergencycontact"]);
        
            $line = "$id  |  $fname | $lname | $number | $birthdate | $address | $emergency\n";

            $handle = fopen($files, "a");
            fwrite($handle, $line);
            fclose($handle);

            echo "<h2>Record saved successfully!</h2>";
        }

        if (isset($_POST["clear"])) {
                $handle = fopen($files, "w");
                fclose($handle);
                echo "<h2>All records cleared.</h2>";
        }

        if(file_exists($files)){
            echo "<h2>Student Records:</h2> <pre>";
            echo htmlspecialchars(file_get_contents($files));
            echo "</pre>";
        }
    ?>

    <p><a href="index.php">Back to Form</a></p>
    </body>
</html>