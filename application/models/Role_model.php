<?php
require_once 'Base_model.php';

class Role_model extends Base_model
{
    public $table = 'role';
    public $id;
    public $name;
    public $menu;
    public $addtime;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

        // $this->load->library('session');
        // $is_manager = isset($_SESSION['is_manager'])?$_SESSION['is_manager']:0;
        // $mid = isset($_SESSION['mid'])?$_SESSION['mid']:0;
        // $deptid = isset($_SESSION['deptid'])?$_SESSION['deptid']:0;

        // if(empty($is_manager)){
        //     $this->datascope[] = $mid;
        //     // var_dump($this->datascope);exit;
        // }elseif(!empty($deptid)){

        // }

    }



    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }


        return $this->db->count_all_results($this->table);

    }
    public function get_list()
    {
        $pages = $this->input->post_get('pages', true);
        $limit = $this->input->post_get('limit', true);

        if(!$pages){
            $pages=1;
        }
        if(!$limit){
            $limit=10;
        }

        if($pages==1){

            $this->db->limit($limit,0);
        }else{
            $this->db->limit($limit,$limit*($pages-1));
        }
//        $this->db->select('role.*,manager.username,manager.nickname,dept.name as deptname,manager.is_del as m_is_del');
        $this->db->where('role.is_del', "0");//0没有删除

        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }

        $this->db->order_by('role.id desc');//0没有删除

