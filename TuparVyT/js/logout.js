$(document).ready(function() {
	$("#logout").click(function() {

		$.ajax({
			url: "logout.php",
			success: function(data)
			{
				window.location = "index.php";
			}
		});
		
		return false;
	});
});