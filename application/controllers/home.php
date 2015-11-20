<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author MIR
 */
class Home extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        
    }

    public function index() {
        $data = array();
        $content_data['all_news'] = $this->home_model->select_published_news();
        $data['menu'] = $this->load->view('menu', $content_data, true);
        $data['slider'] = $this->load->view('slider', $content_data, true);
        $data['main_content'] = $this->load->view('content_home', $content_data, true);
        $data['footer'] = $this->load->view('footer', $content_data, true);
        $data['title'] = 'Home';
        $data['$tempus'] = 0;
        $this->load->view('home_master', $data);
    }
    public function pdfView() {
        $data = array();
        $content_data['all_news'] = $this->home_model->select_published_news();
        $data['menu'] = $this->load->view('menu', $content_data, true);
        $data['header'] = $this->load->view('header', $content_data, true);
        $data['main_content'] = $this->load->view('pdf_view', $content_data, true);
        $data['footer'] = $this->load->view('footer', $content_data, true);
        $data['title'] = 'Home';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    
    public function about_us(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('about_us', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'About Us';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function mission_vision(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('mission_vision', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Mission and Vision';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function chairman_message(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('chairman_message', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Message form Chairman';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function principal_message(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('principal_message', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Message form Principal';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function teachers_info(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('teachers_info', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Teachers Info';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
        public function sa_committee(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('teachers_info', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Teachers Info';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function admission_info(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('admission_info', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Admission Information';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function admission_fee(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('admission_fee', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Admission Fee';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function admission_form(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('admission_form', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Admission Form';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function transport() {
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('transport', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Transportation';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function medicare() {
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('medicare', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Medicare';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function computer_lab() {
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('computer_lab', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Computer Lab';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function multimedia_class() {
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('multimedia_class', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Multimedia Class Room';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function library(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('library', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Library';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function extra_activity(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('extra_activity', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Extracurricular Activity';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function photo_gallery(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('photo_gallery', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Photo Gallery';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function notice(){
        $data = array();
        $notice_data['all_news'] = $this->home_model->select_published_news();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('notice', $notice_data, true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Notice and News';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function notice_details($news_id){
        $data = array();
        $data['all_news'] = $this->home_model->select_published_news();
        $data['news_info'] = $this->home_model->select_published_news_by_news_id($news_id);
        //echo '<pre>';
        //print_r($data['news_info']);
        //exit();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('notice_details', $data, true);
        $data['footer'] = $this->load->view('footer', $data, true);
        $data['title'] = 'Notice Details';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function contact_us(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('contact_us', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Notice and News';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    public function faq(){
        $data = array();
        $data['menu'] = $this->load->view('menu', " ", true);
        $data['header'] = $this->load->view('header', " ", true);
        $data['main_content'] = $this->load->view('faq', " ", true);
        $data['footer'] = $this->load->view('footer', " ", true);
        $data['title'] = 'Frequently Ask and Question';
        $data['$tempus'] = 0;
        $this->load->view('view_master', $data);
    }
    
    public function save_user_message(){
        $data = array();
        $data['full_name'] = $this->input->post('full_name', true);
        $data['phone_number'] = $this->input->post('phone_number', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['user_message'] = $this->input->post('user_message', true);
        $this->home_model->save_user_message_info($data);
        $sdata = array();
        $sdata['message'] = "Waiting for Replay!";
        $this->session->set_userdata($sdata);
        redirect("home/contact_us");
    }
    public function registration(){
        $data = array();
        $data['all_news'] = $this->home_model->select_published_news();
        $data['main_content'] = $this->load->view('page_contact_us', $data, true);
        $data['title'] = 'Registration';
        $data['$tempus'] = 0;
        $this->load->view('home_master', $data);
    }
    public function save_comments() {
        $data = array();
        $data['blog_id'] = $this->input->post('blog_id', true);
        $data['comments_author_name'] = $this->input->post('comments_author_name', true);
        $data['comments_author_email'] = $this->input->post('comments_author_email', true);
        $data['comments_description'] = $this->input->post('comments_description', true);

        $this->home_model->save_comments_info($data);
        $sdata = array();
        $sdata['message'] = "Waiting for apporval!";
        $this->session->set_userdata($sdata);
        redirect("home/blog_details/$data[blog_id]");
    }
    public function manage_comments() {
        $data = array();
        $data['all_comments'] = $this->home_model->select_all_comments();
        $data['admin_maincontent'] = $this->load->view('view_comments', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function unpublish_comments($comments_id) {
        $this->home_model->unpublish_comments_info($comments_id);
        redirect("home/manage_comments");
    }
    public function publish_comments($comments_id) {
        $this->home_model->publish_comments_info($comments_id);
        redirect("home/manage_comments");
    }

}
?>
