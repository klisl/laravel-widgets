<?php

namespace Klisl\Widgets;


/**
 * Class Widget
 * @package Klisl\Widgets
 */
class Widget{

    /** @var array массив доступных виджетов config/widgets.php */
	protected $widgets;

    /**
     * Widget constructor.
     */
	public function __construct(){
		$this->widgets = config('widgets');
	}

    /**
     * @param string $obj
     * @param array $data
     * @return \Illuminate\View\View
     */
	public function show($obj, $data =[]){
		
		//Есть ли такой виджет
		if(isset($this->widgets[$obj])){
			
			//создаем его объект передавая параметры в конструктор
			$obj = new $this->widgets[$obj]($data);
			
			//возвращаем результат выполнения
			return $obj->execute();
		}
		
	}

}
