<?php

class Quotes_model extends CI_Model
{
    public $table = 'quotes';
    public $id;
    public $name;
    public $price;

    public function __construct()
    {
        $this->load->database();
    }

    public function get_count()
    {

        $classid = $this->input->post_get('classid', true);
       
        $this->db->where('is_del', "0");//0没有删除
        if($classid){
			$this->db->where('classid', $classid);//0没有删除
        }
        return $this->db->count_all_results($this->table);

    }

    public function get_list()
    {
        $classid = $this->input->post_get('classid', true);
        $pages = $this->input->post_get('pages', true);
        $limit = $this->input->post_get('limit', true);

        

        $this->db->where('is_del', "0");//0没有删除
		if($classid){
			$this->db->where('classid', $classid);//0没有删除

        }
        if(!$pages){
            $pages=1;
        }
        if(!$limit){
            $limit=20;
        }

            if($pages==1){
           
                $this->db->limit($limit,0);
            }else{
                $this->db->limit($limit,$limit*($pages-1));
            }

   
       



		$this->db->order_by('sort', "desc");//没有删除

        $query = $this->db->get($this->table);
        return $query->result_array();

    }

    public function add()
    {


        $data = array(
            'name' => $this->input->post_get('name', true),
            'price' => $this->input->post_get('price', true),
			'year' => $this->input->post_get('year', true),
			'volume' => $this->input->post_get('volume', true),
			'classid' => $this->input->post_get('classid', true),
			'sort' => $this->input->post_get('sort', true),
			'img' => $this->input->post_get('img', true)
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

	public function update_price()
	{
		$id = $this->input->post_get('qid', true);
		$price=$this->input->post_get('price', true);

		$sql='UPDATE quotes set oldprice=price,price='.$price.',updown=price-oldprice,upp=((price-oldprice)/oldprice)*100
		 where id='.$id;



		$this->db->query($sql);

		return $this->db->affected_rows();

	}


    public function update()
    {
        $data = array(
            'name' => $this->input->post_get('name', true),
            'price' => $this->input->post_get('price', true),
			'year' => $this->input->post_get('year', true),
			'volume' => $this->input->post_get('volume', true),
			'sort' => $this->input->post_get('sort', true),
			'classid' => $this->input->post_get('classid', true),
			'img' => $this->input->post_get('img', true)

        );

        $id = $this->input->post_get('id', true);

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();

    }
	public function UpdateView($id)
	{


		$this->db->where('id', $id);
		$this->db->set('snum','snum +1',FALSE);
		$this->db->update($this->table);

		return $this->db->affected_rows();

	}
    public function getinfo()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        $query = $this->db->get($this->table);

        return $query->row();

    }
	public function getApiInfo($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get($this->table);

		return $query->row();

	}



    public function info()
    {
        $this->name = $this->input->post_get('name', true);// please read the below note
        $this->price = $this->input->post_get('price', true);
		$this->year = $this->input->post_get('year', true);


        $this->db->where('name', $this->name);
        $this->db->where('price', $this->price);
		$this->db->where('year', $this->year);
        $query = $this->db->get($this->table);

        return $query->row();

    }

}


