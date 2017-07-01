<?php

namespace Klisl\Widgets;

use Klisl\Widgets\Contract\ContractWidget;

class TestWidget implements ContractWidget{
	
	public function execute(){
				
		return view('Widgets::test');
		
	}	
}

