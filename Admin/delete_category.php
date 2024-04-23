<?php
    include_once "dbcontroller.php";

    if(isset($_POST['cat_id']))
    {
        $obj = new DBcontroller();
        $id=$obj->secure($_POST['cat_id']);
    

    $query = "delete from category where category_id='$id'";

    $result = $obj -> executequery($query);
    if($result)
    {
        echo " ";
    }
}
?>