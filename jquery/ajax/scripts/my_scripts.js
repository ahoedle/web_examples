
$(document).ready(function() {

	var FREQ = 10000;
	
	function showFrequency() {
		$("#freq").html("Page refreshes every " + FREQ/1000 + " second(s).");
	}
	
	function getTimeAjax() {
		$("#updatedTime").load("time.php");
	}

	function startAJAXcalls() {
		setTimeout(function() {
			getXMLRacers();
			startAJAXcalls();
		}, FREQ);
	}
	
	function getXMLRacers() {
		$.ajax({
			url: "finishers.xml",
			cache: false,
			dataType: "xml",
			success: function(xml) {
				// empty all the ul elements so they can get updated data
				$('#finishers_m').empty();
				$('#finishers_f').empty();
				
				// loop through each runner element in the XML file
				$(xml).find("runner").each(function() {
					var info = '<li>Name: ' + $(this).find("fname").text() + ' ' + $(this).find("lname").text() + '. Time: ' + $(this).find("time").text() + '</li>';
					
					if ($(this).find("gender").text() == "m") {
						$('#finishers_m').append(info);
					} else if ($(this).find("gender").text() == "f") {
						$('#finishers_f').append(info);
					} else {
						
					}
					$('#finishers_all').append(info);					
				});
				
				// call the getTime function to update the page with the last time the getXMLRacers function was called
				getTimeAjax();
			}
		});
		
	}
    
    showFrequency();
	getXMLRacers();
	startAJAXcalls();
});
