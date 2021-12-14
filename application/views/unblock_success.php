<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!DOCTYPE html>
<!-- Unblock_success page will show if user unblock account request has been successful. -->
<head>
	<title>Unblock Account</title>
	<!-- Style -->
	<style type="text/css">
		html{
			background: #2735b6;
			background: -webkit-linear-gradient(left, #2735b6, #2735b6);
            background: -o-linear-gradient(left, #2735b6, #2735b6);
            background: -moz-linear-gradient(left, #2735b6, #2735b6);
            background: linear-gradient(left, #2735b6, #2735b6);
            padding: 15px;
		}
	</style>
</head>
<body>
	<h1>Congratulations! Your account is now unblocked!</h1>
	<!-- Goes back to account_login page if 'here' is clicked -->
	<em>You may be able to login again to our website by clicking <a href="<?php echo base_url('Account_login'); ?>">here</a></em>
</body>
</html>