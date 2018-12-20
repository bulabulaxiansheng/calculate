<?php
class Triangle extends Shape{
	private $bian1;
	private $bian2;
	private $bian3;

	function __construct($arr=array()){
		if(!empty($arr)){
			$this->bian1=$arr['bian1'];
			$this->bian2=$arr['bian2'];
			$this->bian3=$arr['bian3'];
		}
		$this->name="三角形";
	}

	function area(){
		return $this->width*$this->height;
	}

	function zhou(){
		return ;
	}

	function view(){
		$form='<form action="index.php?action=rect" method="post">';
		$form.=$this->name.'的边1:<input type="text" name="bian1" value="'.$_POST[].'"/><br>';
		$form.=$this->name.'的边2:<input type="text" name="bian2" value="'.$_POST[].'"/><br>';
		$form.=$this->name.'的边3:<input type="text" name="bian3" value="'.$_POST[].'"/><br>';
		$form.='<input type="submit" name="dosubmit" value="计算"/><br>';
		$form.='<form>';
		echo $form;
	}

	function check($arr){
		$bg=true;
		if($arr['width']<0){
			echo $this->name."的宽不能小于0!<br>";
			$bg=false;
		}

		if($arr['height']<0){
			echo $this->name."的高不能小于0!<br>";
			$bg=false;
		}
		return $bg;
	}
}
?>