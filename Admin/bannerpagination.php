<?php
      include_once 'dbcontroller.php';
      $handle = new DBcontroller();
      if (isset($_POST['page'])) {

        $page = $_POST['page'];
      } else {


        $page = 1;
      }
      $num_per_page = 4;
      $start_from = ($page - 1) * 04;


    //   $query = "select * from banner order by banner_index asc limit $start_from,$num_per_page";
	//   $result = $handle->fetchall($query);
	$q="select * from banner";
	$c=$handle->numrows($q);
	if($c>0){
	$query = "select * from banner order by banner_index asc limit $start_from,$num_per_page";
	$count=$handle->numrows($query);
	if($count>0){

	$fetch = $handle->fetchall($query);
	}else{
		$page=$page-1;
		$start_from = ($page - 1) * 04;

		$query = "select * from banner order by banner_index asc limit $start_from,$num_per_page";
	$count=$handle->numrows($query); 
	$fetch = $handle->fetchall($query);
	}
	}else{
		$fetch="";
	}


      ?>
						<!-- // include_once "dbcontroller.php";

						// $obj = new DBcontroller();

						// $query = "select * from category where status='active'";
					 $result = $obj->fetchall($query); -->

						<table class="table table-striped">

							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Banner Caption</th>
									<th scope="col">Banner SubCaption</th>
									<th scope="col">Banner Image</th>
									<th scope="col">Banner Index</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(empty($fetch))
								{
									echo "<div id='message' class='alert alert-danger '>No Data are there </div>";
								}
								else
								{
								$i=$start_from;
								foreach($fetch as $data)
								{
								?>
								<tr id="ban_<?php echo $data['banner_id'] ?>">
									<th scope="row"><?php echo ++$i ?></th>
									<td><?php echo $data['banner_caption'] ?></td>
									<input type="hidden" id="page" name="page" value="<?php echo $page ?>">
									<td><?php echo $data['banner_sub_caption'] ?></td>
									<td><img src="bannerimages/convert/<?php echo "TH".$data['banner_image'] ?>" height="70px" width="70px"></td>
									<td><?php echo $data['banner_index'] ?></td>
											<?php if ($data['status'] == 'deactive') { ?>
                                                            <td id="status_<?php echo $data['banner_id'] ?>"> <button class="btn btn-danger" onclick="active(<?php echo $data['banner_id'] ?>,'active')">Deactive</button></td>

                                                        <?php } else { ?>
                                                            <td id="status_<?php echo $data['banner_id'] ?>"> <button class="btn btn-success" onclick="deactive(<?php echo $data['banner_id'] ?>,'deactive')">Active</button></td>

                                                        <?php } ?>
									<td>
										<button type="button" class="btn btn-danger"
											onclick="sweetalrt(<?php echo $data['banner_id'] ?>)"><i
												class="fa fa-trash"></i></button>
										<button type="button"
											onclick="window.location='edit_banner.php?id=<?php echo $data['banner_id']?>'"
											class="btn btn-success"><i class="fa fa-edit"></i></button>
									</td>
								</tr>
								<?php
									}
								}
							?>
							</tbody>
						</table>
						<center>
							<?php
                  $query1 = "select * from banner";

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