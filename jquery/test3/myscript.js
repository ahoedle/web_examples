
$(document).ready(function() {
	
	$(".nav").click(checkForCode);
	
	$(".nav").hover(
		function() { //mouseenter
			$(this).removeClass("nohover");
			$(this).addClass("hover");
		},
		function() { //mouseleave
			$(this).removeClass("hover");
			$(this).addClass("nohover");
		}
	);
	
	function getRandom(num) {
		return Math.floor(Math.random() * num);
	}
	
	function hideCode() {
		var numRand = getRandom(4);
		
		$(".nav").each(function(index, value) {
			if (numRand == index) {
				$(this).append("<span id='has_discount'></span>");
				return false;
			}
		});
	}
	
	hideCode();
	
	function checkForCode() {

		var discount;
		
		if ($.contains(this, document.getElementById("has_discount"))) {
			var my_num = getRandom(100);
			discount = "<p>Your Code: CODE" + my_num;
		} else {
			discount = "<p>Sorry, no discount this time!</p>";
		}
		
		$(".nav").each(function() {
			if ($.contains(this, document.getElementById("has_discount"))) {
				$(this).addClass("discount");
			} else {
				$(this).addClass("no_discount");
			}
			
			$(this).unbind();
		});
		
		$("#result").append(discount);
				
	}

});