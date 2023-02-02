$(document).ready(function() {

$("ul li a").hover(function () {   //mouseover //mouseenter //mouseleave

var color = $(this).data("color");
$("body").css("background", color);
});
});