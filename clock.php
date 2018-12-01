<html><head>
<script type="text/javascript">
function startTime()
{
var d= new Date();
var h= d.getHours();
var m= d.getMinutes();
var s= d.getSeconds();
document.getElementById("txt").innerHTML= h+" : "+m+" : "+s;
setTimeout('startTime()', 1000);
}
</script>
</head>
<body onload="startTime()">
<h1> The time from the local system is:
<span id= "txt"></span>
</h1>
<h1>
<?php echo "The time from the server is " . date("h:i:sa");?>
</h1>
</body>
</html>