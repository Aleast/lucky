<?php

class Quotesline_model extends CI_Model
{
    public $table = 'quotesline';
    public $id;
    public $name;
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

    public function get_list($pid)
    {
        $this->db->where('is_del', "0");//0没有删除
		$this->db->where('qid', $pid);//0没有删除
		$this->db->order_by('addtime', 'asc');//0没有删除
        $query = $this->db->get($this->table);
        return $query->result_array();

    }
    public function getone($qid)
    {
       // $qid = $this->input->post_get('id', true);
       //echo $qid;
        return $this->getlimitbytimeinfo($qid,date("Y-m-d",strtotime("now")));

        
    }
    

    public function add()
    {

        $qid = $this->input->post_get('qid', true);
        $addtime =$this->input->post_get('addtime', true);
        $price=$this->input->post_get('price', true);
        $res2=$this->getlimitbytime($qid,date("Y-m-d",strtotime($addtime)));
        if($res2>0){
            return 0;
        }else{
            $res=$this->getlimit($qid);

            if($res){
                // if(date("Y-m-d",strtotime($res->addtime))==date("Y-m-d",time())){
                // 	//今天有数据就直接退出添加过程
                // 	return false;
                // }
    
    
                $data = array(
                    'qid' => $qid,
                    'price' => $price,
                    'addtime' => $addtime,
                    'oldprice'=>$res->price,
                    'updown'=>$price-$res->price,
                    'upp'=>(($price-$res->price)/$res->price)*100
                );
            
              
                $updata = array(
                    //'id' => $qid,
                    'price' => $price,
                    'oldprice'=>$res->price,
                    'updown'=>$price-$res->price,
                    'upp'=>(($price-$res->price)/$res->price)*100
                );
    
            }else{
                $data = array(
                    'qid' => $qid,
                    'price' => $price,
                    'addtime' => $addtime,
                    'oldprice'=>0,
                    'updown'=>0,
                    'upp'=>0
                );


                //更新主表
                $updata = array(
                   //'id' => $qid,
                    'price' => $price,
                    'oldprice'=>0,
                    'updown'=>0,
                    'upp'=>0
                );
    

            }
            $this->db->where('id',$qid);
            //更新数据
            $this->db->update('quotes', $updata);
        
            $this->db->replace($this->table, $data);
    
            return $this->db->affected_rows();;

        }
       
    } 
    
    public function  getlimitbytimeinfo($qid,$addtime){
       
        $this->db->where('qid', $qid);//0没有删除 
        $this->db->where('is_del', "0");//0没有删除
		$this->db->where('date(addtime)',$addtime);
        $query = $this->db->get($this->table);
		return $query->row();
    }
       
    public function  getlimitbytime($qid,$addtime){
       
        $this->db->where('qid', $qid);//0没有删除 
        $this->db->where('is_del', "0");//0没有删除
		$this->db->where('date(addtime)',$addtime);
        return $this->db->count_all_results($this->table);
    }
    
    public function  getlimit($qid){
		$this->db->limit(1);
		$this->db->where('qid',$qid);
		$this->db->order_by('addtime','desc');
		$query = $this->db->get($this->table);
		return $query->row();
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
			'qid' => $this->input->post_get('qid', true),
            'price' => $this->input->post_get('price', true)

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
	public function getApiInfo($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get($this->table);

		return $query->row();

	}



    public function info()
    {
        $this->qid = $this->input->post_get('qid', true);// please read the below note
        $this->price = $this->input->post_get('price', true);
        $this->db->where('qid', $this->qid);
        $this->db->where('price', $this->price);
        $query = $this->db->get($this->table);

        return $query->row();

    }

}


