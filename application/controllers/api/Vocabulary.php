<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
 
class Vocabulary extends REST_Controller
{
    public function index_get()
    {
        $this->response($this->db->get('vocabulary')->result());
    }
 
    public function index_post()
    {
        
        // สร้างรายการข่าวใหม่
    }
 
    public function index_put()
    {
        // แก้ไขรายการข่าว
    }
 
    public function index_delete()
    {
        // ลบรายการข่าว
    }
}