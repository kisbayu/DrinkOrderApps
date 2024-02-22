<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){        
        parent::__construct();
        $this->load->model('Order_Model');
        $this->load->library('form_validation');
        $this->load->library('pagination');  
        $this->load->helper(['url','form']);
    }
    
    public function view_create_order($room_number)
	{
        $data['room_number'] = $room_number;
		$this->load->view('templates/header');
		$this->load->view('create_order', $data);
		$this->load->view('templates/footer');	
	}

    public function view_thank_you()
    {
        $this->load->view('templates/header');
		$this->load->view('thank_you');
		$this->load->view('templates/footer');
    }

	public function create_order()
	{
    $this->form_validation->set_rules('name', 'name', 'required');

    if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('create_order');
        $this->load->view('templates/footer');
    } else {
        $data = array(
            'name' => $this->input->post('name'),
            'room' => $this->input->post('room'),
            'menu_mineral_water_qty' => $this->input->post('menu_mineral_water_qty'),
            'menu_cold_sweet_tea_qty' => $this->input->post('menu_cold_sweet_tea_qty'),
            'menu_hot_sweet_tea_qty' => $this->input->post('menu_hot_sweet_tea_qty'),
            'menu_cold_black_coffee_qty' => $this->input->post('menu_cold_black_coffee_qty'),
            'menu_hot_black_coffee_qty'  => $this->input->post('menu_hot_black_coffee_qty'),
            'menu_cold_cream_coffee_qty' => $this->input->post('menu_cold_cream_coffee_qty'),
            'menu_hot_cream_coffee_qty' => $this->input->post('menu_hot_cream_coffee_qty'),
            'menu_cold_ocha_qty' => $this->input->post('menu_cold_ocha_qty'),
            'menu_hot_ocha_qty' => $this->input->post('menu_hot_ocha_qty'),
            'notes' => $this->input->post('notes')
        );

        // Load the model
        $this->load->model('Order_Model');

        // Call the model method to create new order
        $new_order = $this->Order_Model->create_new_order($data);

        // Redirect to the 'order' page after order creation
        redirect('/thank-you');
    }
	}

    public function view_list_order(){
        $this->load->model('Order_Model','Order_Model');
        $this->load->library('pagination');
        
        $config['base_url'] = base_url().'Order/view_list_order/';
        $config['total_rows'] = $this->Order_Model->count_order_rows();
        $config['per_page'] = 7;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3); 
        $data['orders'] = $this->Order_Model->get_order($config['per_page'], $data['start']);
        
        $this->load->view('templates/header');
		$this->load->view('list_order', $data);
		$this->load->view('templates/footer');
    }

    public function finishOrder($order_id) {
    $this->load->model('Order_Model'); // Assuming your model is called OrderModel
    $result = $this->Order_Model->finishOrderById($order_id);

    if ($result) {
        // Optionally, set a flash message here to indicate success
        redirect(base_url().'Order/view_list_order/'); // Adjust this to the URL/path of your orders list
    } else {
        // Handle the error, e.g., set a flash message indicating failure
        redirect('/asadsda');
    }
}

}