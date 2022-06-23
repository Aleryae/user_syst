<?php
    include_once 'config.php';

    function loadClass($class){
        require 'components/'.$class.'.php';
    }

    spl_autoload_register('loadClass');

	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Users Test</title>
</head>

<body>
	<div class="container-fluid p-0 mb-5">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
			<a href="index.php?page=userlist" class="nav-link text-light">User System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="index.php?page=userform" class="nav-link text-light">Sign up</a>
					</li>
					<li class="nav-item">
						<a href="index.php?page=userlist" class="nav-link text-light">User List</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<?php
		if(isset($_GET['page'])){
			if($_GET['page'] === 'userform'){
				include_once 'forms/userForm.php';
			}
			else if($_GET['page'] === 'userlist'){
				include_once 'content/userList.php';
			}
		}
		
	?>
</body>

</html>