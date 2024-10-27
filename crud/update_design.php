<?php include("dbcinnect.php");
$id= $_GET['id'];

$query = "SELECT * FROM students where REG_NO= '$id'";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data)
?>

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
            Update Students Details
        </div>
        <div class="input_field">
            <label>Registration No</label>
            <input type="number" value ="<?php echo $result['REG_NO'];?>" class="input" name="reg" required>
        </div>
        <div class="input_field">
            <label>Date of Admission</label>
            <input type="date"value ="<?php echo $result['Admission_date'];?>" class="input" name="doa" required>
        </div>
        <div class="input_field">
            <label>Class</label>
            <select class="selectbox" name="class" required>
                <option value="">Select</option>
                <option value="U.K.G"
                <?php 
                if($result['Class']=='U.K.G'){
                    echo "selected";
                }
                ?>
                >
                U.K.G</option>
                <option value="L.K.G"
                <?php 
                if($result['Class']=='L.K.G'){
                    echo "selected";
                }
                ?>
                >
                L.K.G</option>
                <option value="1" <?php 
                if($result['Class']=='1'){
                    echo "selected";
                }
                ?>
                >1</option>
                <option value="2" 
                <?php 
                if($result['Class']=='2'){
                    echo "selected";
                }
                ?>
                >2</option>
                <option value="3"
                 <?php 
                if($result['Class']=='3'){
                    echo "selected";
                }
                ?>
                >3</option>
                <option value="4"
                <?php 
                if($result['Class']=='4'){
                    echo "selected";
                }
                ?>
                >4</option>
                <option value="5" <?php 
                if($result['Class']=='5'){
                    echo "selected";
                }
                ?>>5</option>
                <option value="6" <?php 
                if($result['Class']=='6'){
                    echo "selected";
                }
                ?>>6</option>
                <option value="7" <?php 
                if($result['Class']=='7'){
                    echo "selected";
                }
                ?>>7</option>
                <option value="8" <?php 
                if($result['Class']=='8'){
                    echo "selected";
                }
                ?>>8</option>
            </select>
        </div>
        <div class="input_field">
        <label>Aadhar No</label>
        <input type="number" value ="<?php echo $result['Aadhar'];?>" class="input" name="aadhar" >
        </div>
        <div class="input_field">
            <label>Name</label>
            <input type="text" value ="<?php echo $result['Name'];?>"class="input" name="naam" required>
        </div>
        <div class="input_field">
            <label>Date of Birth</label>
            <input type="date" class="input" value ="<?php echo $result['Dob'];?>" name="dob" required>
        </div>
        <div class="input_field">
            <label>Father's Name</label>
            <input type="text" class="input" value ="<?php echo $result['F_Name'];?> "name="fname" required>
        </div>
        <div class="input_field">
            <label>Mother's Name</label>
            <input type="text" class="input"value ="<?php echo $result['M_Name'];?>" name="mname" required>
        </div>
        <div class="input_field">
            <label>Gender</label>
            <select class="selectbox" name="gen" value ="<?php echo $result['Gender'];?>" name="gen" required>
                <option value="">Select</option>

                <option value="Male"
                <?php 
                if($result['Gender']=='Male'){
                    echo "selected";
                }
                ?>
                >Male</option>
                <option value="Female"
                <?php 
                if($result['Gender']=='Female'){
                    echo "selected";
                }
                ?>
                >Female</option>
            </select>
        </div>
        <div class="input_field">
            <label>Phone Number</label>
            <input type="number" class="input" value ="<?php echo $result['Phone'];?>" name="phn">
        </div>
        <div class="input_field">
            <label>Address</label>
            <input type="text" class="input" value ="<?php echo $result['Adress'];?>" name="addr" required>
        </div>
        <div class="input_field">
            <label>Fees Paid Till</label>
            <input type="date" class="input" value ="<?php echo $result['Fess'];?>"name="fees">
            </select>
        </div>
        <div class="input_field">
            <input type="submit" value="Update" class="btn" name="update">
        </div>
</form>
    </div>
</body>
</html>

<?php
if($_POST['update']){
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

   $query = "UPDATE students set REG_NO='$reg',Admission_date='$doa',Class='$class' , Aadhar='$aadhar',Name='$naam' , Dob='$dob',F_Name='$fname',M_Name='$mname',Gender='$gen',Phone='$phn',Adress='$addr',Fess='$fees' WHERE REG_NO='$id'";
   $data= mysqli_query($conn,$query);
   if($data){
    echo "<script>alert('Record Updated')</script>";
    ?>

    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />

    <?php
   }
   else{
    echo "Failed";
   }
}
?>