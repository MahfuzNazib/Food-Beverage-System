function addToCart(product_id) {
    var quantity = $('#quantity').val();
    if (!quantity) {
        qnty = 1;
    } else if (quantity <= 0) {
        swal("", "Invalid Product quantity", "error");
        return false;
    } else {
        qnty = quantity;
    }
    $.ajax({
        url: "/add-to-cart/" + product_id + "/" + qnty,
        method: 'GET',
        data: {},
        success: function (response) {
            if (response.success) {
                swal("", "Product added to the cart", "success");
            }

            if (response.unavailable) {
                swal("", "Product Out of Stock", "warning");
            }
            if (response.error) {
                swal("", "Something Wrong", "error");
            }
        }
    });
}

// Item Remove
function itemRemove(product_id){
    $.ajax({
        url: "/item-remove/" + product_id,
        method: 'GET',
        data: {},
        success: function (response) {
            if (response.success) {
                swal("", "Product Removed", "success");
            }
        }
    });
}
