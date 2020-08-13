<?php
require_once 'Base_model.php';

class Manager_model extends Base_model {

	public $table='manager';
	public $username;
    public $password;
     public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
        return $this->db->count_all_results($this->table);
        
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
        $this->db->select('manager.*,dept.name as deptname');

        
        $this->db->where('manager.is_del', "0");//0没有删除
        if(!empty($this->datascope)){
            $this->db->where_in('manager.id', $this->datascope);//数据范围
        }
		$this->db->join('dept', 'manager.deptid = dept.id','left');

        $query = $this->db->get($this->table);
        Dlog_model::save( $this->db->last_query() );


        return $query->result_array();
        
    }
    public function add_user()
    {
        if($this->has_username($this->input->post_get('username', TRUE))>0){
            return -1;
        }
        $data = array(
            'username' =>  $this->input->post_get('username', TRUE),
            'deptid' => $this->input->post_get('deptid', TRUE),
            'is_manager' => $this->input->post_get('is_manager', TRUE),
            'password' => md5($this->input->post_get('pass', TRUE))
        );

        $this->db->replace($this->table, $data);
       
        return $this->db->affected_rows();;
        
    }
    protected function has_username($username){
        $this->db->where('is_del', "0");//0没有删除
        $this->db->where('username',$username);
        return $this->db->count_all_results($this->table);

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
        $data = array(
            'deptid' =>  $this->input->post_get('deptid', TRUE),
            'is_manager' =>  $this->input->post_get('is_manager', TRUE)
            // 'phone' => $this->input->post_get('phone', TRUE)
            
        );
        // var_dump($data);exit;
        
        $id=$this->input->post_get('id', TRUE);
        
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
        
        $data = array(
            'password' => md5($this->input->post_get('pass', TRUE))
            
        );
        
        $id=$this->input->post_get('id', TRUE);
        
        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('id', $this->datascope);//数据范围
        }
        $this->db->update($this->table,$data);
        
        return $this->db->affected_rows();;
        
    }
    protected function checkUserPass($id,$pass){
        $this->db->where('id',$id);
        $this->db->where('password',md5($pass));
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
    	$this->username  = $this->input->post_get('username', TRUE);// please read the below note
        $this->password  = md5($this->input->post_get('password', TRUE));
       
        $this->db->where('username', $this->username);
        $this->db->where('password', $this->password);
        
        $query = $this->db->get($this->table);
        
        Dlog_model::save( $this->db->last_query() );

        return $query->row();
        
    }

}


?>
