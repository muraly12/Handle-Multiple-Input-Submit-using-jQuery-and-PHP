<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("body").on('click','.btn_show',function(event){
	  //var val2 = $("#this").attr("class");
	   var values = $('#frm_message_board').serialize();
	   //  var values = $(this).closest('form').serializeArray();

	  var val = $(this).attr("name");
	  alert(val);
       $.ajax({
		url: 'content.php',
		type: 'post',
		data: values + "&val=" +val,
		dataType :'html',
		success: function(response) 
		{ 
		$("#mydata").html(response);
		//console.log(response);
		}
});
    });
});
</script>
</head>
<body>
<form id="frm_message_board" method="POST">
<input type="text" name="fname"/><br>
<input type="text" name="lname"/><br>
<button type="button"  name="btn_show" class="btn_show">Show Data</button> 
<button type="button"  name="btn_show2" class="btn_show">Show Data</button> 
<button type="button"  name="btn_show2" class="btn_show">Show Data</button> 
<div id="mydata"></div>
</form>




</body>
</html>