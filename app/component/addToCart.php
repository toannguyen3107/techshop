<script>
    $(document).on('click', '.add-to-cart', function(){
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
                if (response == '200') alert('Added to cart');
                else alert('Something went wrong');
            }
        })
    });
</script>