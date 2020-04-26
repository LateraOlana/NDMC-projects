<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savecase_city.php" method="post">

<center><h4> Add case</h4></center>
<hr>
<div id="ac">
<span>number: </span><br><span><input type="text" style="width:200px; height:30px;" name="no" placeholder="number" Required/></span>
<br><span>date: </span><span><br><input type="date" style="width:200px; height:30px;" name="date" required/><br>
  <span>severly ill: </span><br><span><input type="text" style="width:200px; height:30px;" name="severly_ill" placeholder="severly ill"/></span>
  <br>
  <span>critical condition: </span><br><span><input type="text" style="width:200px; height:30px;" name="crit_condition" placeholder="critical condition" /></span>
  <br>
  <span>death number: </span><br><span><input type="text" style="width:200px; height:30px;" name="death_no" placeholder="death number" /></span>
  <br>
  <span>recovery number: </span><br><span><input type="text" style="width:200px; height:30px;" name="recov_no" placeholder="recovered number" /></span>
  <br>
  <span>suspected number: </span><br><span><input type="text" style="width:200px; height:30px;" name="suspect_no" placeholder="suspected number"/></span>
  <br>
  <span>under investigation: </span><br><span><input type="text" style="width:200px; height:30px;" name="under_inv" placeholder="under investigation" /></span>
  <br>
  <span>confirmed bumber: </span><br><span><input type="text" style="width:200px; height:30px;" name="confirmed_no" placeholder="confirmed number"/></span>
  <br>
  <span>province:
  <SELECT name="city_name" style="width:200px;">
  <?php

$link=mysqli_connect("localhost","root","") or die("cant connect");

mysqli_select_db($link,"corona") or die("cant select db");


$q="select * from city";

$res=mysqli_query($link,$q) or die('wrong query');

while($row=mysqli_fetch_assoc($res))
{
  echo "<option>".$row['city_name'];
}
?>
</SELECT>
<button class="btn btn-success btn-block btn-large" style="width:267px;"> Save</button>
</div>
</div>
</form>
