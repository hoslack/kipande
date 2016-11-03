<!DOCTYPE html>
<html>
<head>
	<title>test validation</title>

	<script type="text/javascript">
		
    function validateForm() {
    var x = document.getElementById('idnumber').value;
    if (x <=9999999 || x >99999999) {
        alert("Invalid Id number. Id number must be 8 digits!!");
        return false;
    }
}


	</script>

</head>


<body>

<form name="myform" action="test.php" onsubmit="return validateForm()" method="post">
Name: <input type="number" name="idnumber" id="idnumber">
<input type="submit" value="Submit">
</form>



</body>
</html>


<!-- forms["myform"]["idnumber"].value; -->