<?php
include 'config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ikigai.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<title>Tôi được trả tiền vì gì</title>

	<style>

		@media only screen and (max-width: 600px) {
			.header h1 {
				padding: 0 12px;
				font-size: 24px;
			}

			.conttent h3 {
				padding: 30px 12px;
				font-size: 18px;
			}
		}

		.header {
			display: flex;
			justify-content: center;
			margin: 40px 0;
			color: #e9558b;
		}

		.conttent {
			width: 80%;
			margin: 0 auto;
		}

		.conttent h3 {
			padding: 30px 12px;
		}
	</style>
</head>
<body>




	<?php include('header.php');?>





	<div class="header">
		<h1>Các công việc hot hiện nay</h1>
	</div>

	<div class="container">
		<div class="row">
			<form class="navbar-form navbar-left" role="search">
    <div class="form-group" style="display:table; white-space:nowrap;">

      <input type="text" class="form-control" placeholder="Search" size=60px style="margin:0px; min-width:160px; width:65%;"></input>

    	<button type="submit" class="btn btn-danger" style="margin:0px;">Search</button>

        </div>
  </form>
		</div>
	</div>
	

	<div class="conttent">
			<!-- 21:9 aspect ratio -->
		<h3>Top 9 ngành nghề hot có triển vọng trong tương lai</h3>
		<div class="embed-responsive embed-responsive-21by9">
		 <iframe src="https://www.youtube.com/embed/wrxAMIj0-Z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<!-- 16:9 aspect ratio -->
		<h3>Review ngành nghề hot</h3>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe src="https://www.youtube.com/embed/OMHH8O6XV0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<!-- 4:3 aspect ratio -->
		<h3>Tìm hiểu ngành hề hot cùng shark</h3>
		<div class="embed-responsive embed-responsive-4by3">
		  <iframe src="https://www.youtube.com/embed/9ua4oEsl_xs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>


    
</body>
</html>