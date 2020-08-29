<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'Base.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Rl extends Base {
	public $path='rl';

	 public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
		$this->load->model('manager_model');
		$this->load->model('rl_model');
		// $this->load->library('phpexcel');

		
    
        // $this->load->helper('url_helper');
    }

	public function index()
	{
        $menu_name = "客户信息";
        $where_role = "3";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            $this->load->view('404');
        }
		// echo $this->config->item("base_url");exit;
		// var_dump($this->session->get_userdata());exit;
		$data['total_rows']=$this->rl_model->get_count();    //总的内容 条数

		$data['list'] = $this->rl_model->get_list();
		$this->load->view($this->path.'/list',$data);
	}

	public function add()
	{
        $menu_name = "客户信息";
        $where_role = "0";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            echo "权限不足!";die();
        }
		$data['mids'] = $this->manager_model->get_alluser();
		// var_dump($mids);exit;
		$this->load->view($this->path.'/add',$data);
	}
	public function addone()
	{
	    
	    if($this->rl_model->add_rl()>0){
		
			$data['status']="true";
			
	        
	    }else{
	        $data['status']="添加失败";
	    }
	    echo json_encode($data);
	}


	public function setuse()
	{

	    if($this->rl_model->set_use()>0){
	        $data['status']="true";
	    }else{
	        $data['status']="操作失败";
	    }
	    echo json_encode($data);
	}
	public function edit()
	{
        $menu_name = "客户信息";
        $where_role = "2";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            echo "权限不足!";die();
        }
		$data['info'] = $this->rl_model->getinfo();
		// var_dump($data['info']->phone);exit;
		$data['mids'] = $this->manager_model->get_alluser();
		// $data['rl']  = $this->rl_model->get_info($data['info']->phone);
		// var_dump($data);exit;
		$this->load->view($this->path.'/edit',$data);
	}

	public function update()
	{
		// echo $this->input->post_get('id', true);exit;
		if($this->rl_model->update_rl()>0){
			$data['status']="true";
		}else{
			$data['status']="操作失败";
		}
		echo json_encode($data);

	}
	public function cpass()
	{
		$data['info'] = $this->rl_model->getinfo();

		$this->load->view($this->path.'/password',$data);
	}

	public function delall()
	{
        $menu_name = "客户信息";
        $where_role = "1";//1001,增删改查
        if($this->if_role($menu_name,$where_role) != 1){
            $data['status'] = "权限不足";
        }else {
            if ($this->rl_model->del() > 0) {
                $data['status'] = "true";
            } else {
                $data['status'] = "操作失败";
            }
        }
	    echo json_encode($data);
	}

	public function exportdata(){

		// echo 'export';
		$list = $this->rl_model->getExportData();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');

        $objPHPExcel = new PHPExcel();
        // 设置sheet标签
        $objPHPExcel->setActiveSheetIndex(0);
        // 设置sheet的name
        $objPHPExcel->getActiveSheet()->setTitle('测试sheet');

        // 合并单元格
        $objPHPExcel->getActiveSheet()->mergeCells('A1:F1');
        // 设置行高
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
        // 设置列宽
        $objPHPExcel->getActiveSheet()->getDefaultColumnDimension()->setWidth(18);

        // 自动行高
        $objPHPExcel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // 设置水平居中
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //设置垂直居中
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        // 设置加粗
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

        //设置当前的sheet
        $objPHPExcel->getActiveSheet()->setCellValue('A1', '导出测试excel样式及内容');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', '电话');
        $objPHPExcel->getActiveSheet()->setCellValue('B2', '商城ID');
        $objPHPExcel->getActiveSheet()->setCellValue('C2', '归属员工');
        $objPHPExcel->getActiveSheet()->setCellValue('D2', '员工昵称');
        $objPHPExcel->getActiveSheet()->setCellValue('E2', '归属部门');
        $objPHPExcel->getActiveSheet()->setCellValue('F2', '创建时间');

//        var_dump($list);die();
        foreach($list as $key => $value){
            // 设置行高
            $num = $key+3;
            $objPHPExcel->getActiveSheet()->getRowDimension($num)->setRowHeight(45);
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $num, $value['cphone']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $num, $value['cid']);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $num, $value['username']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $num, $value['nickname']);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $num, $value['deptname']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $num, date("Y-m-d H:i:s",$value['addtime']));
        }
        $outputFileName = time().".xls";
        $xlsWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header('Content-Disposition:inline;filename="'.$outputFileName.'"');
        header("Content-Transfer-Encoding: binary");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        $xlsWriter->save( "php://output" );
	}
	
	

}
