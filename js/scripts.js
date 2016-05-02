
$(".map-nav a").on('click', function() {
	//$(".map-nav ul").removeClass("active");
	$(this).next("ul").addClass("active");
	return false;
});

$(".map-nav>li>ul>li>a").on('click', function(){
	$(this).parent().siblings().addClass('is-hidden');
	console.log('test');
})


