
$(".map-nav a").on('click', function() {
	$(this).next("ul").toggleClass("active");
	$(this).parent().toggleClass("current");
	return false;
});

$(".map-nav>li>ul>li>a").on('click', function(){
	$(this).parent().siblings().addClass('is-hidden');
	console.log('test');
})


