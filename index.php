<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Snake highlight</title>

      <link rel="stylesheet" href="./style.css">

</head>

<body>


      <div class="form">
        <label for="email">Usuario</label>
        <input type="text" name="usuario">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit" id="submit" value="Submit">
      </div>
    </div>
  </div>
</div>

<?php
		if(isset($_POST['usuario'])&&isset($_POST['password'])){
			require_once "php/connect.php";
			require_once "procesos/login.php";
		}
	?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>



    <script  src="./script.js"></script>




</body>

</html>
