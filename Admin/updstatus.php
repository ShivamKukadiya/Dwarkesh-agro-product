<?php
include_once 'dbcontroller.php';
$handle = new DBcontroller();
$table_name=$_POST['page_name'];

if($table_name=="category"){
    $field_name=$_POST['id_name'];
}elseif($table_name=="subcategory"){
    $field_name=$_POST['id_name'];
}elseif($table_name=="product"){
    $field_name=$_POST['id_name'];
}elseif($table_name=="banner"){
    $field_name=$_POST['id_name'];
}
$id = $handle->secure($_POST['id']);
if ($_POST['status'] == 'active') {
    $query = "update $table_name set status='active' where $field_name='$id'";
    $result = $handle->executequery($query);
?>
    <button class="btn btn-success" onclick="deactive(<?php echo $id ?>,'deactive' )">Active</button>
<?php } else {
    $query = "update $table_name set status='deactive' where $field_name='$id'";
    $result = $handle->executequery($query);
?>
    <button class="btn btn-danger" onclick="active(<?php echo $id ?>,'active' )">Deactive</button>
<?php } ?>