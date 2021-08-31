

$(document).ready(function(){
	$("#searchbox").keyup(function(){
		var result = "";
		var search_string = $("#searchbox").val();
		
		if(search_string.trim() !== ""){

			$.ajax({
				type: "POST",
				url: "inc/search.php",
				data:{
					search: search_string,
					another_data:1
				},
				success: function(datas){
					if(datas.length > 0){

						var myObj = JSON.parse(datas);
						var i, item;

						for (i = 0; i < myObj.length; i++) {
							
							result += '<tr><td class="borderless"><a href="download.php?postid='+myObj[i][0]+'">'+myObj[i][1]+'</a></td></tr>';
						}
						var output = "<table class='table table-borderless table-sm'>"+result+"</table>";
						$("#search_result").html(output);
					}else{
						$("#search_result").html("<p class='text-danger'>No result found</p>");
					}
				}
			});

		}


	});
});
