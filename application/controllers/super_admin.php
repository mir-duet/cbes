<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model');
        $this->load->model('home_model');
                $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
           redirect("admin_login","refresh"); 
        }
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
        $this->data1['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor1',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );  
        $this->data_short['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor_short',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
        $this->data_long['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_editor_long',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
        $this->data_short_edit['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_edit_short',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
        $this->data_long_edit['ckeditor'] = array(
            //ID of the textarea that will be replaced
            'id' => 'ck_edit_long',
            'path' => 'js/ckeditor',
            'config' => array(
                'toolbar' => "Full", //Using the Full toolbar
                'width' => "100%", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
    }

    public function index() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/dashbord', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function logout() {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('login_status');
        session_destroy();
        $sdata = array();
        $sdata['message'] = "You are Successfully Logout !";
        $this->session->set_userdata($sdata);
        redirect("admin_login");
    }
    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_category_info($data);
        $sdata = array();
        $sdata['message'] = "Save Category Info Successfully !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/add_category");
    }

    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function view_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        //echo '<pre>';
        //print_r($data['all_category']);
        //exit();
        $data['admin_maincontent'] = $this->load->view('admin/view_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function view_user_message() {
        $data = array();
        $data['all_user_message'] = $this->super_admin_model->select_all_user_message();
        //echo '<pre>';
        //print_r($data['all_category']);
        //exit();
        $data['admin_maincontent'] = $this->load->view('admin/view_user_message', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_info($category_id);
        redirect("super_admin/view_category");
    }
    public function delete_user_message($user_id) {
        $this->super_admin_model->delete_user_message_info($user_id);
        redirect("super_admin/view_user_message");
    }
    public function unpublish_category($category_id) {
        $this->super_admin_model->unpublish_category_info($category_id);
        //echo $category_id;
        redirect("super_admin/view_category");
    }

    public function publish_category($category_id) {
        $this->super_admin_model->publish_category_info($category_id);
        redirect("super_admin/view_category");
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_by_category_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_category_info($data, $category_id);
        $sdata = array();
        $sdata['message'] = "Update Category Info Successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/view_category");
        //redirect("super_admin/edit_category/$category_id");
    }
    // Blog Function Here...........
    public function post_blog()
    {
        $data=array();
        $data['all_category']=$this->home_model->select_published_category();
        $data['ck_editor']=$this->data;
        $data['ck_editor1']=$this->data1;
        $data['admin_maincontent']=$this->load->view('admin/blog_post_form', $data , true);
        $this->load->view('admin/admin_master',$data);
    }
    public function save_blog()
    {
        $data=array();
        $data['blog_title']=$this->input->post('blog_title',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['author_name']=$this->input->post('author_name',true);
        $data['blog_short_description']=$this->input->post('blog_short_description',true);
        $data['blog_long_description']=$this->input->post('blog_long_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_blog_info($data);
        $sdata=array();
        $sdata['message']="Save Blog Info Successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/post_blog");
    }
    
    public function view_comments() {
        $data = array();
        $data['all_comments'] = $this->home_model->select_all_comments();
        //echo '<pre>';
        //print_r($data['all_comments']);
        //exit();
        $data['admin_maincontent'] = $this->load->view('admin/view_comments', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    
    // News Function Here...............
    public function post_news()
    {
        $data = array();
        $data['editor_short']=$this->data_short;
        $data['editor_long']=$this->data_long;
        $data['admin_maincontent'] = $this->load->view('admin/add_news_form', $data , true);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_news()
    {
        $data = array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['author_name'] = $this->input->post('author_name', true);
        $data['news_short_description'] = $this->input->post('news_short_description', true);
        $data['news_long_description'] = $this->input->post('news_long_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_news_info($data);
        $sdata = array();
        $sdata['message'] = "Save News Info Successfully !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/add_news");
    }

    public function view_news() {
        $data = array();
        $data['all_news'] = $this->super_admin_model->select_all_news();
        //echo '<pre>';
        //print_r($data['all_category']);
        //exit();
        $data['admin_maincontent'] = $this->load->view('admin/view_news', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function delete_news($news_id) {
        $this->super_admin_model->delete_news_info($news_id);
        redirect("super_admin/view_news");
    }

    public function unpublish_news($news_id) {
        $this->super_admin_model->unpublish_news_info($news_id);
        //echo $category_id;
        redirect("super_admin/view_news");
    }

    public function publish_news($news_id) {
        $this->super_admin_model->publish_news_info($news_id);
        redirect("super_admin/view_news");
    }

    public function edit_news($news_id) {
        $data = array();
        $data['news_info'] = $this->super_admin_model->select_news_by_news_id($news_id);
        $data['edit_short']=$this->data_short_edit;
        $data['edit_long']=$this->data_long_edit;
        $data['admin_maincontent'] = $this->load->view('admin/edit_news_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_news() {
        $data = array();
        $news_id = $this->input->post('news_id', true);
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news_short_description'] = $this->input->post('news_short_description', true);
        $data['news_long_description'] = $this->input->post('news_long_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_news_info($data, $news_id);
        $sdata = array();
        $sdata['message'] = "Update News Info Successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/view_news");
        //redirect("super_admin/edit_category/$category_id");
    }
    //Moto Info Controller 
    
    public function save_moto()
    {
        $data = array();
        $data['moto_title'] = $this->input->post('moto_title', true);
        $data['author_name'] = $this->input->post('author_name', true);
        $data['moto_description'] = $this->input->post('moto_description', true);
        $data['moto_logo'] = $this->input->post('moto_logo', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_moto_info($data);
        $sdata = array();
        $sdata['message'] = "Save Moto Info Successfully !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/add_moto");
    }
    public function add_moto(){
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_moto_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }
    public function view_moto() {
        $data = array();
        $data['all_moto'] = $this->super_admin_model->select_all_moto();
        //echo '<pre>';
        //print_r($data['all_category']);
        //exit();
        $data['admin_maincontent'] = $this->load->view('admin/view_moto', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function delete_moto($moto_id) {
        $this->super_admin_model->delete_moto_info($moto_id);
        redirect("super_admin/view_moto");
    }

    public function unpublish_moto($moto_id) {
        $this->super_admin_model->unpublish_moto_info($moto_id);
        //echo $category_id;
        redirect("super_admin/view_moto");
    }

    public function publish_moto($moto_id) {
        $this->super_admin_model->publish_moto_info($moto_id);
        redirect("super_admin/view_moto");
    }

    public function edit_moto($moto_id) {
        $data = array();
        $data['moto_info'] = $this->super_admin_model->select_moto_by_moto_id($moto_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_moto_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_moto() {
        $data = array();
        $moto_id = $this->input->post('moto_id', true);
        $data['moto_title'] = $this->input->post('moto_title', true);
        $data['moto_description'] = $this->input->post('moto_description', true);
        $data['moto_logo'] = $this->input->post('moto_logo', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_moto_info($data, $moto_id);
        $sdata = array();
        $sdata['message'] = "Update Moto Info Successfuly !";
        $this->session->set_userdata($sdata);
        redirect("super_admin/view_moto");
        //redirect("super_admin/edit_category/$category_id");
    }
}

?>
