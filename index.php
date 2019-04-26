<?php 

class check{
 private $totalBalance;
 private $accountNumber;

 public function __construct($totalBalance,$accountNumber){
    $this->$accountNumber=$accountNumber;
    $this->$totalBalance=$totalBalance;
 }

 public static function factory(){

 	print_r("static function");

 }

 public	function section($filename,$variable=array()){

		if(!$filename){
			throw new Exception("Section not declared");
			return;
		}

		if(!file_exists($filename.'.php')){
			throw new Exception("Section not found");
			return;
		}
	
		ob_start();

		if(!empty($variable)){

			extract($variable);
			
		}
		
		include $filename.'.php';

		$output = ob_get_clean();

		print $output;

}
	public function f1($x){
		return $this->totalBalance=$x;
	}
}
?>