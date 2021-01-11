<?php
	use \Core\Route;
	
	return [
		new Route('/product/all/', 'product', 'all'),
		new Route('/product/:id/', 'product', 'show'),
	];
	
