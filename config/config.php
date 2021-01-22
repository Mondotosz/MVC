<?php
$config = file_get_contents($_SERVER["DOCUMENT_ROOT"]."\\config\\config.json");
$config = json_decode($config,true);