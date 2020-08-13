<?
//权限判断辅助方法
//调用方法
//$this->load->helper('role');
//然后可以直接使用当中的函数
/*
$rilenum 权限数字如：1001，字符串类型，四个位置对应增删改查
$position 指定数字的位置，下标0开始,
*/
function get_role($rilenum,$position){
    $role=substr($rilenum,$position,1);
    return $role;

}