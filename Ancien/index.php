<?php

if (empty($_GET['page'])) {
	include('pages/home.php');
} else {
	http_response_code(404);
	die();
}

include 'modules/footer.php';
