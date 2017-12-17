<?php
	// setcookie( "user", "ghost" );
	setcookie( "user", "ghost", time() + 5 );
	if ( isset( $_REQUEST['act'] ) && $_REQUEST['act'] == 'clear'  ) {
		setcookie( "user", "", time() - 1 );
	}
?>
<a href="?act=clear">Clear Cookie</a>