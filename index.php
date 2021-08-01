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
<input type="submit" value="UPLOAD" style="height:50px; width:100px; border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
font-family:calibri;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;background-color: #4CAF50; display:inline-block;" />
</form>
<center><h2><B><p style=font-family:verdana"> &nbsp &nbsp UPLOAD THE CSV FILES</style></B></h2></center>
</div>
</body>
<html>