<script src="js/jquery-3.3.1.min.js"></script>
<script>

   
    // function addtowishlist(id) {

    //     $.ajax({
    //         type: "POST",
    //         url: "wishlistproduct.php",
    //         data: {
    //             p_id: id,
    //         },
    //         success: function(data) {
    //             // alert(data);
    //             if (data == 0) {
    //                 swal("oops !", "product already added to wishlist", "info");
    //             } else if (data == 1) {
    //                 swal("Good Job !", "Product successfully added to wishlist", "success");
    //             }
    //             wishlistcount();
    //         }
    //     });
    // }

    // function wishlistcount() {
    //     $.ajax({
    //         type: "POST",
    //         url: "wishlistcount.php",

    //         success: function(data3) {
    //             $('#wishlistcount').html(data3);
    //             $('#wishlistcount1').html(data3);
    //         }
    //     });
    // }


    function deletecartproduct(id) {
            cart_id = id;

            swal({
                    title: "Are you sure want to delete ?",
                    text: "Once deleted, you will not be able to recover this addtocart product!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            type: "POST",
                            url: "deletecartpro.php",
                            data: {
                                cart_id: cart_id,
                            },
                            success: function(data) {
                           //alert(data);
                                $('#delete_' + id).html(data);
								cartcount();
                               subtotal();
                               

                            }

                        });
                        swal("Poof! Your addtocart product has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal(" ", "Your addtocart product is safe!", "info");
                    }
                });

        }




		$(document).ready(function(){

            cartcount();
// alert("fj");
$(".ite").on("click",function(){

    // alert("hello");
    var id = $(this).attr('value').split(',')[1];

    var stock = $("#stock_qty_"+id).val();
		var qty1 = $("#qty1_" + id).val();
    var val=$(this).attr('value').split(',')[0];
		// alert(stock);
		// alert(qty1);

    if (val == 1) {
	        qty1++;
			if (qty1 <= stock-1) {
				qty = parseInt(qty1);
				$("#qty1_" + id).val(qty);
        // alert(qty);
			} else {

				qty = stock;
				$("#qty1_" + id).val(stock);
				alert('Out of Quantity');
			}
		}else {
			qty1--;
			qty2 = parseInt(qty1);
			if (qty2 >= 2) {
				qty = qty2;
			} else {
				qty = 1;
			}
			$("#qty1_" + id).val(qty);
		}
		// alert(qty);
		var price = $("#price_" + id).val();
		// alert(price);
		$.ajax({
			type: "post",
			url: "updateqty.php",
			data: {
				cart_id: id,
				prod_qty: qty,
				prod_price: price
			},
			success: function (data) {
				// alert(data);
				$("#total_" + id).html(data);
				subtotal();
			}
		});

  });

  
//   $(".ite2").on("click",function(){

// alert("hello2");
// });
  });
    function addtocart(id,qty) {
        
            // alert("id is "+qty);

            if(qty==0){
                var qty=$("#quantity").val();
            }
            // alert(qty);
            $.ajax({
                type: "POST",
                url: "addcartproduct.php",
                data: {
                    p_id: id,
                    qty: qty,
                
                },
                success: function(data) {
                    // alert(data);
                    if (data == 0) {
                        swal("oops !", "product already added to cart", "info");
                    } else if (data == 1) {
                        swal("Good Job !", "Product successfully added to cart", "success");
                    }

                    cartcount();
                    // subtotal();
                }
            });
        }
        function subtotal() {
        $.ajax({
            type: "POST",
            url: "cartsubtotal.php",

            success: function(data2) {


				// alert(data2);
				$("#final").html(data2);
            

            }
        });



    }

    function cartcount() {

        $.ajax({
            type: "POST",
            url: 'cartcount.php',

            success: function(data2) {

                $('#count').html(data2);
               

            }
        });
    }



</script>