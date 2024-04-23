<?php
    include_once "dbcontroller.php";

    if(isset($_POST['product_id']))
    {
        $obj = new DBcontroller();
        $id=$obj->secure($_POST['product_id']);
    

    $query = "delete from product where product_id='$id'";

    $result = $obj -> executequery($query);
    if($result)
    {
        echo " ";
    }
}
?>