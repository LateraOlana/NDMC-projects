<?php session_start();

	include('conn.php');

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

        <title> Data access </title>
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

									if(isset($_SESSION['status'])&& $_SESSION['position']=='clerk')
									 {
										 echo '<li><a href="department.php">REGION</a></li>';
										 echo '<li><a href="request.php">Data source</a></li>';
										  echo '<li><a href="lab.php">LABORATORY</a></li>';
										    echo '<li><a href="report.php">REPORTS</a></li>';
										 echo '<li><a href="guideline.php">SITUATION</a></li>';
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
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="10%">Name of title/dataset </th>
			<th width="10%">Year of data conducted</th>
			<th width="10%">data type</th>
			<th width="9%"> Level of disaggregation of data </th>
      	<th width="9%"> Remarks </th>
				<th width="10%">Objective</th>
				<th width="10%">Specific activities</th>
				<th width="9%"> data use/ study period </th>
				<th width="17%"> First name </th>
				<th width="10%">middle Name </th>
				<th width="10%">Last Name</th>
				<th width="10%">Date</th>
					<th width="10%">download</th>
		</tr>
	</thead>
	<tbody>

			<?php
				include('conn.php');
				$result = $db->prepare("SELECT * FROM approved_request");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
				<?php   $_SESSION["app_id"] = $row['id'];   ?>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['year']; ?></td>
			<td><?php echo $row['data_type']; ?></td>
      	<td><?php echo $row['level']; ?></td>
			<td> <?php echo $row['remarks']; ?></td>
			<td><?php echo $row['objective']; ?></td>
				<td><?php echo $row['act']; ?></td>
			<td> <?php echo $row['data_use']; ?></td>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['mname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['dat']; ?></td>
					<td><a href="fpdfmysql.php">download</a></td>

		</tr>
			<?php
				}
			?>

	</tbody>
</table>








</body>
<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/search.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/home.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
