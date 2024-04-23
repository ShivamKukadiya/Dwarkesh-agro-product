<?php
    include_once "dbcontroller.php";

    if(isset($_POST['subcat_id']))
    {
        $obj = new DBcontroller();
        $id=$obj->secure($_POST['subcat_id']);
    

    $query = "delete from subcategory where subcategory_id='$id'";

    $result = $obj -> executequery($query);
    if($result)
    {
        echo " ";
    }
}
?>