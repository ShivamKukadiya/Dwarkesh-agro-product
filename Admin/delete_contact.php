<?php
    include_once "dbcontroller.php";

    if(isset($_POST['contact_id']))
    {
        $obj = new DBcontroller();
        $id=$obj->secure($_POST['contact_id']);
    

    $query = "delete from contact where contact_id='$id'";

    $result = $obj -> executequery($query);
    if($result)
    {
        echo " ";
    }
}
?>