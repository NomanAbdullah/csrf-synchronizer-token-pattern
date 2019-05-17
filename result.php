

<!DOCTYPE html>
<html>
	<head>
		<title>Synchronizer Token Pattern</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>
		<div class="bg">
			<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'noman' && $pwd == 'noman'){
		echo '<h1> Hello, '.$uname.'! <br/> You are successfully logged in</h1>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>

		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                  
                    <div class="float">
                      <form class="form" action="home.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white"><h4>Write Something<h4></label><br>
                                <input type="text" name="updatepost" class="form-control">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="token_to_be_added"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn btn-info btn-md" value="Update">
                            </div>
                      </form>
                      <form action="logout.php">  					
    					<div class="form-group">
                            <input type="submit" class="btn btn-info btn-md" value="Logout" />
                        </div>
					</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	</body> 
</html>
