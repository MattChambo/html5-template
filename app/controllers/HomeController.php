<?php

class HomeController extends PageController {

	// Properties
	private $latestProducts;

	// Constructor
	public function __construct() {

		// Prepare the title
		$this->title = 'Home page';

		// Prepare the meta description
		$this->metaDesc = 'See our wonderful toys and gifts';

		// Get latest products

		// Process forms
	}

	public function buildHTML() {
		
		include 'app/templates/header.php';

		include 'app/templates/home/home.php';

		include 'app/templates/footer.php';

	}

}