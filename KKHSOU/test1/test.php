
<?php
include 'conn.php';
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
          $sql= "SELECT DISTINCT(study_centre_code) FROM `tab2`";
          $res= mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($res)) {
            ?>
            <tr><td><?php echo $row['study_centre_code']; ?></td>
            <td><table><thead><th>Sub Code</th><th></th><th>Total</th></thead>
            <?php
              $sql1 = "SELECT sub, COUNT(sub) AS total FROM `tab2` WHERE `study_centre_code`= ".$row['study_centre_code']." AND sub != '' GROUP BY sub ";
              $res1 = mysqli_query($conn,$sql1);
              while($row1=mysqli_fetch_array($res1)) {
                ?>

                  <tr>
                    <td><?php echo $row1['sub']; ?></td><td></td>
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
