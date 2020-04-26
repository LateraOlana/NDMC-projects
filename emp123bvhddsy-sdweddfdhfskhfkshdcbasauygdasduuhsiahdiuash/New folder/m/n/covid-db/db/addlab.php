<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savelab.php" method="post">
<center><h4> Add laboratory</h4></center>
<hr>
<div id="ac">
<br><span>date: </span><span><br><input type="date" style="width:200px; height:30px;" name="h" required/><br>
<span>Number of tested </span><br><span><input type="text" style="width:200px; height:30px;" name="a" placeholder="number of tested"/></span>
  <br><span>Total positive: </span><br><span><input type="text" style="width:200px; height:30px;" name="b" placeholder="number of positive" /></span>
  <br>
  <span>Total negative: </span><br><span><input type="text" style="width:200px; height:30px;" name="c" placeholder="number of negative" /></span>
  <br>
  <span>Total pending: </span><br><span><input type="text" style="width:200px; height:30px;" name="d" placeholder="number of pending"/></span>
  <br>
<button class="btn btn-success btn-block btn-large" style="width:267px;"> Save</button>
</div>
</div>
</form>
