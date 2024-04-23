<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <?php
        // include '../Admin/dbcontroller.php';   
        
        // $obj = new DBcontroller();
        $query="select * from banner where status='active'";
        $fetch_ban=$obj->fetchall($query);
        // print_r($fetch_ban);
        foreach($fetch_ban as $data)
        {
            if($data["banner_index"]==0){
        ?>
                <div class="carousel-item active">
                    <img src="../Admin/bannerimages/convert/TH<?php echo $data['banner_image']?>" class="d-block w-100 img-responsive" alt="..." height="550px" width="800px">
                </div>
        <?php
            }
            else{?>
                <div class="carousel-item ">
                    <img src="../Admin/bannerimages/convert/TH<?php echo $data['banner_image']?>" class="d-block w-100 img-responsive" alt="..." height="550px">
                </div>
        <?php   }
        }
        ?> 
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>