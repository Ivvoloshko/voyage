// ______________________
var $j = jQuery.noConflict();
 
$j(function(){
 
    $j("#sidebar li a").hover(function(){
        $j(this).stop().animate({
            paddingLeft: "20px&"
        }, 400);
    }, function() {
        $j(this).stop().animate({
            paddingLeft: 0
        }, 400);
    });
 
});

// _______________________
window.onscroll = function showHeader() {
    var header = document.querySelector('.header');
    if(window.pageYOffset > 500){
        header.classList.add('header_fixed');
    } else{
        header.classList.remove('header_fixed');
    }
}
// ___________________________
var button = document.getElementById('hamburger-menu'),
    span = button.getElementsByTagName('span')[0];

button.onclick =  function() {
  span.classList.toggle('hamburger-menu-button-close');
};

$j('#hamburger-menu').on('click', toggleOnClass);

function toggleOnClass(event) {
  var toggleElementId = '#' + $j(this).data('toggle'),
  element = $j(toggleElementId);
  element.toggleClass('on');
}

// close hamburger menu after click a
$j( '.menu li a' ).on("click", function(){
	$j('#hamburger-menu').click();
});

