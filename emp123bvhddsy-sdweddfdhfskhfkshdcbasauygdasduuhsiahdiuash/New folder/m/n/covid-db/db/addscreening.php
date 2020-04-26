<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savescreening.php" method="post">

<center><h4> Add screening</h4></center>
<hr>
<div id="ac">
<span>number of rumors: </span><br><span><input type="text" style="width:200px; height:30px;" name="a" placeholder="number of rumors"/></span>

  <br><span>by rumors who fulfilled suspected cases: </span><br><span><input type="text" style="width:200px; height:30px;" name="b" placeholder="no suspected" /></span>
  <br>
  <span>by rumors who did not fulfilled suspected cases: </span><br><span><input type="text" style="width:200px; height:30px;" name="c" placeholder="no_fulfilled suspected case" /></span>
  <br>
  <span>total screened: </span><br><span><input type="text" style="width:200px; height:30px;" name="d" placeholder="total screened"/></span>
  <br>
  <span>travel history to 2019_nCoV affected countries: </span><br><span><input type="text" style="width:200px; height:30px;" name="e" placeholder="travel history to affected countries" /></span>
  <br>
  <span>travel history to china: </span><br><span><input type="text" style="width:200px; height:30px;" name="f" placeholder="travel history to china " /></span>
  <br>
  <span>travels are on follow_up: </span><br><span><input type="text" style="width:200px; height:30px;" name="g" placeholder="number of travels follow up" /></span>
  <br>
<br><span>date: </span><span><br><input type="date" style="width:200px; height:30px;" name="h" required/><br>

<button class="btn btn-success btn-block btn-large" style="width:267px;"> Save</button>
</div>
</div>
</form>
