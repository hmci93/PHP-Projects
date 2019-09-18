
<?php
include 'conn1.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br>
    <table border="1">
      <thead>
        <th>Study Centre Code</th>
        <th></th>
      </thead>
      <tbody>

          <?php
          $sql= "SELECT DISTINCT(`stuCode`) FROM `table1`";
          $res= mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($res)) {
            ?>
            <tr><td><?php echo $row['stuCode']; ?></td>
            <td><table><thead><th>Sub Code</th><th></th><th>Total</th></thead>
            <?php
              $sql1 = "SELECT s1, COUNT(s1) AS total FROM `table1`,`table2` WHERE `stuCode`= ".$row['stuCode']." AND table1.Eno=table2.E_no AND s1 != '' GROUP BY s1 ";
              $res1 = mysqli_query($conn,$sql1);
              while($row1=mysqli_fetch_array($res1)) {
                ?>

                  <tr>
                    <td><?php echo $row1['s1']; ?></td><td></td>
                    <td><?php echo $row1['total']; ?></td>
                  </tr>

                <?php
              }
              ?>
            </table></td>
            </tr>
              <?php
          }

          ?>

      </tbody>
    </table>
  </body>
</html>
