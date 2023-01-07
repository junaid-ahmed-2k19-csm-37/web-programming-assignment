<html>
<link rel="stylesheet" href="style.css">
<body>
<header>
<blockquote>
<h1 style="color:white; height:9vh ; padding-top:1rem; 
	text-transform:uppercase ; font-family:Algerian">MY Book Store</h1>;
</blockquote>
</header>
<blockquote>
<div class="container">
<center><h1>Login</h1></center>
<form action="checklogin.php" method="post">
    Username:<br><input type="text" name="username"/>
    <br><br>
    Password:<br><input type="password" name="pwd" />
    <br><br>
    <input class="button" type="submit" value="Login"/>
    <input class="button" type="button" name="cancel" value="Cancel" onClick="window.location='index.php';" />
</form>
</div>
<blockquote>
<?php
if(isset($_GET['errcode'])){
    if($_GET['errcode']==1){
        echo '<span style="color: red;">Invalid username or password.</span>';
    }elseif($_GET['errcode']==2){
        echo '<span style="color: red;">Please login.</span>';
    }
}

?>
</body>
</html>