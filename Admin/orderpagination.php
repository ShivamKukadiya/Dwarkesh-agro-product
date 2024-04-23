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

  $q="select * from category"; 
  $c=$handle->numrows($q);
  if($c>0){
    $query = "select * from `order` limit $start_from,$num_per_page";
  $count=$handle->numrows($query);
  if($count>0){

  $fetch = $handle->fetchall($query);
  }else{
      $page=$page-1;
      $start_from = ($page - 1) * 04;

      $query = "select * from `order` limit $start_from,$num_per_page";
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
                    <th>Sr.no </th>
                    <th>User name </th>
                    <th>Payment Type </th>
                    <th>Total Item</th>
                    <th>Total Amount </th>

                    <th>Date Time</th>
                    <th>Action</th>


                  </tr>
    </thead>
                <tbody>
            <?php
                  
                  if(empty($fetch)){
                    echo "<div id='message' class='alert alert-danger '>No Data found </div>";
                  }else{
                  $i=$start_from;

                foreach($fetch as $data){
                  $query="select * from registration where registration_id='".$data["registration_id"]."'";
                  $fl=$handle->fetchresult($query);
                ?>
                <tr id="or_<?php echo $data['order_id']?>">
                  <td> <?php echo ++$i?> </td>
                  <td><?php echo $fl["first_name"]." ".$fl["last_name"]?> </td>
                  <td><?php echo $data['payment_type']?></td>
                  <td><?php echo $data['total_item']?></td>
                  <td><?php echo $data['total_amount']?></td>
                  <td><?php echo $data['date_time']?></td>
                  <td>
                                                      <button onclick="confirmdata(<?php echo $data['order_id'] ?>,<?php echo $page?>)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                      <button class="btn btn-success" onclick="orderitem(<?php echo $data['order_id'] ?>)" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-shopping-cart"></i> View Detail</button>
                                                  </td>
                </tr>
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
						