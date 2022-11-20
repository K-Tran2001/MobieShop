var chk = '0';
//----------toast-------------


/*----------Cart--------------*/
let count_cart = document.querySelector('.count-cart')
let count_heart = document.querySelector('.count-heart')
let count_heart_number = 0 //count_heart.innerText
let count_cart_number = 0 //count_cart.innerText

//view-detail








let cartIcon = document.querySelector('#cart-icon')
let cart = document.querySelector('.cart')
let closeCart = document.querySelector('#close-cart')

cartIcon.onclick = () => {
    cart.classList.add('active')
}

closeCart.onclick = () => {
    cart.classList.remove('active')
}





if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}
///function - making

function ready() {
    //console.log(document.getElementsByClassName('cart-remove'))


    updateTotal();

    displayCart();
    displayHeart();



    //remove item from cart
    var removeCartButtoms = document.getElementsByClassName('cart-remove');
    for (var i = 0; i < removeCartButtoms.length; i++) {
        var buttom = removeCartButtoms[i];
        console.log(buttom);
        buttom.addEventListener('click', removeCartItem)
    }
    //change-quantity
    var quantityInputs = document.getElementsByClassName('cart-quantity')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    //add to cart
    var addCart = document.getElementsByClassName('add-cart')
    for (var i = 0; i < addCart.length; i++) {
        var buttom = addCart[i]
        buttom.addEventListener('click', addCartClicked)
    }
    //Buy nơư
    // var buy = document.getElementsByClassName('btn-buy')[0]
    // buy.addEventListener('click', buyButtonClicked)

    //remove item from cart-heart
    var removeCartHeartButtoms = document.getElementsByClassName('cart-heart-remove');
    for (var i = 0; i < removeCartHeartButtoms.length; i++) {
        var buttom = removeCartHeartButtoms[i];
        buttom.addEventListener('click', removeCartHeartItem)
    }
    //add to cart-heart
    var addCartHeart = document.getElementsByClassName('add-cart-heart')
    for (var i = 0; i < addCartHeart.length; i++) {
        var buttom = addCartHeart[i]
        buttom.addEventListener('click', addCartHeartClicked)
    }

}



function addCartClicked(event) { //=>ID
    var buttomClicked = event.target

    var shopProducts = buttomClicked.parentElement
    shopProducts = shopProducts.parentElement //btn-action
    shopProducts = shopProducts.parentElement //showcase-banner
    var productImg = shopProducts.getElementsByClassName('product-img')[0].src;
    shopProducts = shopProducts.parentElement //showcase
    shopProducts = shopProducts.getElementsByClassName('showcase-content')[0]

    var id = shopProducts.getElementsByClassName('product-id')[0].innerText;
    var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopProducts.getElementsByClassName('price')[0].innerText;
    price = price.substring(1, price.length)

    console.log(id, title, price, productImg);
    //var chk = checkId('cart', id);
    $.ajax({
        url: "shopping-cart-func.php?type=cart&action=getdataById",
        type: "post",
        data: {
            id: id,
        },
        success: function (data, status) {
            console.log(data);
            if (data == 1) { //ton tai
                showSuccessToast('Error', title + ' already exists in Your ShoppingCart', 'error');

            } else if (data == 0) {
                addProductToCart(id, title, price, productImg); //=> them 1 cai id de xoa ok hon

                addProductToCart_db(id, title, price, productImg);
                updateTotal();
                showSuccessToast('Success', title + ' has just been added to Your ShppingCart', 'success');
                displayCart();
            }
        },
    });
}

function addProductToCart(id, title, price, productImg) {
    console.log(id + title + price + productImg);
    count_cart_number++;
    count_cart.innerText = count_cart_number;

    var cartShopBox = document.createElement('div')
    cartShopBox.classList.add('cart-box')
    var cartItems = document.getElementsByClassName('cart-content')[0];
    var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');
    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText == 'title') {
            alert('you have already add this item to cart')
            return;
        }
    }

    var cartBoxContent = `
            <img src="${productImg}" alt="" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-id" style="display: none;">${id}</div>
                <div class="cart-product-title">${title}</div>
                <div class="cart-price">${price}</div>
                <input type="number" class="cart-quantity" value="1">
            </div>
            <!---remove-->
            <i class='bx bxs-trash-alt cart-remove'></i>

    `
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);

}



function removeCartItem(event) {
    var id = '';
    var title = '';
    var buttomClicked = event.target
    buttomClicked.parentElement.remove();
    updateTotal();

    buttomClicked = buttomClicked.parentElement //cart-box
    buttomClicked = buttomClicked.getElementsByClassName('detail-box')[0]; //detai-box
    id = buttomClicked.getElementsByClassName('cart-product-id')[0].innerText;
    var shopping_id = buttomClicked.getElementsByClassName('shopping_id')[0].innerText;

    console.log(shopping_id);
    removeCartItem_db(shopping_id);
    showSuccessToast('Success', title + ' has just been removed', 'info');
    count_cart_number--;
    count_cart.innerText = count_cart_number;
}


