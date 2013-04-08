<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

define("MY_INC_CODE", 1);

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

include (APPLICATION_PATH . "/inc/config.inc.php");
//include (APPLICATION_PATH . "/inc/db.inc.php");
//include (APPLICATION_PATH . "/inc/functions.inc.php");

include (TEMPLATE_PATH . "/private/header.php");

?>

<!-- main page content ................................. -->

<div class="wrapper">
<!-- main page content -->

<div class="container">

	<div class="page-header">  
	    <h1>PRIVATE LOGIN TESTCARD</h1>
	    <p>at this page if login was sucessful</p>  
	</div> 

	<div class="row">
		<div class="span12">
		<p>Private Stuff ...</p>
		</div>
	</div>
 
</div>

<!-- keep this at the bottom to push down the footer-->
<div class="push"><!--//--></div>
</div><!-- .wrapper -->

<!-- main page  end .................................... -->

<?php include (TEMPLATE_PATH . "/private/footer.html"); ?>