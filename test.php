<!DOCTYPE HTML>
<html>
	<head>
		<title>Test</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>
	<body>
	
<form method="post">
		<input type="text" name="code" id="code" style="width:50px" value="">
		<select id="cities" name="cities" style="width:100px">
		</select>
		</form>	
	</body>
</html>
<script>
$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: 'select.php',
			success:function(data){
				console.log(data);
				var array = JSON.parse(data);
				for(var i = 0; i < array.length; i++){
					$('#cities').append('<option>' +array[i]+ '</option>');
				}
			},
			error: function(error) { console.log(error); },
			complete: function() { console.log('complete'); }
		});
		
	$('#cities').change(function(){
			var selected =  $('#cities').val();
			$.ajax({
			type: 'GET',
			url: 'array.php',
			data:{
				city:selected
			},
			success:function(data){
				console.log(data);
				$('#code').val(data);				
			},
			error: function(error) { console.log(error); },
			complete: function() { console.log('complete'); }
		
			});
			});	
});
</script>