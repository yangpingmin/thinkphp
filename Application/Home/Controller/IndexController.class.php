<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo date('Y-m-d H:i:s');
		echo "<br>";
		sleep(120);
		echo date('Y-m-d H:i:s');
		return true;
    }
}