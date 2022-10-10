
<html>
<head>
<script type="text/javascript">
function check(str){
document.write(str)
document.write("<select name='select' onchange='check(this.value)'><option>---select---</option><option>one</option><option>two</option><option>three</option></select>")
alert(str)
}

</script>
</head>
<body>

<select name="select" onchange="check(this.value)">
<option>---select---</option>
<option>1</option>
<option>2</option>
<option>3</option>
</select>

</body>
</html>

<?php
function phpfun(){
echo 'Selected Value:';
}
?>