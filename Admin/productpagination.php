<?php
	include_once 'dbcontroller.php';
	$handle = new DBcontroller();
	if (isset($_POST['page'])) {

	$page = $_POST['page'];
	}
	else
	{
	$page = 1;
	}
	$num_per_page = 4;
	$start_from = ($page - 1) * 04;

	$q="select * from subcategory";
	$c=$handle->numrows($q);
	if($c>0){
	$query = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id order by p.product_name limit $start_from,$num_per_page";
	$count=$handle->numrows($query);
	if($count>0){

	$fetch = $handle->fetchall($query);
	}else{
		$page=$page-1;
		$start_from = ($page - 1) * 04;

		$query ="select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id order by p.product_name limit $start_from,$num_per_page";
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
									<th scope="col">No.</th>
									<th scope="col">Category Name</th>
									<th scope="col">Subcategory Name</th>
									<th scope="col">Product Name</th>
									<th scope="col">Special Price</th>
									<th scope="col">Product Image</th>
									<th scope="col">Convert</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(empty($fetch)){
									echo "<div id='message' class='alert alert-danger '>No Data are there </div>";
								  }else{
								$i = $start_from;
								foreach($fetch as $data)
								{
							?>
								<tr id="product_<?php echo $data['product_id'] ?>">
									<th scope="row"><?php echo ++$i ?></th>
									<td><?php echo $data['category_name'] ?></td>
									<td><?php echo $data['subcategory_name'] ?></td>
									<input type="hidden" id="page" name="page" value="<?php echo $page ?>">
									<td><?php echo $data['product_name'] ?></td>
									<td><?php echo $data['special_price'] ?></td>
									<td><img src="./productimages/convertimages/RC<?php echo $data['product_img'] ?>" height="50px" width="50px"></td>
									<td><?php echo $data['convert'] ?></td>
									<?php if ($data['status'] == 'deactive') { ?>
                                                            <td id="status_<?php echo $data['product_id'] ?>"> <button class="btn btn-danger" onclick="active(<?php echo $data['product_id'] ?>,'active')">Deactive</button></td>

                                                        <?php } else { ?>
                                                            <td id="status_<?php echo $data['product_id'] ?>"> <button class="btn btn-success" onclick="deactive(<?php echo $data['product_id'] ?>,'deactive')">Active</button></td>

                                                        <?php } ?>
									<td>
										<button type="button" class="btn btn-danger"
											onclick="sweetalrt(<?php echo $data['product_id'] ?>)"><i
												class="fa fa-trash"></i></button>
										<button type="button"
											onclick="window.location='edit_product.php?id=<?php echo $data['product_id']?>'"
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
                  $query1 = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id";

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
		