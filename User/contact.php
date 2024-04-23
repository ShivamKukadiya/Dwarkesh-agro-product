<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
    ?>
     <?php
        include_once "validation.php";
    ?>


</head>

<style>
  .star-rating {
  line-height:32px;
  font-size:1.25em;
}

.star-rating .fa-star{color: yellow;}
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php
        include_once "nav.php";
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
    ?>
    <!-- Header Section End -->
    

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bread.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- Breadcrumb Section End -->
    <center>
<?php
    if(isset($_GET["success"])){

?>
<div class="alert alert-success"><?php echo $_GET["success"] ?></div>
<?php }?>
    </center>
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-phone"></span>
                        <h4>Phone</h4>
                        <p>7874841015</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-map-marker"></span>
                        <h4>Address</h4>
                        <p>Vijapadi,Mahuva,Amreli</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-clock-o"></span>
                        <h4>Open time</h4>
                        <p>10:00 AM to 8:00 PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-envelope"></span>
                        <h4>Email</h4>
                        <p>dwarkeshagro08@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237423.1498771612!2d71.00799936780327!3d21.596197792693697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958862e95555555%3A0xcf1402cdc4fdd566!2svasudev%20agro!5e0!3m2!1sen!2sin!4v1678594739404!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-inside">
            <i class="fa fa-map-marker" style="font-size:58px;color:red"></i>
            <div class="inside-widget">
                <h4>Vijpadi</h4>
                <ul>
                    <li>Phone: 7874841015</li>
                    <li>Add: Vijpadi,Mahuva,Amreli</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form method="POST" action="check_contact.php">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="email" placeholder="Enter Your Email" Required>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Enter Your message" name="message"></textarea >
                        <h5><b>Rate Our Product</b></h5>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" name="whatever1" class="rating-value">
                            </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
  

                </div>
                
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->

</body>
<script>
    var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
    </script>
</html>