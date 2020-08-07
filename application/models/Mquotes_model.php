<?php

class Mquotes_model extends CI_Model
{
    public $table = 'mquotes';
    public $id;
    public $price;

    public function __construct()
    {
        $this->load->database();
    }

    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        return $this->db->count_all_results($this->table);

    }

    public function get_list($order='ASC',$start='',$end='')
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


        $this->db->where('is_del', "0");//0没有删除
        if($start!=''&&$end!=''){
          $end = $end.' 23:59:59';
          $this->db->where('addtime between "'.$start.'" and "'.$end.'"');
        }
		    $this->db->order_by('addtime '.$order);
        $query = $this->db->get($this->table);
        return $query->result_array();

    }
	public function get_top_two_list()
	{
		$this->db->where('is_del', "0");//0没有删除
		$this->db->order_by('id DESC');
		$this->db->limit(2);

		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_m_list($t)
	{
		$this->db->where('is_del', "0");//0没有删除

		if($t==='day'){
			$where = "TO_DAYS( NOW( )) - TO_DAYS( addtime) > 0";

		}else if($t==='week'){
			$where = "YEARWEEK(date_format(addtime,'%Y-%m-%d'),1)+1 = YEARWEEK(now())+1";

		}else if($t==='month'){
			$where = "PERIOD_DIFF(date_format(now(),'%Y%m'),date_format(addtime,'%Y%m'))=1";

		}
        $this->db->where($where);
        $this->db->order_by('addtime desc');
        
		$this->db->limit(1);
		$query = $this->db->get($this->table);

		//echo $this->db->last_query();

		return $query->result_array();

	}



    public function add()
    {
    $addtime=$this->input->post_get('addtime', true);
		$res=$this->getlimit($addtime);
		$price=$this->input->post_get('price', true);


        // if(!empty($res)&&(date("Y-m-d",strtotime($res->addtime))==date("Y-m-d",strtotime($addtime)))){
        //     //今天有数据就直接退出添加过程
        //     return 0;
        // }else{

            $res2=$this->getlimitbytime(date("Y-m-d",strtotime($addtime)));

            if($res2>0){
                return 0;
            }else{
              if(empty($res)){
                $data = array(
                    'price' => $price,
                    'addtime' => $addtime,
                    'oldprice'=>0,
                    'updown'=>0,
                    'upp'=>0
                );
                // print_r($data);
                // exit;
              }else{
                $data = array(
                    'price' => $price,
                    'addtime' => $addtime,
                    'oldprice'=>$res->price,
                    'updown'=>$price-$res->price,
                    'upp'=>(($price-$res->price)/$res->price)*100
                );
              }

                $this->db->insert($this->table, $data);

                return $this->db->affected_rows();
            }

        // }
    }
	public function  getlimit($addtime=''){
		$this->db->limit(1);
		$this->db->order_by('addtime','desc');
    $this->db->where('is_del', "0");
    if($addtime){
      $this->db->where('addtime <',$addtime);
    }
		$query = $this->db->get($this->table);
		return $query->row();
    }

    public function  getlimitbytime($addtime){
        $this->db->where('is_del', "0");//0没有删除
		    $this->db->where('date(addtime)',$addtime);
        return $this->db->count_all_results($this->table);
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
        $addtime = $this->input->post_get('addtime', true);
        $res=$this->getlimit($addtime);
        $price = $this->input->post_get('price', true);

        if(empty($res)){
          $data = array(
              'price' => $price,
              'oldprice'=>0,
              'updown'=>0,
              'upp'=>0
          );
          // print_r($data);
          // exit;
        }else{
          $data = array(
              'price' => $price,
              'oldprice'=>$res->price,
              'updown'=>$price-$res->price,
              'upp'=>(($price-$res->price)/$res->price)*100
          );
        }

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
        $this->price = $this->input->post_get('price', true);
        $this->db->where('price', $this->price);
        $query = $this->db->get($this->table);

        return $query->row();

    }

}
