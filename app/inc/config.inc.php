<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

/*
 * Checks that the constant is defined this include
 * will only run if it recieves the defined constent
 */
defined('MY_INC_CODE') or die('Access to this file is restricted');

/* ****************************************
 *	CONFIGURATION
 *
 * **************************************** */

/*
 * Database specific variables
 */
define("DB_HOST", "localhost");
define("DB_USER", "");
define("DB_PASSWORD", "");
define("DB_DATABASE", "");

/*
 * Application specific variables
 * Note: in pathnames forward slashes e.g. / , should be used
 */

define("VERSION_NUMBER", "1.0");
define("COMPANY_NAME", "ORCS");
define("APPLICATION_NAME", "PROTON WEBAPI EXAMPLES");
define("UPLOAD_PATH",  realpath(dirname(__FILE__)) . "/uploads/");