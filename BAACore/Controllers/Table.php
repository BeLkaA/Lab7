<?php
namespace BAAWebLab\Controllers;

class Table extends \BAAWebLab\Controller {
	
	 public function doIndex(){
		 echo "<i>Наша таблица</i><br/>";
        echo "<br/><b>".$this->app->getTable()."</b><br/>";
        echo "Автор ".$this->app->getSiteAuthor()."<br/>";
      
    } 
	public function doTable(){
		echo "<i>Наша таблица</i><br/>";
        echo "<br/><b>".$this->app->getTable()."</b><br/>";
	}
	
	public function doAdmin(){
		echo "Futer";
	}
}