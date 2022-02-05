<?php
preg_match('/(.*)\.example\.com/', $_SERVER['HTTP_HOST'], $matches, PREG_OFFSET_CAPTURE);
$subdomain = $matches[1][0] ?? null;

http_response_code(301);
header("Location: http://www.chethan.com/?name=$subdomain");