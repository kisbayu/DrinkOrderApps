<?php

class Order_Model extends CI_model
{
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