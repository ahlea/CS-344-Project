<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Lindsey, Ahlea, Karis, Angie">

    <title>Login Page</title>
    <link rel="stylesheet" href="login.css"> <!-- a style container here is called an internal style. We took it out to link the css page which is an external cascading style sheet. -->
</head>
<body>
        <div>
             <h1>Book Talk Login</h1>

        <form action="login.php" method="POST">
            <input placeholder="Username" type="text" name="user" value=""><br>
            <input placeholder="Password" type="password" name="pass" value=""><br>
            <!-- <input type="button" name="inputPasswdButton" value="Login" onclick="readPasswd();"> -->
            <input type="submit" name="submitLogin" value="Login">
            <input type="submit" name="submitNew" value="New User">
        </form>
        <p>created by Ahlea, Angie, Karis, and Lindsey</p>
    </div>
    <?php
            // Report all error information on the webpage
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

        if (isset($_POST["submitNew"])){
            $db_name = "CS344F22BADREADS";
            $db_user = "AHLEA";
            $db_passwd = "Lindsey";

            //$name = "Lindsey Arndt";

            $db = new mysqli("localhost", $db_user, $db_passwd, $db_name);
                          // db location,      user,    passwd, database
            if ($db->connect_errno > 0) {
                die('Unable to connect to database [' . $db->connect_error . ']');
            } else {
                $user = strval($_POST["user"])."\n"; //turn into string taken from https://www.geeksforgeeks.org/php-strval-function/#:~:text=The%20strval()%20function%20is,or%20double)%20to%20a%20string.
                $pass = strval($_POST["pass"]);
                // echo("<p>Connection to " . $db_name . " was established successfully.</p>");
                // CREATE TABLE MESSAGES (ID int NOT NULL AUTO_INCREMENT, NAME varchar(20), MSG varchar(255), PRIMARY KEY (ID));
                $sql_insert = "INSERT INTO login (username, password) ".
                "VALUES ('" . $user . "', '" . $pass . "')"; //syntax

                $db->query($sql_insert) or die('Sorry, database operation was failed');
            }
            $db->close();
            echo("<p>Connection to " . $db_name . " was closed.</p>");
        }
        ?>
</body>
</html>