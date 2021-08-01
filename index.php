<html>
<head>
	<title>csv insert</title>
<style>
body {
  background-image: url('hdd.jpg');
  background-repeat: repeat;
  background-attachment: fixed;  
  background-size: auto;
}
div {
  background-color: lightgrey;
  width: 400px;
  height:150px;
  top:20%;
  left:25%;
  position: absolute;
  margin-top:-50px;
  margin-left:-50px;
  border: 45px yellow;
  padding: 80px;
  margin: 40px;
}
</style>
</head>
<body><div><br><br>
<form action="insert.php" method="post" enctype="multipart/form-data" >
<input type="file" name="csvfile" required="required" accept=".csv"/>
<input type="submit" value="upload" style="height:30px; width:100px; display:inline-block;" />
</form>
<center><h2><B> &nbsp &nbsp UPLOAD THE CSV FILES</B></h2></center>
</div>
</body>
<html>