function quantityChanged(event) {
    var input = event.target;
    var shopping_id = input.parentElement.getElementsByClassName('shopping_id')[0].innerText;
    var number = input.value;

    if (isNaN(input.value) || input.value < 2) {
        input.value = 1;
    }
    updateQuantity(shopping_id, number);
    updateTotal();
}

function buyButtonClicked() {
    alert('Your order is placed')
    var cartContent = document.getElementsByClassName('cart-content')[0];
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);

    }
    //funtion buy=>change database
    count_cart_number = 0;
    count_cart.innerText = count_cart_number;

    updateTotal();



}
function updateQuantity(shopping_id, number) {
    $.ajax({
        url: "shopping-cart-func.php?type=cart&action=updateQuantity",
        type: "post",
        data: {
            shopping_id: shopping_id,
            number: number
        },
        success: function (data, status) {

            console.log(data);

        }

    })
}
function updateTotal() {
    var cartContent = document.getElementsByClassName("cart-content ")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box")
    //console.log(cartBoxes)


    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("$", ""));
        var quantity = quantityElement.value;
        total = total + (price * quantity);

        document.getElementsByClassName('total-price')[0].innerText = '$' + total;

    }
    if (cartBoxes.length == 0) document.getElementsByClassName('total-price')[0].innerText = '$ 0';


}

function displayCart() { //auto render sgopping cart
    $.ajax({
        url: "shopping-cart-func.php?type=cart&action=getdataAll",
        type: "post",
        data: {},
        success: function (data, status) {
            var html = ''; //fetch data


            $("#cart").html(data);
            updateTotal();
            var removeCartButtoms = document.getElementsByClassName('cart-remove');
            count_cart_number = removeCartButtoms.length;
            count_cart.innerText = count_cart_number;
            for (var i = 0; i < removeCartButtoms.length; i++) {
                var buttom = removeCartButtoms[i];
                //console.log(buttom);
                buttom.addEventListener('click', removeCartItem)
            }
            var quantityInputs = document.getElementsByClassName('cart-quantity')
            for (var i = 0; i < quantityInputs.length; i++) {
                var input = quantityInputs[i]
                input.addEventListener('change', quantityChanged)
            }

            //data fetch array
            //duyet tung row=>addProductToCart(id, title, price, productImg);



        }

    })
}

function addProductToCart_db(id, title, price, productImg) {
    console.log(id); console.log("-"); console.log(title); console.log("-");
    console.log(price); console.log("-"); console.log(productImg); console.log("-")
    $.ajax({
        url: "shopping-cart-func.php?type=cart&action=insert",
        type: "post",
        data: {
            id: id,
            title: title,
            price: price, //co $ no fail
            productImg: productImg,

        },
        success: function (data, status) {

            console.log(data);

        }

    })

}

function updateProductToCart_db(id, title, price, productImg, number) {
    $.ajax({
        url: "shopping-cart-func?type=cart&&action=update",
        type: "post",
        data: {
            id: id,
            title: title,
            price: price,
            productImg: productImg,
            number: number


        },
        success: function (data, status) {
            console.log(data)
        }

    })

}

function removeCartItem_db(id) { //evant-> Id
    $.ajax({
        url: "shopping-cart-func.php?type=cart&action=delete",
        type: "post",
        data: {
            shopping_id: id,
        },
        success: function (data, status) {
            console.log(data);
        }

    })


}







/*----------Cart--------------*/

/*----------Heart--------------*/
let cartIconHeart = document.querySelector('#cart-heart')
let cartHeart = document.querySelector('.cart-heart')
let closeCartHeart = document.querySelector('#close-cart-heart')

cartIconHeart.onclick = () => {
    cartHeart.classList.add('active')
}

closeCartHeart.onclick = () => {

    cartHeart.classList.remove('active')
}

function addCartHeartClicked(event) {
    var buttomClicked = event.target
    console.log(buttomClicked);
    var shopProducts = buttomClicked.parentElement
    shopProducts = shopProducts.parentElement //btn-action
    shopProducts = shopProducts.parentElement //showcase-banner
    var productImg = shopProducts.getElementsByClassName('product-img')[0].src;
    shopProducts = shopProducts.parentElement //showcase
    shopProducts = shopProducts.getElementsByClassName('showcase-content')[0]

    var id = shopProducts.getElementsByClassName('product-id')[0].innerText;
    var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopProducts.getElementsByClassName('price')[0].innerText;
    price = price.substring(1, price.length)

    $.ajax({
        url: "shopping-cart-func.php?type=heart&action=getdataById",
        type: "post",
        data: {
            id: id,
        },
        success: function (data, status) {
            console.log(data)
            if (data == 1) { //ton tai
                showSuccessToast('Error', title + ' already exists in Your ShoppingCart', 'error');

            } else if (data == 0) {
                addProductToCartHeart(id, title, price, productImg);
                addProductToHeart_db(id, title, price, productImg);

                showSuccessToast('Success', title + ' has just been added to Your Favorites', 'warning');

            }

        },
    });




}

