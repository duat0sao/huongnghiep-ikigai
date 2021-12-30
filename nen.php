<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nen</title>

	<style>

		body{
		    background-color:white;
		    font-size: 20px;
		    font-family: 'Poppins', sans-serif;
		    /* background-image: linear-gradient(); */
		    width: 100vw;
		    display: flex;
		    justify-content: center;
		    overflow: hidden;
		    position: relative;
		}

		@media only screen and (max-width: 600px) {
			.la-phai, 
		    .la-trai {
		        display: none;
		    }
		}

		.la-phai {
		    position: absolute;
		    right: 0;
		    width: 250px;
		    object-fit: cover;
		    transform: translateX(40%);
		    bottom: 40px;
		    z-index: -1;
		}

		.la-trai {
		    position: absolute;
		    top: 40px;
		    width: 250px;
		    object-fit: cover;
		    transform: translateX(-40%);
		    z-index: -1;
		}
	</style>

</head>
<body>
	 <img class="la-phai" src="img/la1.png" alt="">
     <img class="la-trai" src="img/la2.png" alt="" style="left: 0;">
</body>
</html>