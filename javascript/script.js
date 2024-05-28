// toggle class active hamburger menu

const navbarNav= document.querySelector ('.navbar-nav');
// ketika hamburger menu diklik
document.querySelector('#hamburger-menu').onclick = ( ) => {
    navbarNav.classList.toggle('active');
};

// klik diluar elemen
const hamburger= document.querySelector('#hamburger-menu'); 

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

// PROFIL START

    const subMenu= document.querySelector('.sub-menu-warp');

    document.querySelector('.user-pic').onclick = () => {
        subMenu.classList.toggle('active');
    }
    
    // const subMenu = document.getElementById("subMenu");

    // function toggleMenu (){
    //     subMenu.classList.toggle("active");
    // }
// PROFIL END

// Set Value
// document.getElementById('price').value= "Rp 6000";

// let result = document.querySelector('#totalharga');
// Get Value




function getVal() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price = document.getElementById('item').getAttribute('value');
    var name = document.getElementById('item').getAttribute('name');
    document.getElementById('h').value= price;
    document.getElementById('harga').value= price;
    document.getElementById('totalharga').value= price;
    document.getElementById('name').value= name;

    const btn = document.getElementById('item');
    btn.style.border="2px solid #3d76fc";
}

function getVal1() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price1 = document.getElementById('price1').getAttribute('value');
    var name1 = document.getElementById('price1').getAttribute('name');
    document.getElementById('h').value= price1;
    document.getElementById('harga').value= price1;
    document.getElementById('totalharga').value= price1;
    document.getElementById('name').value= name1;

    const btn = document.getElementById('price1');
    btn.style.border="2px solid #3d76fc";
}


function getVal2() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price2 = document.getElementById('price2').getAttribute('value');
    var name2 = document.getElementById('price2').getAttribute('name');
    document.getElementById('h').value= price2;
    document.getElementById('harga').value= price2;
    document.getElementById('totalharga').value= price2;
    document.getElementById('name').value= name2;
    document.getElementById('price2').style.border="2px solid #3d76fc";
    // alert(price2);
}

function getVal3() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price3 = document.getElementById('price3').getAttribute('value');
    var name3 = document.getElementById('price3').getAttribute('name');
    document.getElementById('h').value= price3;
    document.getElementById('harga').value= price3;
    document.getElementById('totalharga').value= price3;
    document.getElementById('name').value= name3;
    document.getElementById('price3').style.border="2px solid #3d76fc";
    // alert(price3);
}

function getVal4() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price4 = document.getElementById('price4').getAttribute('value');
    var name4 = document.getElementById('price4').getAttribute('name');
    document.getElementById('h').value= price4;
    document.getElementById('harga').value= price4;
    document.getElementById('totalharga').value= price4;
    document.getElementById('name').value= name4;
    document.getElementById('price4').style.border="2px solid #3d76fc";
    // alert(price4);
}
function getVal5() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price5 = document.getElementById('price5').getAttribute('value');
    var name5 = document.getElementById('price5').getAttribute('name');
    document.getElementById('h').value= price5;
    document.getElementById('harga').value= price5;
    document.getElementById('totalharga').value= price5;
    document.getElementById('name').value= name5;
    document.getElementById('price5').style.border="2px solid #3d76fc";
    // alert(price5);
}
function getVal6() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price6 = document.getElementById('price6').getAttribute('value');
    var name6 = document.getElementById('price6').getAttribute('name');
    document.getElementById('h').value= price6;
    document.getElementById('harga').value= price6;
    document.getElementById('totalharga').value= price6;
    document.getElementById('name').value= name6;
    document.getElementById('price6').style.border="2px solid #3d76fc";
    // alert(price6);
}
function getVal7() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price7 = document.getElementById('price7').getAttribute('value');
    var name7 = document.getElementById('price7').getAttribute('name');
    document.getElementById('h').value= price7;
    document.getElementById('harga').value= price7;
    document.getElementById('totalharga').value= price7;
    document.getElementById('name').value= name7;
    document.getElementById('price7').style.border="2px solid #3d76fc";
    // alert(price7);
}
function getVal8() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price8 = document.getElementById('price8').getAttribute('value');
    var name8 = document.getElementById('price8').getAttribute('name');
    document.getElementById('h').value= price8;
    document.getElementById('harga').value= price8;
    document.getElementById('totalharga').value= price8;
    document.getElementById('name').value= name8;
    document.getElementById('price8').style.border="2px solid #3d76fc";
    // alert(price8);
}
function getVal9() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price9 = document.getElementById('price9').getAttribute('value');
    var name9 = document.getElementById('price9').getAttribute('name');
    document.getElementById('h').value= price9;
    document.getElementById('harga').value= price9;
    document.getElementById('totalharga').value= price9;
    document.getElementById('name').value= name9;
    document.getElementById('price9').style.border="2px solid #3d76fc";
    // alert(price9);
}
function getVal10() {
    var id = document.getElementById('id').value;
    var server = document.getElementById('server').value;
    document.getElementById('akunid').value = id;
    document.getElementById('akunserver').value = server;

    var price10 = document.getElementById('price10').getAttribute('value');
    var name10 = document.getElementById('price10').getAttribute('name');
    document.getElementById('h').value= price10;
    document.getElementById('harga').value= price10;
    document.getElementById('totalharga').value= price10;
    document.getElementById('name').value= name10;
    document.getElementById('price10').style.border="2px solid #3d76fc";
}


