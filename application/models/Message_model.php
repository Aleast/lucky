<?php
require_once 'Base_model.php';

class Message_model extends Base_model
{
    public $table = 'message';
    public $id;
    public $name;
    public $content;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
           
            $sql='select m.name as name,m.content as content,m.addtime as addtime,m.uid as uid,m.pid as pid,m.id as id,us.nickName as nickName,wx.nickName as tonickName
            from message as m,wxuser us,wxuser as wx where m.uid=us.id and m.pid=wx.id and m.is_del=0 limit 0,'.$limit;
            
           // $this->db->limit($limit,0);
        }else{

            $sql='select m.name as name,m.content as content,m.addtime as addtime,m.uid as uid,m.pid as pid,m.id as id,us.nickName as nickName,wx.nickName as tonickName
            from message as m,wxuser us,wxuser as wx where m.uid=us.id and m.pid=wx.id and m.is_del=0 limit '.$limit*($pages-1).','.$limit;
            
            //$this->db->limit($limit,$limit*($pages-1));
        }



        // $this->db->where('message.is_del', "0");//0没有删除
        // $this->db->select('message.name as name,message.content as content,message.addtime as addtime,
        // wxuser.nickName as nickName,message.id as id,message.uid as uid,message.pid as pid');
		// $this->db->order_by('message.addtime', 'desc');

		// $this->db->from('message');
        // $this->db->join('wxuser', 'message.uid = wxuser.id');
        // $this->db->join('wxuser as wx', 'message.pid = wxuser.id');
       
        return $this->db->query($sql)->result_array();

    }

    public function add()
    {

        $data = array(
            'name' => $this->input->post_get('name', true),
            'content' => $this->input->post_get('content', true)
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
            'name' => $this->input->post_get('name', true),
            'content' => $this->input->post_get('content', true)

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
        $this->name = $this->input->post_get('name', true);// please read the below note
        $this->content = $this->input->post_get('content', true);
        $this->db->where('name', $this->name);
        $this->db->where('content', $this->content);
        $query = $this->db->get($this->table);

        return $query->row();

    }

}


