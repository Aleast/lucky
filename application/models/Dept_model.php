<?php
require_once 'Base_model.php';

class Dept_model extends Base_model
{
    public $table = 'dept';
    public $id;
    public $name;
    // public $price;
    public $pid;
    public $deptscope = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        // $is_manager = isset($_SESSION['is_manager'])?$_SESSION['is_manager']:0;
        // $mid = isset($_SESSION['mid'])?$_SESSION['mid']:0;
        $this->pid = isset($_SESSION['deptid'])?$_SESSION['deptid']:99999999;
        
        // $this->pid = $this->get_pid($deptid);
        $this->deptscope = [];
        
    }
    protected function get_pid($deptid){
        $this->db->where('is_del',0);
        $this->db->where('id',$deptid);
        $query = $this->db->get($this->table);
        $row = $query->row();
        return $row->pid;
    }

    protected function get_child_deptids($pid){
        static $deptids = [];
        $this->db->where('is_del',0);
        $this->db->where('pid',$pid);
        $query = $this->db->get($this->table);
        foreach($query->result_array() as $k=>$v){
            $deptids[] = $v[''];
        }

    }

    public function get_count()
    {

        $this->db->where('is_del', "0");//0没有删除
        return $this->db->count_all_results($this->table);

    }
    public function get_list()
    {
        $this->db->where('is_del', "0");//0没有删除
		$this->db->order_by('addtime', 'asc');//0没有删除
        $query = $this->db->get($this->table);
        $result = $this->getTree($query->result_array(),$this->pid);
        return $result;

    }

    private function getTree($data, $parent_id = 0, $level = 0)
    {
        static $tree = array();
        foreach ($data as $k => $v) {
            if ($v["pid"] == $parent_id) {
                $v["level"] = $level;
                $tree[] = $v;
                $this->getTree($data, $v["id"], $level + 1);
            }
        }
        return $tree;
    }
   

    public function add()
    {

        // $cid = $this->input->post_get('cid', true);
        // $cphone =$this->input->post_get('cphone', true);
        // $mid=$this->input->post_get('mid', true);
        // $addtime =$this->input->post_get('addtime', true);
        //var_dump($insertdata);
        $addtime=time();
        $data = array(
            'name'=>$this->input->post_get('name', true),
            'pid'=>$this->input->post_get('pid', true),
            'addtime' => $addtime
        );
      
        $this->db->replace($this->table, $data);
        Dlog_model::save( $this->db->last_query() );

        // echo $this->db->last_query();


        return $this->db->affected_rows();
    } 

    public function del()
    {
        $delllist = $this->input->post_get('dellist', true);
        if($this->has_child($delllist)){
            return -1;
        }elseif($this->has_manager($delllist)){
            return -2;
        }else{
            $this->db->set('is_del', '1');
            $this->db->where_in('id', $delllist);
            $this->db->update($this->table);
            return $this->db->affected_rows();
        }
        
    }

    protected function has_child($pids){
        $this->db->where('is_del', '0');
        $this->db->where_in('pid', $pids);
        return $this->db->count_all_results($this->table);
    }

    protected function has_manager($deptids){
        $this->db->where('is_del', '0');
        $this->db->where_in('deptid', $deptids);
        return $this->db->count_all_results('manager');

    }

    public function update()
    {
        $data = array(
            'name'=>$this->input->post_get('name', true),
            'pid'=>$this->input->post_get('pid', true),
            'addtime' => time()
        );

        $id = $this->input->post_get('id', true);
        if($id ==1){
            //id=1为总公司，不可修改
            return -1;
        }

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
	public function getRlInfo($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get($this->table);
		return $query->row();

	}



    public function info()
    {
        $this->id = $this->input->post_get('id', true);// please read the below note
        $this->db->where('id', $this->id);
        $query = $this->db->get($this->table);
        return $query->row();

    }

    

}


