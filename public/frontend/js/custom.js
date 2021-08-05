
    function addToCart(product_id){
        $.ajax({
            url: "/add-to-cart/"+product_id,
            method: 'GET',
            data:{},
            success:function(response){
                if(response.success){
                    swal("", "Product added to the cart", "success");
                }

                if(response.unavailable){
                    swal("", "Product Out of Stock", "warning");
                }
                if(response.error){
                    swal("", "Something Wrong", "error");
                }
            }
        });
    }
