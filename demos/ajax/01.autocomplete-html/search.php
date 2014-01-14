<?php
$results = array(
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

foreach ($results as $result) {
	if ($_GET['query'] == '' || strstr($result, $_GET['query']) !== false) {
		echo "<li>$result</li>";
	}
}