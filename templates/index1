

                      <?php
                      $sever="localhost";
                      $user="root";
                      $pass="29122539";
                      $db="select";

                      $con =new mysqli($server,$user,$pass.$db);

                      if($con->connect_error){
                        die("Connection failed : ".$con->connect_error);
                      }
                      $con->set_charset("utf8");
                      ?>
                        <table border="1" >
                          <tr>
                            <td>ลำดับ</td>
                            <td>ชื่อ</td>
                            <td>สกุล</td>
                            <td>หมายเลขโทรศัพท์</td>
                            <td></td>
                        </tr>
                      <?php
                      
                      $sql="SELECT * FROM data";
                      $result =$con->query($sql);

                      if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){ ?>
                        
                        <tr>
                          <td><?php echo $row["d_id"];?></td>
                          <td><?php echo $row["d_name"]." ".$row['d_lastname'];?></td>
                          <td><?php echo $row["d_age"];?></td>
                          <td><?php echo $row["d_tel"];?></td> 
                        </tr>

                      <?php
                        }
                      }else{
                        echo "0 row";
                      }

                      $con->close();
                      ?>
                        </table>

