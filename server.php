<?php
$functionUri = $_ENV['FUNCTION_URI'];
include_once $functionUri;

// hack/convention : square function must be defined in /functions/square.php
$function = str_replace(array("/functions/", ".php"), "", $functionUri);
$args = explode('&', file_get_contents('php://input'));
echo call_user_func_array($function, $args);
?>