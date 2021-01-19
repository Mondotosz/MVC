<?php
$_SERVER["DOCUMENT_ROOT"] = preg_replace("/\\\\public$/","",$_SERVER["DOCUMENT_ROOT"]);
require ($_SERVER["DOCUMENT_ROOT"]."\\router.php");