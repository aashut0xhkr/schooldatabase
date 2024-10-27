<?php include("dbcinnect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiksha International School</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Student Registration Form
        </div>
        <div class="input_field">
            <label>Registration No</label>
            <input type="number" class="input" name="reg" required>
        </div>
        <div class="input_field">
            <label>Date of Admission</label>
            <input type="date" class="input"name="doa" required>
        </div>
        <div class="input_field">
            <label>Class</label>
            <select class="selectbox" name="class" required>
                <option>Select</option>
                <option>U.K.G</option>
                <option>L.K.G</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
            </select>
        </div>
        <div class="input_field">
        <label>Aadhar No</label>
        <input type="number" class="input" name="aadhar" >
        </div>
        <div class="input_field">
            <label>Name</label>
            <input type="text" class="input" name="naam" required>
        </div>
        <div class="input_field">
            <label>Date of Birth</label>
            <input type="date" class="input" name="dob" required>
        </div>
        <div class="input_field">
            <label>Father's Name</label>
            <input type="text" class="input" name="fname" required>
        </div>
        <div class="input_field">
            <label>Mother's Name</label>
            <input type="text" class="input" name="mname" required>
        </div>
        <div class="input_field">
            <label>Gender</label>
            <select class="selectbox" name="gen" required>
                <option value="Not Selected">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="input_field">
            <label>Phone Number</label>
            <input type="number" class="input" name="phn">
        </div>
        <div class="input_field">
            <label>Address</label>
            <input type="text" class="input" name="addr" required>
        </div>
        <div class="input_field">
            <label>Fees Paid Till</label>
            <input type="date" class="input"name="fees">
            </select>
        </div>
        <div class="input_field">
            <input type="submit" value="Register" class="btn" name='submitted'>
        </div>
</form>
    </div>
</body>
</html>

<?php
if($_POST['submitted']){
   $reg = $_POST['reg'];
   $doa = $_POST['doa'];
   $class = $_POST['class'];
   $aadhar= $_POST['aadhar'];
   $naam = $_POST['naam'];
   $dob= $_POST['dob'];
   $fname= $_POST['fname'];
   $mname= $_POST['mname'];
   $gen = $_POST['gen'];
   $phn = $_POST['phn'];
   $addr = $_POST['addr'];
   $fees = $_POST['fees'];

   $query= "INSERT INTO students values('$reg','$doa','$class','$aadhar','$naam','$dob','$fname','$mname','$gen','$phn','$addr','$fees')";
   $data= mysqli_query($conn,$query);
   if($data){
    echo "<script>alert('Data Inserted')</script>";
   }
   else{
    echo "Failed";
   }
}
?>