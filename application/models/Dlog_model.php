<?php
/*
记录sql日志的方法
使用方法直接在对应的sql下加入： Dlog_model::save( $this->db->last_query() );
*/
class Dlog_model{
	#CI 对象
	static $CI;
	static $sidebarPath = '';
	
	/**
	 * 构造函数
	 */
	public function __construct()
	{
		$cachePath = APPPATH . 'logs/';
		self::$sidebarPath  = $sidebarPath = $cachePath ;
		if( !file_exists($sidebarPath) ){
			mkdir($sidebarPath);
		}
		
	}
	/**
     * 写入SQL日志 : 
     */
    public static function save( $sql )
    {
		$sql = $sql.';';
		$filename = self::$sidebarPath.date("Y_m_d").".sql";
		$fh = fopen( $filename,"a+");
		fwrite($fh, $sql."\r\n"."\r\n"."\r\n" );
	}
}
?>