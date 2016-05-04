	$(".map-nav a").on("click",function() {
		if($(this).next("ul").length > 0) { //if there's a sibling ul
			$(".map-nav a").removeClass("current"); //clear top tabs
			$(this).parents('.top:first').find("a:first").addClass("current"); //make this top tab current
			$(".map-nav ul").removeClass("active"); //clear all subnavs
			$("li.back").remove();
			$(this).next("ul").addClass("active");
			return false;
		} else {
			alert("do something else");
			return false;
		}
	});
<<<<<<< Updated upstream
	
=======
>>>>>>> Stashed changes
