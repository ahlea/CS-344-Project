<!DOCTYPE html>

<html lang = "en">

    <link rel="stylesheet" href="BookInfo.css">

    <header id= "bar">
            <h1> 
            <?php
            session_start();
            $user = $_SESSION["username"];
            ?>
                <div id="user">Welcome, <?= $user ?>! &nbsp; </div>
                
                <div id="title">BadReads</div>

                <div id="menu">
                    <ul>
                        <li><a href="bookSearchPage.php">Search</a></li>
                        <li><a href="User_Profile.php">User Profile</a></li>
                        <li><a href="ack.php">Acknowledgements</a></li>
                        <li><a href="loginPage.php">Logout</a></li>
                    </ul>
                </div>
            </h1>
    </header>
    <header>
        <p id = "content"> </p>
    </header>


</html>
