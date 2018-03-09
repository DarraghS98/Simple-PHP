<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Select Branch</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2> Select Branch </h2>
        <form name="findname" method="get" action="select.php">
        <label for="City"> City of branch. </label>
        <input type="text"maxlength="20" placeholder="London" name="city" id="city">
        <input type="submit" name="Submit" value="Search">
        </form>
        <div>
        <?php


            if (array_key_exists('city', $_GET)){
                $city = $_GET['city'];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "SELECT * from branch where City='$city'")
                    or exit ();
                while ($row = mysqli_fetch_row($result)){
                        print ("Branch Number: ".$row[0]."| Branch Area: ".$row[2]."<br>");
                }
            }
                

        ?>
        </div>    

        <form name="findphone" method="get" action="select.php">
        <label for="Bno"> Branch Number. </label>
        <input type="text" maxlength="5" placeholder="B8"name="Bno" id="branchnumber"><br>
        <input type="submit" name="Submit" value="Search">
        </form>
            <div>
            <?php
            if (array_key_exists('Bno', $_GET)){
                    $bno = $_GET['Bno'];
                    $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                        or exit ();
                    mysqli_select_db ($conn_id, "Database");
                    $result = mysqli_query ($conn_id, "SELECT * from branch where Bno='$bno'")
                        or exit ();
                    if ($row = mysqli_fetch_row($result)){
                            print ("Telephone ".$row[5]);
                    }
                }
            ?>
            </div>
            <a href="..">Home</a>
    </body>
    </html>
    