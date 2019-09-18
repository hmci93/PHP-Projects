
<?php
include 'conn2.php';
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
        <th>Course</th>
        <th>Branch</th>
        <th>Male</th>
        <th>Female</th>
        <th>OBC</th>
        <th>MOBC</th>
        <th>SC</th>
        <th>ST (Hills)</th>
        <th>ST (Plains)</th>
        <th>GEN</th>
      </thead>
      <tbody>

          <?php
          $course = '';
          $branch = '';
          $male = '';
          $female = '';
          $obc = '';
          $mobc = '';
          $sc = '';
          $sth = '';
          $stp = '';
          $gen = '';
          $sql= "SELECT `Course` FROM `table1` GROUP BY `Course`";
          $res= mysqli_query($conn,$sql);
          while($row=mysqli_fetch_array($res)) {
            $course = $row['Course'];
            ?>
            <tr>
              <td><?php echo $course; ?></td>

              <td>
                <table>
                <?php
                  $sql1 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                  $res1 = mysqli_query($conn,$sql1);
                  while($row1=mysqli_fetch_array($res1)) {
                    $branch = $row1['Branch'];

                    ?>

                      <tr>
                        <td><?php echo $branch; ?></td>
                      </tr>

                    <?php

                  }
                  ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe = mysqli_query($conn,$query);
                    while($r=mysqli_fetch_array($exe)) {
                      $sql2 = "SELECT COUNT(`Gender`) AS gender FROM `table1` WHERE `Course` = '".$course."' AND `Branch` = '".$r['Branch']."' AND `Gender` = 'Male'";
                      $res2 = mysqli_query($conn,$sql2);
                      while ($row2 = mysqli_fetch_array($res2)) {
                        $male = $row2['gender'];
                        ?>
                        <tr>
                          <td><?php echo $male; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query1 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe1 = mysqli_query($conn,$query1);
                    while($r1=mysqli_fetch_array($exe1)) {
                      $sql3 = "SELECT COUNT(`Gender`) AS gender FROM `table1` WHERE `Course` = '".$course."' AND `Branch` = '".$r1['Branch']."' AND `Gender` = 'Female'";
                      $res3 = mysqli_query($conn,$sql3);
                      while ($row3 = mysqli_fetch_array($res3)) {
                        $female = $row3['gender'];
                        ?>
                        <tr>
                          <td><?php echo $female; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query2 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe2 = mysqli_query($conn,$query2);
                    while($r2=mysqli_fetch_array($exe2)) {
                      $sql4 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r2['Branch']."' AND `Caste` = 'OBC'";
                      $res4 = mysqli_query($conn,$sql4);
                      while ($row4 = mysqli_fetch_array($res4)) {
                        $obc = $row4['caste'];
                        ?>
                        <tr>
                          <td><?php echo $obc; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query3 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe3 = mysqli_query($conn,$query3);
                    while($r3=mysqli_fetch_array($exe3)) {
                      $sql5 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r3['Branch']."' AND `Caste` = 'MOBC'";
                      $res5 = mysqli_query($conn,$sql5);
                      while ($row5 = mysqli_fetch_array($res5)) {
                        $mobc = $row5['caste'];
                        ?>
                        <tr>
                          <td><?php echo $mobc; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query4 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe4 = mysqli_query($conn,$query4);
                    while($r4=mysqli_fetch_array($exe4)) {
                      $sql6 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r4['Branch']."' AND `Caste` = 'SC'";
                      $res6 = mysqli_query($conn,$sql6);
                      while ($row6 = mysqli_fetch_array($res6)) {
                        $sc = $row6['caste'];
                        ?>
                        <tr>
                          <td><?php echo $sc; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query5 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe5 = mysqli_query($conn,$query5);
                    while($r5=mysqli_fetch_array($exe5)) {
                      $sql7 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r5['Branch']."' AND `Caste` = 'STH'";
                      $res7 = mysqli_query($conn,$sql7);
                      while ($row7 = mysqli_fetch_array($res7)) {
                        $sth = $row7['caste'];
                        ?>
                        <tr>
                          <td><?php echo $sth; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query6 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe6 = mysqli_query($conn,$query6);
                    while($r6=mysqli_fetch_array($exe6)) {
                      $sql8 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r6['Branch']."' AND `Caste` = 'STP'";
                      $res8 = mysqli_query($conn,$sql8);
                      while ($row8 = mysqli_fetch_array($res8)) {
                        $stp = $row8['caste'];
                        ?>
                        <tr>
                          <td><?php echo $stp; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>

              <td>
                <table>
                  <?php
                    $query7 = "SELECT `Branch` FROM `table1` WHERE `Course` = '".$course."' GROUP BY `Branch`";
                    $exe7 = mysqli_query($conn,$query7);
                    while($r7=mysqli_fetch_array($exe7)) {
                      $sql9 = "SELECT COUNT(`Caste`) AS caste FROM `table1` WHERE `Course` = '".$course."'AND `Branch` = '".$r7['Branch']."' AND `Caste` = 'GEN'";
                      $res9 = mysqli_query($conn,$sql9);
                      while ($row9 = mysqli_fetch_array($res9)) {
                        $gen = $row9['caste'];
                        ?>
                        <tr>
                          <td><?php echo $gen; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                </table>
              </td>
            </tr>
              <?php
          }

          ?>

      </tbody>
    </table>
  </body>
</html>
