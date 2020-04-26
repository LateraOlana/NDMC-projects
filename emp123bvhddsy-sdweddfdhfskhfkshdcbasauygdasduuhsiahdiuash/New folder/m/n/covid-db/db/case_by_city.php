<?php session_start();

	include('conn0.php');

?>
<!DOCTYPE HTML>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> case by city</title>
        <script type="application/javascript">
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#insidenav']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>
    </head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">HOME</a>
      </div>

  <ul class="nav navbar-nav">
      <li class="active">



				<?php

									if(isset($_SESSION['status'])&& $_SESSION['position']=='admin')
									{
										echo '<li><a href="user.php">USER</a></li>';
									}

									else if(isset($_SESSION['status'])&& $_SESSION['position']=='clerk')
									 {
										 echo '<li><a href="department.php">REGION</a></li>';
										 echo '<li><a href="request.php">DATA SOURCE</a></li>';
										 echo '<li><a href="lab.php">LABORATORY</a></li>';
										 echo '<li><a href="report.php">REPORT</a></li>';
										 echo '<li><a href="guideline.php">GUIDELINE</a></li>';
										 echo '<li><a href="case_by_city.php">CASE BY CITY</a></li>';
											 echo '<li><a href="case_by_country.php"> CASE BY COUNTRY</a></li>';
												echo '<li><a href="case_by_province.php"> CASE BY PROVINCE</a></li>';
									 }
									  else {
									header("location:login.php");
									 }
							?>












		</ul>


    <ul class="nav navbar-nav navbar-right">

                </li>
                <?php

                    if(isset($_SESSION['status']))
                    {
                      echo '<li><a href="process_logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';

                    }
                    else{
                      echo	'<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                        echo  '<li><a href="registration.php">  <span class="glyphicon glyphicon-user"></span>sign up</a>';
                    }

                    ?>

    </ul>
  </div>
</nav>
<link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">


<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>


</div>
<a rel="facebox" href="addcase_city.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" />Add case</button></a><br><br>

<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="17%"> Id </th>
			<th width="10%">Number</th>
			<th width="10%">Date</th>
			<th width="17%"> severly ill </th>
			<th width="10%">critical condition</th>
			<th width="10%">death number</th>
			<th width="17%"> recovery number </th>
			<th width="10%">suspected number</th>
			<th width="10%">under investigation</th>
			<th width="17%"> confirmed number</th>
			<th width="10%">city</th>
		</tr>
	</thead>
	<tbody>

			<?php
				include('conn0.php');
				$result = $db->prepare("SELECT * FROM case_by_city,city where case_by_city.city_id=city.city_id ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['city_id']; ?></td>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['dat']; ?></td>
			<td><?php echo $row['severly_ill']; ?></td>
			<td><?php echo $row['crit_condition']; ?></td>
			<td><?php echo $row['death_no']; ?></td>
			<td><?php echo $row['recov_no']; ?></td>
			<td><?php echo $row['suspect_no']; ?></td>
			<td><?php echo $row['under_inv']; ?></td>
			<td><?php echo $row['confirmed_no']; ?></td>
			<td><?php echo $row['city_name']; ?></td>

			<td><a  title="Click To Edit data" rel="facebox" href="editcase_city.php?id=<?php echo $row['city_id']; ?>"><button class="btn btn-warning btn-mini"> Edit </button></a>
			<a href="#" id="<?php echo $row['city_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini">Delete</button></a></td>
			</tr>
			<?php
				}
			?>

	</tbody>
</table>
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are you sure want to delete? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletecase_city.php",
   data: info,
   success: function(){

   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>











</body>
<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/search.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/home.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
