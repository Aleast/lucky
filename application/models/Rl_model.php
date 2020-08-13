<?php
require_once 'Base_model.php';

class Rl_model extends Base_model
{
    public $table = 'rl';
    public $id;
    public $name;
    public $price;

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
		$this->db->select('rl.*,manager.username,dept.name as deptname');
        $this->db->where('rl.is_del', "0");//0没有删除
        
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        
		$this->db->order_by('rl.id desc');//0没有删除
		
		$this->db->join('manager', 'rl.mid = manager.id','left');
		$this->db->join('dept', 'manager.deptid = dept.id','left');

       
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
                    'cphone'=>$insertdata['cphone'],
                    'mid'=>$insertdata['mid'],
                    'cid' => $insertdata['cid'],
                    'addtime' => $addtime
                    
                    
                );
      
            $this->db->replace($this->table, $data);
           // echo $this->db->last_query();


            return $this->db->affected_rows();
    } 

    public function add_rl()
    {

        $data = array(
            'cid' =>  $this->input->post_get('cid', TRUE),
            'mid' => $this->input->post_get('mid', TRUE),
            'cphone' => $this->input->post_get('cphone', TRUE),
            'addtime' => time()

        );

        $this->db->replace($this->table, $data);
       
        return $this->db->affected_rows();;
        
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

    public function update()
    {
        $data = array(
            'cid' => $this->input->post_get('cid', true),
            'cphone' => $this->input->post_get('cphone', true),
            'mid'=>$this->input->post_get('mid', true),
            'addtime'=>$this->input->post_get('addtime', true),
            'mname'=>$this->input->post_get('mname', true)
        );

        $id = $this->input->post_get('id', true);

        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();

    }

    public function update_rl()
    {
        $data = array(

            'cid' =>  $this->input->post_get('cid', TRUE),
            'mid' => $this->input->post_get('mid', TRUE),
            'cphone' => $this->input->post_get('cphone', TRUE),
        );

        $id = $this->input->post_get('id', true);
        // var_dump($id);exit;
        $this->db->where('id', $id);
        if(!empty($this->datascope)){
            $this->db->where_in('mid', $this->datascope);//数据范围
        }
        $this->db->update($this->table, $data);

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
    

}


