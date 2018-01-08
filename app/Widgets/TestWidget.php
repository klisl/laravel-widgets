<?php

namespace App\Widgets;

use Klisl\Widgets\Contract\ContractWidget;

/**
 * Class TestWidget
 * Класс для демонстрации работы расширения
 * @package App\Widgets
 */
class TestWidget implements ContractWidget{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function execute(){
				
		return view('Widgets::test');
		
	}	
}
