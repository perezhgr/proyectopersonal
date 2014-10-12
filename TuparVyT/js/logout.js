$("#logout").click(function() {

	$.ajax({
	  url: "logout.php",
	  success: function(data)
			   {
				   window.location = "home.php";
				}
	});
 
	return false;
});