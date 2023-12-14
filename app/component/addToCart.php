<?php
    if (!isset($_SESSION["user_id"])) header('Location: /techshop/public/login/index');
    else {
?>
<script>
    $(document).on('click', '.add-to-cart', function(){
        // handle cart table
        var product = $(this).closest('.item');
        var id = product[0].id;
        $.ajax({
            method: "POST",
            url: "/techshop/app/view/cart/handleCart.php",
            data: {
                "user_id": <?=$_SESSION["user_id"]?>,
                "prod_id": id,
                "scope": "add"
            },
            success: function (response){
                if (response == '200') {
                    alert('Added to cart');
                    // Modify number display on Cart
                    var cartNumber = document.querySelector('.numberInCart');
                    cartNumber.innerText = parseInt(cartNumber.innerText) + 1;
                }
                else if (response == '300'){
                    alert('Updated quantity');
                }
                else alert('Something went wrong');
            }
        })
    });
</script>
<?php
}
?>