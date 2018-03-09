<!DOCTYPE html>
<html lang="en">

    <head>
        <<title>Delete Staff</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2> Delete Staff </h2>

        <form name="deletestaff" method="get" action="delete.php">
            <label for="sno"> Staff Number </label>
            <input type ="text"  placeholder="SG8" name="deletestaff"><br>
            <input type="submit" name="Submit" value="delete">
        </form>
        <div>
        <?php


            if (array_key_exists("deletestaff", $_GET)){
                $num = $_GET["deletestaff"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "DELETE  from staff where Sno='$num'")
                    or exit ();
                if ($result=1){
                        print ("Employee with staff number ".$num." Deleted");
                } 
            }
                

        ?>   
        </div> 
        <a href="..">Home</a>
        
    </body>
    </html>
    