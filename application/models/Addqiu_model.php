<?php

class Addqiu_model extends CI_Model
{
    public $table = 'addqiu';
    public $id;
    public $uid;
    public $name;

    public $price;
    public $volume;
//	public $year;
//    public $hot;
//    public $type;
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



        $this->db->select('addqiu.id as id,addqiu.name as name,addqiu.price as price,addqiu.uid as uid,
                            addqiu.addtime as addtime,addqiu.volume as volume,addqiu.area as area,wxuser.is_use as is_use,
                            wxuser.nickName as username');

        $this->db->where('addqiu.is_del', "0");//0没有删除
		$this->db->order_by('addqiu.addtime','desc');
		$this->db->from($this->table);
		$this->db->join('wxuser', 'addqiu.uid = wxuser.id');
        $query = $this->db->get();
        return $query->result_array();

    }

    public function add()
    {

        $data = array(
			'name' => $this->input->post_get('name', true),

			'price' => $this->input->post_get('price', true),
			'volume' => $this->input->post_get('volume', true),
			//'year' => $this->input->post_get('year', true),
			//'hot' => $this->input->post_get('hot', true),
			//'type' => $this->input->post_get('type', true)
        );

        $this->db->replace($this->table, $data);

        return $this->db->affected_rows();;

    }


	public function ApiAdd($data)
	{


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
			'name' => $this->input->post_get('name', true),
			'volume' => $this->input->post_get('volume', true),
			'price' => $this->input->post_get('price', true),
			'area' => $this->input->post_get('area', true),
			//'hot' => $this->input->post_get('hot', true),
			//'type' => $this->input->post_get('type', true)

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


    public function info()
    {
		$this->uid = $this->input->post_get('uid', true);
		$this->name = $this->input->post_get('name', true);// please read the below note
		$this->price = $this->input->post_get('price', true);
		$this->volume = $this->input->post_get('volume', true);
//		$this->year = $this->input->post_get('year', true);
//        $this->hot = $this->input->post_get('hot', true);
//        $this->type  = $this->input->post_get('type', true);

		$this->db->where('uid', $this->price);
		$this->db->where('name', $this->name);


		$this->db->where('price', $this->price);
		$this->db->where('volume', $this->name);
//		$this->db->where('year', $this->name);
//        $this->db->where('hot', $this->price);
//        $this->db->where('type', $this->name);


		$query = $this->db->get($this->table);

        return $query->row();

    }

}


