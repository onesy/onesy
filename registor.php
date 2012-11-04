<?php
class registor{
	/**
	 * globle variable storage unit
	 */
	private static $GLOBALVAR  = array();
	/**
	 * PHP file storage unit
	 */
	private static $GLOGBALFILE = array();

	public function __construct(){
		#registor::GLOBALVAR = new array();
	}
	public static function AddFileAndAlias($path,& $FileHandler){
		
	}
	public static function regist($filenames){

		if(!($filenames instanceof string))
			return null;
		//如果参数的末尾是个*，那么就需要分割并且识别出路径
		if($filenames){
			$filenames = trim($filenames);
			2012/11/4
		}
		if(is_array($filename)){
			
		} else {
			require_once($filename);
		}
	}
	public static function GetGLOBALVAR($attributeName){
		return registor::$GLOBALVAR[$attributeName];
	}
	public static function SetGLOBALVAR($keyPush,$valuePush){
		registor::$GLOBALVAR[$keyPush] = $valuePush;
	}
	public static function SetLocalVar(){

	}
	public static function GetLocalVar($varname,$varvalue,$invokerPt){
		//根据$this指针提供的信息，对varname进行判断
	}
}
$pushkey = "okme";
$pushvalue = "nook";
registor::SetGLOBALVAR($pushkey,$pushvalue);
echo registor::GetGLOBALVAR($pushkey);
?>
