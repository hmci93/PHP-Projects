<html>
    <body>
        <table>
    <thead><td>PF code</td><td>Employee Name</td><td>Employee Age</td><td>Employee Contact Number</td><td>Total Family Members</td><td>Employee PF Adv. Bal.</td><td>Main Bal.</td></thead>
<?php

include "conn.php";

$sql="SELECT * FROM employees";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    
    $emp_code=$row['emp_code'];
    $emp_name=$row['emp_name'];
    $emp_age=$row['emp_age'];
    $emp_phone_no=$row['emp_phone_no'];
    $emp_family_number=$row['emp_family_number'];
    $emp_pfadv_bal=$row['emp_pfadv_bal'];
    $main_bal=$row['main_bal'];
    ?>

    <tr>
        <td><?php echo $emp_code; ?></td><td><?php echo $emp_name; ?></td><td><?php echo $emp_age; ?></td><td><?php echo $emp_phone_no; ?></td><td><?php echo $emp_family_number; ?></td><td><?php echo $emp_pfadv_bal; ?></td><td><?php echo $main_bal; ?></td>
    </tr>

<?php
}

?>
    </table>
    </body>
</html>
