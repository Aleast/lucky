<?php
class User_model extends CI_Model {

	public $table = 'wxuser';
	public $id;
	public $nickName;
	public $avatarUrl;
	public $gender;//性别
	public $province;
	public $city;
	public $country;
	public $openid;

     public function __construct()
    {
        $this->load->database();
    }

	public function set_use()
	{
		$id=$this->input->post_get('id', TRUE);


		$sql='UPDATE `'.$this->table.'` SET `is_use` = ABS(`is_use`-1) where id='.$id;
//
		return $this->db->query($sql);;

	}
    
    public function get_count()
    {
		$this->db->where('is_del', "0");//0没有删除
        
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
		$this->db->select('wxuser.*,rl.cid,rl.mid,user.username');
		$this->db->where('wxuser.is_del', "0");//0没有删除
		$this->db->order_by('wxuser.id desc');//0没有删除
		$this->db->join('rl', 'phone = rl.cphone','left');
		$this->db->join('user', 'rl.mid = user.id','left');


		$query = $this->db->get($this->table);
		return $query->result_array();

    }



	public function add()
	{

		$data = array(
			// 'nickName' => $this->input->post_get('nickName', true),
			// 'avatarUrl' => $this->input->post_get('avatarUrl', true),
			// 'gender' => $this->input->post_get('gender', true),
			// 'province' => $this->input->post_get('province', true),
			// 'city' => $this->input->post_get('city', true),
			// 'country' => $this->input->post_get('country', true),
			// 'openid' => $this->input->post_get('openid', true),
			'phone' => $this->input->post_get('phone', true),

		);

		$this->db->replace($this->table, $data);

		return $this->db->affected_rows();;

	}




	public function del()
	{
		$delllist = $this->input->post_get('dellist', true);

		$this->db->set('is_del', '1');
		$this->db->where_in('id', $delllist);
		$this->db->update($this->table);

		return $this->db->affected_rows();;

	}

	public function update()
	{
		$data = array(
			'interval' => $this->input->post_get('interval', true)
		);

		$id = $this->input->post_get('id', true);

		$this->db->where('id', $id);
		$this->db->update($this->table, $data);

		return $this->db->affected_rows();

	}


	public function getinfo()
	{
		$this->id = $this->input->post_get('id', true);// please read the below note
		$this->db->where('id', $this->id);
		$query = $this->db->get($this->table);
		return $query->row();

	}


	public function ApiAdd($data)
	{


		$this->db->insert($this->table, $data);

		return $this->db->insert_id();

	}

	public function ApiGetInfo($openid)
	{
		$this->db->where('is_del', 0);
		$this->db->where('openid', $openid);

		$query = $this->db->get($this->table);
		return $query->row();

	}



}


?>
