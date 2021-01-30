<?php
class View {

    protected $styles;
    protected $scripts;

    public function __construct(){
        $styles = [$GLOBALS["config"]["bootstrap"]["css"]];
        $scripts = [$GLOBALS["config"]["bootstrap"]["js"]];
    }

    public function show(){
        
    }
}