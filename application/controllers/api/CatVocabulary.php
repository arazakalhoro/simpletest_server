<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class CatVocablary extends REST_Controller
{
    public function index_get()
    {
        $this->response($this->db->get('vocabulary')->result());
    }

    public function index_post()
    {
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        $rs = $this->db
            ->where('level',$obj->level)
            ->order_by('order','ASC')
            ->get('cat_vocabulary a ')
            ->result();
        $this->response($rs);
        // ���ҧ��¡�â�������
    }

    public function index_put()
    {
        // �����¡�â���
    }

    public function index_delete()
    {
        // ź��¡�â���
    }
}