//        $this->db->join('manager', 'role.mid = manager.id','left');
//        $this->db->join('dept', 'manager.deptid = dept.id','left');


        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );
        return $query->result_array();

    }
    public function get_all_info()
    {
        $this->db->where('role.is_del', "0");//0没有删除
        $this->db->order_by('role.id desc');//0没有删除
        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );
        return $query->result_array();

    }


    public function add($insertdata)
    {

        // $cid = $this->input->post_get('cid', true);
        // $cphone =$this->input->post_get('cphone', true);
        // $mid=$this->input->post_get('mid', true);
        // $addtime =$this->input->post_get('addtime', true);
        //var_dump($insertdata);


        $addtime=time();
        $data = array(
            'name'=>$insertdata['name'],
            'menu' => "",
            'addtime' => $addtime


        );

        $this->db->replace($this->table, $data);
        // echo $this->db->last_query();


        return $this->db->affected_rows();
    }

    public function add_role()
    {
        $data = array(
            'id' => $this->input->post_get('id', true),
            'name' => $this->input->post_get('name', true),
            'm_id' => $this->input->post_get('M_id', true),
            'm_menu' => $this->input->post_get('M_menu', true)
        );
        //m_menu字段从key判断0-3，key下值为空的赋值0，key不为空的赋值1
        $count = count($data['m_id'])*4;

        for($i = 0;$i<$count;$i++){
            if(isset($data['m_menu'][$i])){
                $data['m_menu'][$i] = "1";
            }else{
                $data['m_menu'][$i] = "0";
            }
        }
        ksort($data['m_menu']);
        $m_menu = implode($data['m_menu']);
        $m_menu = $this->splitStrWithComma($m_menu);
        $m_menu_arr = explode(",",$m_menu);
        $count_role = count($data['m_id']);
        //此处是否需要强制类型转换以达到 [{"id":2,"role":0111},{"id":3,"role":1101}] 存入类型？？？
        for ($i = 0;$i<$count_role;$i++){
            $role[$i] = array(
                "id" => $data['m_id'][$i],
                "role" => $m_menu_arr[$i]
            );
        }
        $data_role['name'] = $data['name'];
        $data_role['menu'] = json_encode($role);
        $data_role['addtime'] = time();
//        var_dump($data_role);die();
        $this->db->replace($this->table, $data_role);
        // echo $this->db->last_query();


        return $this->db->affected_rows();

    }

    public function del()
    {
        $delllist = $this->input->post_get('dellist', true);
        $this->db->set('is_del', '1');
        $this->db->where_in('id', $delllist);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }

    public function update_role()
    {
        $data = array(
            'id' => $this->input->post_get('id', true),
            'name' => $this->input->post_get('name', true),
            'm_id' => $this->input->post_get('M_id', true),
            'm_menu' => $this->input->post_get('M_menu', true)
        );
        //m_menu字段从key判断0-3，key下值为空的赋值0，key不为空的赋值1
        $count = count($data['m_id'])*4;

        for($i = 0;$i<$count;$i++){
            if(isset($data['m_menu'][$i])){
                $data['m_menu'][$i] = "1";
            }else{
                $data['m_menu'][$i] = "0";
            }
        }
        ksort($data['m_menu']);
        $m_menu = implode($data['m_menu']);
        $m_menu = $this->splitStrWithComma($m_menu);
        $m_menu_arr = explode(",",$m_menu);
        $count_role = count($data['m_id']);
        //此处是否需要强制类型转换以达到 [{"id":2,"role":0111},{"id":3,"role":1101}] 存入类型？？？
        for ($i = 0;$i<$count_role;$i++){
            $role[$i] = array(
                "id" => $data['m_id'][$i],
                "role" => $m_menu_arr[$i]
            );
        }
        $data_role['name'] = $data['name'];
        $data_role['menu'] = json_encode($role);
        $data_role['addtime'] = time();
//        var_dump($data_role);die();
        $this->db->where('id', $data['id']);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $this->db->update($this->table, $data_role);

        return $this->db->affected_rows();

    }


    public function getinfo()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);

        return $query->row();

    }


    public function getRlInfo($id)
    {

        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);
        return $query->row();

    }



    public function info()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);
        return $query->row();

    }

    public function get_info($cphone)
    {

        $this->db->where('cphone', $cphone);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $query = $this->db->get($this->table);
        return $query->row();

    }

    public function getExportData(){
        $ids = $this->input->post_get('ids', true);

        if(empty($ids)){
            $this->db->select('role.*,manager.username,manager.nickname,dept.name as deptname,manager.is_del as m_is_del');
            $this->db->where('role.is_del', "0");//0没有删除

            if(!empty($this->datascope)){
                $this->db->where_in('mid', $this->datascope);//数据范围
            }

            $this->db->order_by('role.id desc');//0没有删除

            $this->db->join('manager', 'role.mid = manager.id','left');
            $this->db->join('dept', 'manager.deptid = dept.id','left');


            $query = $this->db->get($this->table);
            Dlog_model::save( $this->db->last_query() );
            return $query->result_array();

        }else{

        }


    }
    function object_to_array($obj) {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)object_to_array($v);
            }
        }

        return $obj;
    }
    function simple_json_parser($json) {
        $count = substr_count($json,"id");
        $json = ltrim(rtrim($json,"}]"),"[{");
        $json = str_replace('"',"", $json);
        $jsonValue = explode("},{", $json);
//        var_dump($jsonValue); die();

        $arr = array();
        for ($i=0;$i<$count;$i++){
            foreach($jsonValue as $key=>$v){
                $jValue = explode(",", $v);
                foreach ($jValue as $value){
                    $iValue = explode(":", $value);
                    $arr[$key][$iValue[0]] = $iValue[1];
                }
            }
        }

        return $arr;
    }
    /**
     * 每隔4个字符，用逗号进行分隔
     * @param string $str
     * @return string
     */
    function splitStrWithComma($str)
    {
        $arr = array();
        $len = strlen($str);
        for ($i = $len - 1; $i >= 0;) {
            $new_str = "";
            for ($j = $i; $j > $i - 4 && $j >= 0; $j --) {
                $new_str .= $str[$j];
            }
            $arr[] = $new_str;
            $i = $j;
        }
        $string = implode(',', $arr);
        // 翻转字符串自己实现
        // $string = strrev($string);
        for ($i = 0, $j = strlen($string) - 1; $i <= $j; $i ++, $j --) {
            $tmp = $string[$i];
            $string[$i] = $string[$j];
            $string[$j] = $tmp;
        }
        return $string;
    }
}


