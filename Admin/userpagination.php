<?php
							include_once 'dbcontroller.php';
							$handle = new DBcontroller();
							if (isset($_POST['page']))
							{
								$page = $_POST['page'];
							}
							else 
							{
								$page = 1;
							}
							$num_per_page = 4;
							$start_from = ($page - 1) * 04;

                            $q="select * from registration"; 
                            $c=$handle->numrows($q);
                            if($c>0){
                      
                             $query = "select * from `registration` limit $start_from,$num_per_page";
                            $count=$handle->numrows($query);
                            if($count>0){
                      
                            $fetch = $handle->fetchall($query);
                            }else{
                                $page=$page-1;
                                $start_from = ($page - 1) * 04;
                      
                                $query = "select * from `registration` limit $start_from,$num_per_page";
                            $count=$handle->numrows($query); 
                            $fetch = $handle->fetchall($query);
                            }
                           }else{
                             $fetch="";
                           }
						?>
						<table class="table table-striped text-center">
						<thead>
                        <tr>
                            <th> Srno </th>
                            <th> User name </th>
                            <th>Email</th>
                            <th> Gender</th>
                            <th> Phone No</th>
                            <th> Image</th>
                            <th> Status</th>


                          </tr>
						</thead>
                        <tbody>
                    <?php
                          
                          if(empty($fetch)){
                            echo "<div id='message' class='alert alert-danger '>No Data found </div>";
                          }else{
                           $i=$start_from ;

                        foreach($fetch as $data){
                        
                        ?>
                        <tr id="or_<?php echo $data['registration_id']?>">
                          <td> <?php echo ++$i?> </td>
                          <td><?php echo $data["first_name"]." ".$data["last_name"]?> </td>
                          <td><?php echo $data['email']?></td>
                          <td><?php echo $data['gender']?></td>
                          <td><?php echo $data['phone_no']?></td>
                          <td><img src="../USER/profile/<?php echo $data["image"]?>" height="80px" width="70px" alt=""></td>
                          <td><?php echo $data['status']?></td>
                         
                        <?php }
                        } ?>
                    </tbody>
					</table>
				<center>
<?php
			   $query1 = "select * from `order` order by order_id ";
			$total_record = $handle->numrows($query1);

			$total_page = ceil($total_record / $num_per_page);

			if ($page > 1) { ?>
					<a onclick='pagination(<?php echo $page - 1 ?>)' class='btn btn-light'>Previous</a>
					<?php  }

			for ($i = 1; $i <= $total_page; $i++) {
			if ($i == $page) { ?>

					<a onclick="pagination(<?php echo $i ?>)"
						class='btn btn-light active'><?php echo $i ?></a>
					<?php } else { ?>

					<a onclick="pagination(<?php echo $i ?>)" class='btn btn-light'><?php echo $i ?></a>

					<?php }
			}
			if ($i > $page) {
			if ($page < $total_page) { ?>
					<a onclick="pagination(<?php echo $page + 1 ?>)" class='btn btn-light'>Next</a>
					<?php }
			}
	?>
				</center>