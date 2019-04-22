<?php

class HelloWorld{
	function sayHello($language = 'English'){
		echo"<p>";
		switch($language){
			case 'Dutch':
				echo "Hello";
				break;

			case "Bangla":
				echo "Bansgla";
				break;
			case "English":
				echo"hello world";
				break;
		}
		echo"</p>";
	}
}

$greating = new HelloWorld;
$greating->sayHello('Bangla');