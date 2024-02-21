<?php

class Order_Model extends CI_model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function record_count() {
        return $this->db->count_all("orders");
    }

    public function fetch_orders($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function search_orders($keyword) {
        $this->db->like('name', $keyword);
        $this->db->or_like('room', $keyword);
        // Add more fields for searching if needed
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }

    public function get_all_order(){
        $this->db->order_by('created_at','ASC');
        $this->db->where('is_finished !=', false);
        $query = $this->db->get('orders');

        return $query->result();
    }

    public function create_new_order($data){
        $this->db->insert('orders', $data);
    }

    public function finished_order($order_id){
        $this->db->where('order_id', $order_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
        $this->db->where('order_id', $order_id);
        $this->db->update('orders', array(
            'is_finished' => true,
            'updated_at' => now()
        ));
        return true;
        } else {
        return false;
        }
    }

}