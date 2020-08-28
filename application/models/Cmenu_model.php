<?php
require_once 'Base_model.php';

class Cmenu_model extends Base_model {

	public $table='menu';
	public $id;
    public $name;
    public $url;
    public $is_del;
    public $order;
     public function __construct()
    {
        parent::__construct();
        $this->load->database();
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

        $this->db->where('menu.is_del', "0");//0没有删除

        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }

        $this->db->order_by('menu.id desc');//0没有删除


        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );
        return $query->result_array();

    }

    public function add_menu()
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
        $count_cmenu = count($data['m_id']);
        //此处是否需要强制类型转换以达到 [{"id":2,"role":0111},{"id":3,"role":1101}] 存入类型？？？
        for ($i = 0;$i<$count_cmenu;$i++){
            $cmenu[$i] = array(
                "id" => $data['m_id'][$i],
                "role" => $m_menu_arr[$i]
            );
        }
        $data_cmenu['name'] = $data['name'];
        $data_cmenu['menu'] = json_encode($role);
        $data_cmenu['addtime'] = time();

        $this->db->replace($this->table, $data_menu);
        // echo $this->db->last_query();


        return $this->db->affected_rows();

    }
    public function get_user()
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
        // $this->db->select('menu.*,dept.name as deptname');

        
        $this->db->where('menu.is_del', "0");//0没有删除
        if(!empty($this->datascope)){
            $this->db->where_in('menu.id', $this->datascope);//数据范围
        }
		// $this->db->join('dept', 'manager.deptid = dept.id','left');
        $this->db->order_by('menu.id desc');//0没有删除


        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );
        return $query->result_array();
        
    }

    public function get_alluser()
    {
        

        $this->db->select('menu.*,dept.name as deptname');

        
        $this->db->where('menu.is_del', "0");//0没有删除
        if(!empty($this->datascope)){
            $this->db->where_in('menu.id', $this->datascope);//数据范围
        }
		$this->db->join('dept', 'menu.deptid = dept.id','left');

        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );


        return $query->result_array();
        
    }


    public function add_user()
    {
        if($this->has_exist('name',$this->input->post_get('name', TRUE),$this->table)>0){
            return -1;
        }
        if($this->has_exist('url',$this->input->post_get('url', TRUE),$this->table)>0){
            return -2;
        }
        $data = array(
            'name' =>  $this->input->post_get('username', TRUE),
            'url' =>  $this->input->post_get('nickname', TRUE),
            // 'deptid' => $this->input->post_get('deptid', TRUE),
            'is_del' => $this->input->post_get('is_del', TRUE),
            'password' => md5($this->input->post_get('pass', TRUE)),
            'invitecode' => $this->generate_invite_code()
        );

        $this->db->replace($this->table, $data);
       
        return $this->db->affected_rows();;
        
    }

    protected function generate_invite_code(){
        // 生成字母和数字组成的6位字符串
        $str = range('A', 'Z');
        // 去除大写的O，以防止与0混淆 
        unset($str[array_search('O', $str)]);
        $arr = array_merge(range(0, 9), $str);
            shuffle($arr);
        $invitecode = '';
        $arr_len = count($arr);
        for ($i = 0; $i < 4; $i++) {
            $rand = mt_rand(0, $arr_len - 1);
            $invitecode .= $arr[$rand];
        }
        $this->db->where('invitecode',$invitecode);
        $count = $this->db->count_all_results($this->table);
        if($count>0){
            $invitecode = $this->generate_invite_code();
        }
        return $invitecode;

    }
   

    public function del_user()
    {
        $delllist=$this->input->post_get('dellist', TRUE);
       
        $this->db->set('is_del', '1');
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
        $this->db->where_in('id', $delllist);
        $this->db->update($this->table);
        
        return $this->db->affected_rows();;
        
    }
    public function set_use()
    {
        $id=$this->input->post_get('id', TRUE);


		$sql='UPDATE `'.$this->table.'` SET `is_use` = ABS(`is_use`-1) where id='.$id;
//
        return $this->db->query($sql);;
        
    }
    public function update()
    {   
        $id=$this->input->post_get('id', TRUE);
        if($this->has_exist_except('url',$id,$this->input->post_get('url', TRUE),$this->table)>0){
            return -2;
        }
        $data = array(
            'url' =>  $this->input->post_get('url', TRUE),
            // 'deptid' =>  $this->input->post_get('deptid', TRUE),
            'is_del' =>  $this->input->post_get('is_del', TRUE)
            // 'phone' => $this->input->post_get('phone', TRUE)
            
        );
        // var_dump($data);exit;
          
        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
        $this->db->update($this->table,$data);
        
        return $this->db->affected_rows();;
        
    }
    public function uppass()
    {

        if($this->input->post_get('pass', TRUE)==null||$this->input->post_get('pass', TRUE)==""){
            return ;
        }
        if($this->checkUserPass($this->input->post_get('id', TRUE),$this->input->post_get('oldpass', TRUE))<1){
            return -1;
        }
        
        // $data = array(
        //     'password' => md5($this->input->post_get('pass', TRUE))
            
        // );
        
        $id=$this->input->post_get('id', TRUE);
        
        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
        $this->db->update($this->table,$data);
        
        return $this->db->affected_rows();
        
    }
    protected function checkUserPass($id,$pass){
        $this->db->where('id',$id);
        // $this->db->where('password',md5($pass));
        return $this->db->count_all_results($this->table);

    }


	public function getinfo()
	{
		$this->id  = $this->input->post_get('id', TRUE);// please read the below note
        $this->db->where('id', $this->id);
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
		$query = $this->db->get($this->table);

		return $query->row();

	}
    
    
    public function get_userinfo()
    {
    	$this->username  = $this->input->post_get('name', TRUE);// please read the below note
        // $this->password  = md5($this->input->post_get('password', TRUE));
       
        $this->db->where('name', $this->name);
        // $this->db->where('password', $this->password);
        $this->db->where('is_del', 0);
        $this->db->where('is_use', 1);
        $query = $this->db->get($this->table);
        
        Dlog_model::save( $this->db->last_query() );

        return $query->row();
        
    }

    public function get_user_by_invitecode($invitecode){
        $this->db->where('invitecode', $invitecode);
        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );

        return $query->row_array();
    }

    public function get_empty_invitecode_list(){
        $this->db->where('is_del', "0");//0没有删除
        $this->db->where('invitecode', "0");//0没有删除
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    public function addinvitecode($id){
        
        $data['invitecode'] = $this->generate_invite_code();
        $this->db->where('id', $id);//0没有删除
        $this->db->update($this->table,$data);
        Dlog_model::save( $this->db->last_query() );

        return $this->db->affected_rows();
    }

    public function get_slash_name_list(){
        $this->db->where('name like', '%-%');
        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );

        return $query->result_array();
    }

    public function updatenickname($id,$name,$url){
        $data['name'] = $name;
        $data['url'] = $url;
        $this->db->where('id', $id);//0没有删除
        $this->db->update($this->table,$data);
        Dlog_model::save( $this->db->last_query() );

        return $this->db->affected_rows();
    }

}


?>
