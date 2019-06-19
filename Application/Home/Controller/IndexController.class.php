<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo date('Y-m-d h:i:s').'</br>';
    	ob_flush();
    	flush();
    	sleep(150);
    	echo date('Y-m-d h:i:s');
    }
}