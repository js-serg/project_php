<html>

<body>
<form method="POST" action = " ">
	<input type = "text" id = "nm" name = "name" /> Имя;
	<input type = "text" name = "mmail" /> e-mail;
	<input type = "text" name = "coment" /> Сообщение
	<input type = "submit" value="Отправить" /> 
<form>

<?php 
	if(isset($_POST['name']))
	{
	$name = $_POST['name'];
	$mail = $_POST['mmail'];
	//$coment = $_POST['coment'];

	//echo $name; 

}


 ?>
/*
<script type="text/javascript">


var nm = document.getElementById('nm');
	
		url = "yyy.php"; 
				
						$.ajax({
							url: url,
							type: 'POST',
							 data: {name : nm
									
									},
							success: function(data){
								
							//$('.ord_result').html(data);
									
							
					}
				});				


</script> */
<?php
//if($result){
echo $name; 
//}

?>

</body>
</html>