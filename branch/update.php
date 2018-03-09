<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Update Branch</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2> Update Branch </h2>
        <form name="updateaddress" method="get" action="update.php">
        <label for="bno"> Branch Number. </label>
        <input type="text" maxlength="5" placeholder="B8"name="bno" id="bno">
        <label for="address"> Update PostCode. </label>
        <input type="text"maxlength="8" placeholder="AH1 BY2 " name="pcode" id="pcode">
        <input type="submit" name="Update" value="Search">
        </form>
        <div>
        <?php


            if (array_key_exists("bno", $_GET)){
                $num = $_GET["bno"];
                $pcode = $_GET["pcode"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "UPDATE branch Set Pcode='$pcode' where Bno='$num' ")
                    or exit ();
                if ($result=1){
                        print ("Branch PostCode updated to: ". $pcode);
                }
            }
                

        ?>  
        </div>  

        <form name="updatephone" method="get" action="update.php">
        <label for="bno2"> Branch Number. </label>
        <input type="text" maxlength="5" placeholder="B67"name="bno2" id="bno2">
        <label for="phone"> Update Telephone Number. </label>
        <input type="text"maxlength="12" placeholder="1234-567-1234" name="phone" id="phone"><br>
        <input type="submit" name="Submit" value="Search">
        </form>
        <div>
         <?php


            if (array_key_exists("bno2", $_GET)){
                $num = $_GET["bno2"];
                $tel = $_GET["phone"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "UPDATE branch Set Tel_No='$tel' where Bno='$num' ")
                    or exit ();
                if ($result=1){
                        print ("Branch Telephone Number updated to: ". $tel);
                }
            }
                

        ?>   
        </div> 
        <a href="..">Home</a>
    </body>
    </html>
    