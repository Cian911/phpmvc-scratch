<?php

class View{

	public function render($name){
		require BASE_PATH . '/views/header.php';
		require BASE_PATH . '/views/' . $name .'.php';
		require BASE_PATH . '/views/footer.php';
	}
}

?>