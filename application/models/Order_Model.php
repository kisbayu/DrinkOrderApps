<?php

class Order_Model extends CI_model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function get_all_order(){
        $this->db->order_by('created_at','ASC');
        $this->db->where('is_finished =', false);
        $query = $this->db->get('orders');

        return $query->result_array();
    }

    public function get_order($limit, $start){
        return $this->db->get('orders',$limit,$start)->result_array();
    }

    public function count_order_rows(){
        return $this->db->get('orders')->num_rows();
    }

    public function create_new_order($data){
        $this->db->insert('orders', $data);
    }

    public function finishOrderById($order_id) {
    $data = array(
        'is_finished' => 1, // Assuming is_finished is stored as a boolean or tinyint
    );

    $this->db->where('order_id', $order_id);
    return $this->db->update('orders', $data); // Assuming your table name is 'orders'
    }


}