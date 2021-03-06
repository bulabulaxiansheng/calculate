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
		$p=($this->bian1+$this->bian2+$this->bian3)/2;
		return sqrt($p*($p-$this->bian1)*($p-$this->bian2)*($p-$this->bian3));
	}

	function zhou(){
		return $this->bian1+$this->bian2+$this->bian3;
	}

	function view(){
		$form='<form action="index.php?action=triangle" method="post">';
		$form.=$this->name.'的边1:<input type="text" name="bian1" value="'.@$_POST['bian1'].'"/><br>';
		$form.=$this->name.'的边2:<input type="text" name="bian2" value="'.@$_POST['bian2'].'"/><br>';
		$form.=$this->name.'的边3:<input type="text" name="bian3" value="'.@$_POST['bian3'].'"/><br>';
		$form.='<input type="submit" name="dosubmit" value="计算"/><br>';
		$form.='<form>';
		echo $form;
	}

	function check($arr){
		$bg=true;
		if($arr['bian1']<0){
			echo "第一个边不能小于0!<br>";
			$bg=false;
		}
		if($arr['bian2']<0){
			echo "第一个边不能小于0!<br>";
			$bg=false;
		}
		if($arr['bian3']<0){
			echo "第一个边不能小于0!<br>";
			$bg=false;
		}
		if(($arr['bian1']+$arr['bian2']<=$arr['bian3'])||($arr['bian1']+$arr['bian3']<=$arr['bian2'])||($arr['bian2']+$arr['bian3']<=$arr['bian1'])){
			echo "两边之和要大于第三边";
			$bg=false;
		}
		return $bg;
	}
}
?>