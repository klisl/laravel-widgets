<?php

namespace Klisl\Widgets\Contract;

interface ContractWidget {
	
	/**
     * Основной метод любого виджета, который должен возвращать вывод шаблона:		
	 *  return view('Widgets::NameWidget', [
	 *		'data' => $data
	 *	]);
	 */
	public function execute();
	
}