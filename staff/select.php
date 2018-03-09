<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Select Staff</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
    <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2> Select Staff </h2>
        <form name="findname" method="get" action="select.php">
        <label for="sno"> Staff Number for employee. </label>
        <input type="text" placeholder="SG8"  name="staff_number" id="staffnumber">
        <input type="submit" name="Submit" value="Search">
        </form>
        <div>
        <?php


            if (array_key_exists('staff_number', $_GET)){
                $num = $_GET['staff_number'];
                $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
                $result = mysqli_query ($conn_id, "SELECT * from staff where Sno='$num'")
                    or exit ();
                if ($row = mysqli_fetch_row($result)){
                        print ("Employees Name: ".$row[1]." ".$row[2]);
                }
            }
                

        ?>    
        </div>

        <form name="salary" method="get" action="select.php">
        <label for="salary"> Staff earning more than. </label>
        <input type="text"  placeholder="50000" name="salary" id="salary"><br>
        <input type="submit" name="Submit" value="Search">
        </form>

        <div>
        <?php


        if (array_key_exists('salary', $_GET)){
            $sal = $_GET['salary'];
            $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                or exit ();
            mysqli_select_db ($conn_id, "Database");
            $result = mysqli_query ($conn_id, "select * from staff where Salary>='$sal'")
                or exit ();
            
            while ($row = mysqli_fetch_row($result)){
                    print ("Employees Name: ".$row[1]." ".$row[2]."<br>");
            }
        }
        

        ?>  
        </div> 
        <a href="..">Home</a>
    </body>
</html>