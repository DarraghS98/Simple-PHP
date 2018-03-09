<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Update Staff</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
    <header>
            <h1> DreamHome Information </h1>
    </header>
        <h1> Select Staff </h1>
        <form name="updateaddress" method="get" action="update.php">
        <label for="sno"> Staff Number for employee. </label>
        <input type="text" placeholder="SG8"  name="staff_number" id="staffnumber">
        <label for="address"> Update Address. </label>
        <input type="text" placeholder="Newcastle,England"  name="address" id="address">
        <input type="submit" name="Submit" value="Search">
        </form>

        <div>
        <?php


            if (array_key_exists("staff_number", $_GET)){
                $num = $_GET["staff_number"];
                $add = $_GET["address"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "UPDATE staff Set address='$add' where Sno='$num' ")
                    or exit ();
                if ($result=1){
                        print ("Employee address updated to: ". $add);
                }
            }
                

        ?>    
        </div>

        <form name="updatesalary" method="get" action="update.php">
        <label for="sno"> Staff Number for employee. </label>
        <input type="text"  placeholder="SG9" name="staff_number2" id="staffnumber">
        <label for="salary"> Update Salary. </label>
        <input type="text" placeholder="50000"  name="salary" id="salary">
        <input type="submit" name="Submit" value="Search">
        </form>
        <div>
        <?php



            if (array_key_exists("staff_number2", $_GET)){
                $num2 = $_GET["staff_number2"];
                $sal = $_GET["salary"];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result2 = mysqli_query ($conn_id, "UPDATE staff Set salary='$sal' where Sno='$num2' ")
                    or exit ();
                if ($result2=1){
                        print ("Employee salary updated to: ". $sal);
                }
            }
                

        ?>  
        </div>
        <a href="..">Home</a>
    </body>
</html>