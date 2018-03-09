<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Insert Branch</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2>Insert Branch </h2>

        <form action="insert.php" method="get">

        <label for="Bno">Branch Number:</label>
        <input type="text" maxlength="5"placeholder="B8"  name="bno" id="branchnumber">

        <label for="Street">Street Name:</label>
        <input type="text" maxlength="20" placeholder="12 Sunny St" name="street" id="street">

        <label for="Area">Area Name:</label>
        <input type="text"maxlength="20" placeholder="Lough"  name="area" id="area">

        <label for="City">City:</label>
        <input type="text"maxlength="20" name="city" placeholder="Limerick"  id="city">

        <label for="Phone">Telephone number:</label>
        <input type="text"maxlength="12" name="phone" placeholder="1234-567-8910"  id="phone">
  
        <label for="PostCode">Post Code:</label>
        <input type="text" name="postcode"maxlength="8"  placeholder="AH7 TU8" id="postcode">
 
        <label for="Faxnumber">Fax Number:</label>
        <input type="text" name="fax" maxlength="11" placeholder="12345-12345" id="fax"><br>
 
        <input type="submit" value="Submit">
        </form>
        <div>
        <?php
        if (array_key_exists('bno', $_GET)){
            $num = $_GET['bno'];
            $str = $_GET['street'];
            $area = $_GET['area'];
            $city = $_GET['city'];
            $tel = $_GET['phone'];
            $post = $_GET['postcode'];
            $fax = $_GET['fax'];
            $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
            $result = mysqli_query ($conn_id, "INSERT INTO branch(Bno, Street, Area, City, Pcode, Tel_No, Fax_No) 
            VALUES ('$num','$str','$area','$city','$post','$tel','$fax')")
                or exit ();
            if ($result=1){
                    print ("Branch added successfully");
            }
        }
                        

        ?>  
        </div>  
        <a href="..">Home</a>
    </body>

    
</html>
