<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){        
        parent::__construct();
        $this->load->model('Order_Model');
        $this->load->library('form_validation');
        $this->load->library('pagination');  
        $this->load->helper(['url','form']);
        $this->load->library('session');
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
    $this->load->library('form_validation');
    $this->form_validation->set_rules('room', 'room', 'required');

    $data['room'] = $this->input->post('room');

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
            'menu_mineral_water_notes' => $this->input->post('notes_menu_mineral_water_qty'),
            'menu_cold_sweet_tea_notes' => $this->input->post('notes_menu_cold_sweet_tea_qty'),
            'menu_hot_sweet_tea_notes' => $this->input->post('notes_menu_hot_sweet_tea_qty'),
            'menu_cold_black_coffee_notes' => $this->input->post('notes_menu_cold_black_coffee_qty'),
            'menu_hot_black_coffee_notes'  => $this->input->post('notes_menu_hot_black_coffee_qty'),
            'menu_cold_cream_coffee_notes' => $this->input->post('notes_menu_cold_cream_coffee_qty'),
            'menu_hot_cream_coffee_notes' => $this->input->post('notes_menu_hot_cream_coffee_qty'),
            'menu_cold_ocha_notes' => $this->input->post('notes_menu_cold_ocha_qty'),
            'menu_hot_ocha_notes' => $this->input->post('notes_menu_hot_ocha_qty')
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

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

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