<?php

class Super_Admin_Model extends CI_Model {

    //put your code here

    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }
    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_user_message(){
        $this->db->select('*');
        $this->db->from('tbl_user_message');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_category_info($category_id) {

        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }
    public function delete_user_message_info($user_id) {

        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_user_message');
    }
    public function unpublish_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }
    public function publish_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }
    public function select_category_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function update_category_info($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }
    
    
    
    
    //Blog Model................
    public function save_blog_info($data)
    {
        $this->db->insert('tbl_blog', $data);
    }
    
    
    
    
    
    //News Adding Model
    public function save_news_info($data){
        $this->db->insert('tbl_news', $data);
    }
    public function select_all_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_news_info($news_id) {

        $this->db->where('news_id', $news_id);
        $this->db->delete('tbl_news');
    }

    public function unpublish_news_info($news_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function publish_news_info($news_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function select_news_by_news_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_news_info($data, $news_id) {
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }
    
    
    
    
    //Moto Adding Model
    public function save_moto_info($data){
        $this->db->insert('tbl_moto', $data);
    }
    public function select_all_moto() {
        $this->db->select('*');
        $this->db->from('tbl_moto');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_moto_info($moto_id) {

        $this->db->where('moto_id', $moto_id);
        $this->db->delete('tbl_moto');
    }

    public function unpublish_moto_info($moto_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('moto_id', $moto_id);
        $this->db->update('tbl_moto');
    }

    public function publish_moto_info($moto_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('moto_id', $moto_id);
        $this->db->update('tbl_moto');
    }

    public function select_moto_by_moto_id($moto_id) {
        $this->db->select('*');
        $this->db->from('tbl_moto');
        $this->db->where('moto_id', $moto_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_moto_info($data, $moto_id) {
        $this->db->where('moto_id', $moto_id);
        $this->db->update('tbl_moto', $data);
    }
}

?>
