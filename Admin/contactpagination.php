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

                            $q="select * from contact"; 
                            $c=$handle->numrows($q);
                            if($c>0){
                      
                             $query = "select * from `contact` limit $start_from,$num_per_page";
                            $count=$handle->numrows($query);
                            if($count>0){
                      
                            $fetch = $handle->fetchall($query);
                            }else{
                                $page=$page-1;
                                $start_from = ($page - 1) * 04;
                      
                                $query = "select * from `contact` limit $start_from,$num_per_page";
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
                            <th>Email</th>
                            <th> Message</th>
                            <th> Rating</th>
                            <th> Action</th>


                          </tr>
						</thead>
                        <tbody>
                    <?php
                          
                          if(empty($fetch)){
                            echo "<div id='message' class='alert alert-danger '>No Data found </div>";
                          }else{
                           $i=$start_from;

                        foreach($fetch as $data){
                        
                        ?>
                        <tr id="con_<?php echo $data['contact_id']?>">
                          <td> <?php echo ++$i?> </td>

                          <td><?php echo $data['email']?></td>
                          <td><?php echo $data['message']?></td>
                          <td><?php echo $data['rating']?></td>
						  <td>
										<button type="button" class="btn btn-danger"
											onclick="sweetalrt(<?php echo $data['contact_id'] ?>,<?php echo $page?>)"><i
												class="fa fa-trash"></i></button>
										
									</td>
                         
                        <?php }
                        } ?>
                    </tbody>
					</table>
				<center>
<?php
			   $query1 = "select * from `contact` order by contact_id ";
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