// Popup start
function toggle() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var Popup = document.getElementById('popup');
    Popup.classList.toggle('active');
}

function Closetoogle() {
    var blur = document.getElementById('blur');
    blur.classList.remove('active');
    var Popup = document.getElementById('popup');
    Popup.classList.remove('active');
}

// Popup end

// document.getElementById('totalharga').value= "Rp 6000";


// Produk button
//  const btn = document.getElementById('price1');


//  btn.addEventListener('click', (e) => {
//  btn.style.backgroundColor = '#fffffe';
//  btn.style.boxShadow = '0 0 40px #ffac09';
//  });





// produk button -End
// // toggle class active searchbar
// const searchForm= document.querySelector('.search-form');
// const searchBox= document.querySelector('#search-box');

// document.querySelector('#search-button').onclick = (e) => {
//     searchForm.classList.toggle('active');
//     searchBox.focus();
//     e.preventDefault();
// }

// // klik diluar untuk menghilangkan nav
// const search= document.querySelector('#search-button');

// document.addEventListener('click', function(e) {
//     if(!search.contains(e.target) && !searchForm.contains(e.target)) {
//         searchForm.classList.remove('active');
//     }
//  });


// Swiper Start
//  var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     grabCursor: true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//         pauseOnMouseEnter: true,
//     },
//     slidesPerGroup: 3,
//     loop: true,
//     loopFillGroupWithBlank: true,
//     pagination: {
//         El: '.swiper-pagination',
//         clickable: true,
//     },
//     navigation: {
//         next: '.swiper-button-next',
//         prev: '.swiper-button-prev',
//     },
//  });



// toggle class active shopping-cart 
// let button = document.querySelector('#shopping-cart-button');
// let openShopping = document.querySelector('.shopping-cart');
// let closeShopping = document.querySelector('.CloseShopping');
// let list = document.querySelector('.list');
// let listcard = document.querySelector('.listcard');
// let body = document.querySelector('body');
// let total = document.querySelector('.total');
// let quantity = document.querySelector('.quantity');

//     button.addEventListener('click', () => {
//         openShopping.classList.add('active');
//     })

//     closeShopping.addEventListener('click', () => {
//         openShopping.classList.remove('active');
//     })

//     search.addEventListener('click', ()=> {
//         openShopping.classList.remove('active');
//     })

//  let shoppingcart= document.querySelector('.shopping-cart');
//  const closeshopping = document.querySelector('.CloseShopping');
//  // ketika shopping cart di klik
// document.querySelector('#shopping-cart-button').onclick = (e) => {
//      shoppingcart.classList.toggle('active');
//      e.preventDefault();
//  };
// // klik diluar elemen
// const sc = document.querySelector('#shopping-cart-button');
// document.addEventListener('click', function(e) {
//     if(!shoppingcart.contains(e.target) && !sc.contains(e.target)) {
//         shoppingcart.classList.remove('active');
//     }
// });


// KASIR START



// function button () {
    
//     var nama = document.getElementById("nama").textContent;
//     var harga = document.getElementById("p").textContent;

//     document.getElementById("input-nama").value = nama;
//     document.getElementById("input-harga").value = harga;
// }
// document.querySelector('#button1').onclick = ( ) => {
//     document.getElementById('#input-nama').value = nama;
//     document.getElementById('#input-harga').value = harga;
// };


// var nama = document.getElementById('#nama1').innerHTML;

//   function inputvalue (){
//       var input = document.getElementById('input');
//       input.value = nama;
// }

// var price= document.getElementById("price"),rIndex;

// for(var i = 0; i < price.rows.lenght; i++) 
// {
//     price.rows[i].onclick = function() {
//         rIndex = this.rowIndex;
//         console.log(rIndex);

//         document.getElementById("produk").value = this.cells[0].innerHTML;
//         document.getElementById("harga").value = this.cells[0].innerHTML;
//     };
// }

