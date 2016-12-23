<?php
namespace BAAWebLab;

use \BAAWebLab\BAACore as BAACore;
class Controller {
    /**
     * Core instance
     * @var Core 
     */
    protected $app;
    
    /**
     * Init $app property
     * @param Core $core
     */
    public function init(BAACore $BAACore ){
         $this->app = $BAACore;
    }
    
}

