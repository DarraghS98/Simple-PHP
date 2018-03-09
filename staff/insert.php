<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Insert Staff</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles.css">
    </head>  
    <body>
        <header>
            <h1> DreamHome Information </h1>
        </header>
        <h2>Insert Staff Member</h2>
        <form name="insertstaff" action="insert.php" method="get">

        <label for="Sno">Staff Number:</label>
        <input type="text" name="staffnumber" placeholder="ST8" id="staffnumber" maxlength="5">

        <label for="Fname">First Name:</label>
        <input type="text" name="fname" placeholder="Johnny"  id="fname" maxlength="15">

        <label for="Lname">Last Name:</label>
        <input type="text" name="lname" placeholder="Irish"  id="lname" maxlength="15">

        <label for="Address">Address:</label>
        <input type="text" name="address" placeholder="Newcastle,England"  id="address" maxlength="50">

        <label for="Telephone">Telephone number:</label>
        <input type="tel" name="telephone" placeholder="1234 567 8910"  id="telephone" maxlength="15">
  
        <label for="Position">Position:</label>
        <input type="text" name="position" placeholder="Manager"  id="position" maxlength="10">
 
        <label for="Sex">Sex:</label>
        <input type="text" name="sex" placeholder="M/F"  id="sex" maxlength="1">
 
        <label for="DOB">DOB:</label>
        <input type="text" name="dob"  placeholder="YYYY-MM-DD" id="dob" maxlength="10">
   
        <label for="Salary">Salary:</label>
        <input type="text" name="salary"  placeholder="200000"  id="salary" maxlength="10">
 
        <label for="NIN">NIN:</label>
        <input type="text" name="nin" placeholder="WL432534U"  id="nin" maxlength="12">
 
        <label for="Bno">Bno:</label>
        <input type="text" name="bnumber" placeholder="B6"  id="bnumber" maxlength="5"><br>
        
    <input type="submit" value="Submit">
    </form>
    <div>
    <?php
        if (array_key_exists('staffnumber', $_GET)){
            $num = $_GET['staffnumber'];
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            $add = $_GET['address'];
            $tel = $_GET['telephone'];
            $pos = $_GET['position'];
            $sex = $_GET['sex'];
            $dob = $_GET['dob'];
            $sal = $_GET['salary'];
            $nin = $_GET['nin'];
            $bno = $_GET['bnumber'];
            $conn_id = @mysqli_connect ("Server", "Usr", "Password")
                    or exit ();
                mysqli_select_db ($conn_id, "Database");
            $result = mysqli_query ($conn_id, "INSERT INTO staff(Sno, FName, LName, Address, Tel_No, Position, Sex, DOB, Salary, NIN, Bno) 
            VALUES ('$num','$fname','$lname','$add','$tel','$pos','$sex','$dob','$sal','$nin','$bno')")
                or exit ();
            if ($result=1){
                    print ("Employees added successfully");
            }else {
                print("Employee already exists");
            }
        }
                        

        ?>  
    </div>  
    <a href="..">Home</a>
    </body>
    
</html>
