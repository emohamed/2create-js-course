<?php
$all_results = array(
	'Lorem',
	'ipsum',
	'dolor',
	'sit',
	'amet,',
	'consectetur',
	'adipisicing',
	'elit.',
	'Debitis,',
	'facere,',
	'blanditiis,',
	'iusto',
	'repudiandae',
	'voluptate',
	'ipsam',
	'nisi',
	'ducimus',
	'enim',
	'nemo',
	'porro',
	'laboriosam',
	'minus',
	'ipsum',
	'perspiciatis',
	'perferendis',
	'quod',
	'quam',
	'a',
	'veritatis',
	'autem.',
);

$matching_results = array();
foreach ($all_results as $result) {
	if ($_GET['query'] == '' || strstr($result, $_GET['query']) !== false) {
		$matching_results[] = $result;
	}
}
echo json_encode($matching_results);