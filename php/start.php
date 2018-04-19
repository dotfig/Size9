<?php include "common.php";
cow_header();
?>
	<div id="main">
		<form id="loginform" action="../login.html" method="post">
			<div><input name="name" type="text" size="8" autofocus /> <strong>User Name</strong></div>
			<div><input name="password" type="password" size="8" /> <strong>Password</strong></div>
			<div><input type="submit" value="Log in" /></div>
		</form>
	</div>
<?php cow_footer(); ?>