    //show cart function
    function showCart(cart) {
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    //clear all cart function
    function clearCart() {
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function (res) {
                if(!res) console.log('Error');
                //if ok
                showCart(res);
            },
            error: function () {
                console.log('Error!');
            }
        });
    }

    //delete one product
    $('#cart .modal-body').on('click', 'del-item', function () {
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/del-item',
            data: {id: id},
            type: 'GET',
            success: function (res) {
                if(!res) console.log('Error');
                //if ok
                showCart(res);
            },
            error: function () {
                console.log('Error!');
            }
        });
    });

    // add to cart ajax
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id'),
            qty = $('#qty').val();
        $.ajax({
            url: '/cart/add',
            data: {id: id, qty: qty},
            type: 'GET',
            success: function (res) {
                if(!res) console.log('Error');
                //if ok
                showCart(res);
            },
            error: function () {
                console.log('Error!');
            }
        });
    });

    //get cart
    function getCart() {
        $.ajax({
            url: '/cart/show',
            type: 'GET',
            success: function (res) {
                if(!res) console.log('Error');
                //if ok
                showCart(res);
            },
            error: function () {
                console.log('Error!');
            }
        });
    }