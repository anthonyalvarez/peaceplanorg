<?php
/*
 * ipn.php
 *
 * PHP Toolkit for PayPal v0.50
 * http://www.paypal.com/pdn
 *
 * Copyright (c) 2004 PayPal Inc
 *
 * Released under Common Public License 1.0
 * http://opensource.org/licenses/cpl.php
 *
*/

//get global configuration information
include_once('../includes/global_config.inc.php'); 

//get pay pal configuration file
include_once('../includes/config.inc.php'); 

//post using libcurl to verify payment
$result=libCurlPost($paypal[url],$_POST); 

if(eregi("VERIFIED",$result)) { 
	$id = $_REQUEST['invoice'];
	if (preg_match("/app_(\d+)/", $id, $matches)) {
		$id = $matches[1];
	} else {
		$id = 0;
	}
	if ($id > 0) {
		$txn_id = $_REQUEST['txn_id'];
		require_once '../../../php_inc/db.php';
		$dblink = mysql_connect($dbhost, $dbuser, $dbpass);
		mysql_select_db($dbname, $dblink);
		//update application with transaction id
		$sql = sprintf("UPDATE applicant SET " .
			   "cc_trans_id = '%s', " .
			   "fee_paid = 1, " .
			   "cc_charge_date = now() " .
			   "WHERE id = %s", 
			   mysql_real_escape_string($txn_id), $id); 
		mysql_query($sql);
		mysql_close($dblink);	
		mail("all@worldpeacesociety.org", "Payment received for ".$id, 
		 "Paypal transaction id ". $txn_id ."\n");

	}
} else { 
	$id = $_REQUEST['invoice'];
	if (preg_match("/app_(\d+)/", $id, $matches)) {
		$id = $matches[1];
	} 
	mail("all@worldpeacesociety.org", "ER