<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-image: url("school.jpg");
                background-size: auto;
            }
            table{
                background:white;
            }
            .update{
                background-color:green;
                color:white;
                margin:5px;
                border:2px solid black;
                outline: none;
                border-radius:5px;
                height:30px;
                width:100px;
                font-weight:bold;
                cursor:pointer;
            }
            .delete{
                background-color:red;
                color:white;
                margin:5px;
                border:2px solid black;
                outline: none;
                border-radius:5px;
                height:30px;
                width:100px;
                font-weight:bold;
                cursor:pointer;
            }
        </style>
    </head>
</html>
<?php
include("dbcinnect.php");
$query = "SELECT * FROM students";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
// echo $total;

if($total != 0){
    ?>
    <h2 align="center"><mark>Students Dashboard</mark></h2>
    <center>
        <table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="3%">Reg no</th>
        <th width="6%">Adm Date</th>
        <th width="3%">	Class</th>
        <th width="7%">Aadhar No</th>
        <th width="9%">Name</th>
        <th width="7%">Birthday</th>
        <th width="10%">Father's Name</th>
        <th width="10%">Mother's Name</th>
        <th width="3%">Gender</th>
        <th width="7">Phone</th>
        <th width="15%">Address</th>
        <th width="7%">Fees Paid till</th>
        <th width="15%">Operations</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data)){
    echo "<tr>
          <td>".$result["REG_NO"]."</td>
          <td>".$result["Admission_date"]."</td>
          <td>".$result["Class"]."</td>
          <td>".$result["Aadhar"]."</td>
          <td>".$result["Name"]."</td>
          <td>".$result["Dob"]."</td>
          <td>".$result["F_Name"]."</td>
          <td>".$result["M_Name"]."</td>
          <td>".$result["Gender"]."</td>
          <td>".$result["Phone"]."</td>
          <td>".$result["Adress"]."</td>
          <td>".$result["Fess"]."</td>
          <td>
          <a href='update_design.php?id=$result[REG_NO]'><input
           type='submit' value='Edit/Update' class='update'></a>

        
          <a href='delete.php?id=$result[REG_NO]'><input
           type='submit' value='Delete' class='delete' onclick='return a()'></a></td>
        </tr>
        ";
    
    }
}
else{
    echo "No Record Found";
}
?>
</table>
</center>
<script>
    function a(){
        return confirm('Are you sure you want to delete this Student?')
    }
</script>


    