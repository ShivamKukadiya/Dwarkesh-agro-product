<?php
    include_once "dbcontroller.php";

    if(isset($_POST['banner_id']))
    {
        $obj = new DBcontroller();
        $id=$obj->secure($_POST['banner_id']);
    

    $query = "delete from banner where banner_id='$id'";

    $result = $obj -> executequery($query);
    if($result)
    {
        echo " ";
    }
}
?>