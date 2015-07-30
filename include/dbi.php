<?
    /******************************************************************************
     *
     * dbi.php
     *
     * Configuration file
     *
     * Created : 2014
     *
     ******************************************************************************/
	//$my_db = new mysqli("10.3.0.31", "root", "m!nv#Rtisin9", "babience_relay");
	$my_db = new mysql("localhost", "root", "6alslqjxkdlwld@%*)", "vonin_aio");
	if (mysql_connect_error()) {
		exit('Connect Error (' . mysql_connect_errno() . ') '. mysql_connect_error());
	}
?>
