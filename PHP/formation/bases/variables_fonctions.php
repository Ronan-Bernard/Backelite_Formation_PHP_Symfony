<?php
	$a = "hello world";

	echo $a . "<br/><br/>";

	function niceHelloWorld($truc) {
		return ucfirst($truc);
	}

	echo niceHelloWorld($a);
