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
	<?php
		if(isset($_GET['page'])){
			if($_GET['page'] === 'userform'){
				include_once 'forms/userForm.php';
			}
			else if($_GET['page'] === 'profile'){
				include_once 'content/profile.php';
			}
		}
		
	?>
</body>

</html>