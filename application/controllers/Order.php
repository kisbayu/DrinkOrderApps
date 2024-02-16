<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct(){        
        parent::__construct();
        $this->load->model('Order_Model');
        $this->load->library('form_validation');   
        $this->load->helper(['url','form']);
    }
    
    public function view_create_order()
	{
		$this->load->view('templates/header');
		$this->load->view('create_order');
		$this->load->view('templates/footer');	
	}

	public function view_list_order()
	{
		$this->load->view('templates/header');
		$this->load->view('list_order');
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
            'room' => 1,
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
        redirect('order');
    }
	}

}