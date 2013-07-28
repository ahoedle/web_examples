
$(document).ready(function() {

var v = false;

	$("button#vegOn").click(function() {
		if (v == false) {
			fish = $(".fish").parent().parent().detach();
			$(".hamburger").replaceWith("<li class='portobello'><em>Portobello Mushroom</em></li>");
			$(".meat").after("<li class='Tofu'><em>Tofu</em></li>");
			meat = $(".meat").detach();
			$(".menu_entrees").children().addClass("veg_leaf");
			
			v = true;	
		}
	});
	
	$("button#restoreMe").click(function() {
		if (v == true) {
			$(".menu_entrees li").first().before(fish);
			$(".portobello").replaceWith("<li class='hamburger'><em>Hamburger</em></li>");
			
			$(".menu_entrees").children().removeClass("veg_leaf");

			$(".Tofu").each(function(i) {
				$(this).after(meat[i]);
			});		
			$(".Tofu").remove();

			v = false;	
		}
	});

});