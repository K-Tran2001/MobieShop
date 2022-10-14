var views = document.getElementsByClassName('view-detail');

for (var i = 0; i < views.length; i++) {
    var buttom = views[i];
    buttom.addEventListener('click', viewDetail)
}

function viewDetail(event) {

    var buttomClicked = event.target
    viewProductName = buttomClicked.parentElement //btn-action
    viewProductName = viewProductName.parentElement //showcase-action
    viewProductName = viewProductName.parentElement //showcase-banner
    viewProductName = viewProductName.parentElement //showcase
    viewProductName = viewProductName.getElementsByClassName('showcase-content')[0]
    viewProductName = viewProductName.getElementsByClassName('product-id')[0]
    var id = viewProductName.innerText;



    window.location.href = 'view.php?id=' + id;
}