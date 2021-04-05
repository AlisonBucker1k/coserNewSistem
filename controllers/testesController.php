<?php 
class testesController extends Controller{
    public function index(){
        $this->loadView('teste', array(), 'secretaria');
    }
}