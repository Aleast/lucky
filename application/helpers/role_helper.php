<?
//权限判断辅助方法
//调用方法
//$this->load->helper('role');
/*
$rilenum 权限数字如：1001，字符串类型
$position 指定数字的位置，下标0开始,
*/
function get_role($rilenum,$position){
    $role=substr($rilenum,$position,1);
    return $role;

}