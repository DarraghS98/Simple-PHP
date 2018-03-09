<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Delete Branch</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2> Delete Branch </h2>

        <form name="deletebranch" method="get action=delete.php">
            <label for="bno"> Branch Number </label>
            <input type ="text" placeholder="B7" maxlength="5"  name="bno"><br>
            <input type="submit" name="Submit" value="Delete">
        </form>
        <div>
        <?php


            if (array_key_exists("bno", $_GET)){
                $num = $_GET["bno"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "DELETE  from branch where Bno='$num'")
                    or exit ();
                if ($result=1){
                        print ("Branch with branch number ".$num." Deleted");
                } 
            }
                

        ?>   
        </div> 
        <a href="..">Home</a>
        
    </body>
    </html>
    