function addProductToCartHeart(id, title, price, productImg) {

    count_heart_number++;
    count_heart.innerText = count_heart_number;

    var cartShopBox = document.createElement('div')
    cartShopBox.classList.add('cart-box')
    var cartItems = document.getElementsByClassName('cart-heart-content')[0];
    var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');
    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText == 'title') {
            alert('you have already add this item to cart')
            return;
        }
    }
    var cartBoxContent = `
            <img src="${productImg}" alt="" class="cart-img">
            <div class="detail-box">
                <div class="cart-product-id" style="display: none;">${id}</div>
                <div class="cart-product-title">${title}</div>
                <div class="cart-price">${price}</div>
            </div>
            <!---remove-->
            
            <i class='bx bx-heart cart-heart-remove'></i>

    `
    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);
    cartShopBox.getElementsByClassName('cart-heart-remove')[0].addEventListener('click', removeCartHeartItem);

}



function removeCartHeartItem(event) {
    var id = '';
    var title = '';
    var buttomClicked = event.target
    buttomClicked.parentElement.remove();
    //updateTotal();


    buttomClicked = buttomClicked.parentElement //cart-box
    buttomClicked = buttomClicked.getElementsByClassName('detail-box')[0]; //detai-box
    title = buttomClicked.getElementsByClassName('cart-product-title')[0].innerText;
    id = buttomClicked.getElementsByClassName('cart-product-id')[0].innerText;
    removeHeartItem_db(id);
    showSuccessToast('Success', buttomClicked + ' has just been removed', 'info');

    count_heart_number--;
    count_heart.innerText = count_heart_number;

}

function displayHeart() { //auto render sgopping cart

    $.ajax({
        url: "shopping-cart-func.php?type=heart&action=getdataAll",
        type: "post",
        data: {},
        success: function (data, status) {
            $("#heart").html(data);
            //cap nhat so luong
            //remove item from cart-heart
            var removeCartHeartButtoms = document.getElementsByClassName('cart-heart-remove');
            count_heart_number = removeCartHeartButtoms.length;
            count_heart.innerText = count_heart_number;

            for (var i = 0; i < removeCartHeartButtoms.length; i++) {
                var buttom = removeCartHeartButtoms[i];
                buttom.addEventListener('click', removeCartHeartItem)
            }




        }

    })


}

function addProductToHeart_db(id, title, price, productImg) {
    console.log(id, " ", price, "  ", title, "    ", productImg)
    $.ajax({
        url: "shopping-cart-func.php?type=heart&action=insert",
        type: "post",
        data: {
            id: id,
            title: title,
            price: price, //co $ no fail
            productImg: productImg,

        },
        success: function (data, status) {

            console.log(data);

        }

    })

}

function updateProductToHeart_db(id, title, price, productImg, number) {
    $.ajax({
        url: "shopping-cart-func?type=heart&&action=update",
        type: "post",
        data: {
            id: id,
            title: title,
            price: price,
            productImg: productImg,
            number: number


        },
        success: function (data, status) {

        }

    })

}

function removeHeartItem_db(id) { //evant-> Id
    $.ajax({
        url: "shopping-cart-func.php?type=heart&action=delete",
        type: "post",
        data: {
            id: id,
        },
        success: function (data, status) {
            console.log(data);
        }

    })


}



/*----------Heart--------------*/

/*----------User--------------*/

let cartIconUser = document.querySelector('#cart-user')
let cartUser = document.querySelector('.cart-user')
let closeCartUser = document.querySelector('#close-cart-user')

cartIconUser.onclick = () => {
    cartUser.classList.add('active')
}

closeCartUser.onclick = () => {
    cartUser.classList.remove('active')
}

/*----------User--------------*/

//-----------toast-----------
function showSuccessToast(title, message, type) {

    toast({
        title: title,
        message: message,
        type: type,
        duration: 5000
    });
}

function showErrorToast(title, message, type) {
    toast({
        title: title,
        message: message,
        type: type,
        duration: 5000
    });
}
// Toast function
function toast({
    title = "",
    message = "",
    type = "info",
    duration = 3000
}) {
    const main = document.getElementById("toast");
    if (main) {
        const toast = document.createElement("div");

        // Auto remove toast
        const autoRemoveId = setTimeout(function () {
            main.removeChild(toast);
        }, duration + 1000);

        // Remove toast when clicked
        toast.onclick = function (e) {
            if (e.target.closest(".toast__close")) {
                main.removeChild(toast);
                clearTimeout(autoRemoveId);
            }
        };

        const icons = {
            success: "fas fa-check-circle",
            info: "fas fa-info-circle",
            warning: "fas fa-exclamation-circle",
            error: "fas fa-exclamation-circle"
        };
        const icon = icons[type];
        const delay = (duration / 1000).toFixed(2);

        toast.classList.add("toast", `toast--${type}`);
        toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

        toast.innerHTML = `
                <div class="toast__icon">
                    <i class="${icon}"></i>
                </div>
                <div class="toast__body">
                    <h3 class="toast__title">${title}</h3>
                    <p class="toast__msg">${message}</p>
                </div>
                <div class="toast__close">
                    <i class="fas fa-times"></i>
                </div>
            `;
        main.appendChild(toast);
    }

}