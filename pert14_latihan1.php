<?php
$con = mysqli_connect("localhost","root","","rahadian");?> 
<h1>Anda berhasil LOGIN</h1>
<h2>Klik <a href='session2.php'>di sini
(session2.php)</a>
untuk menuju ke halaman pemeriksaan session";
}
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html> 