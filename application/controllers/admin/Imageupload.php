<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Imageupload extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		IsLogin();
        $this->load->model('admin/Imageupload_model');
    } 
    
	function add()
    {   
	
        if(isset($_POST) && count($_POST) > 0)     
        {   
	
		if (!empty($_FILES))
		{
			$tempFile = $_FILES['file']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
			$targetFile = $targetPath . $_FILES['file']['name'];
			move_uploaded_file($tempFile, $targetFile);
			// save data in database (if you like!)
		}
            
        }
        else
        {            
            $data['_view'] = 'admin/imageupload/add';
            $this->load->view('admin/layouts/main',$data);
        }
    }  

    
    
}