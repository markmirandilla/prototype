<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class accounts extends CI_Controller {

	public function index() {
		$this->account_types();
	}

	public function account_types() {
		$crud = new grocery_CRUD();

		$crud->set_subject('Account Type')
			->set_table('account_types')
			->columns('account_type_name','account_emp_limit','remarks','date_updated')
			->fields('account_type_name','account_emp_limit','remarks')
			->required_fields('account_type_name','account_emp_limit')
			->set_rules('account_emp_limit','Employee Limit','integer')
			->unset_texteditor('remarks')
			->display_as('account_type_name','Name')
			->display_as('account_emp_limit','Employee Limit')
			->display_as('remarks','Remarks')
			->display_as('date_updated','Date Updated')
			->order_by('account_emp_limit','asc');;

		$grid = $crud->render();
        $this->load->view('/default/default_grid.php',$grid);
	}

	public function client() {
		$crud = new grocery_CRUD();

		$crud->set_subject('Account')
			->set_table('accounts')
			->columns('account_name','account_address','country_id')
			->fields('account_name','account_address','country_id','account_phone','account_mobile_phone','account_fax')
			->required_fields('account_name','country_id','account_address')
			->set_relation('country_id','countries','short_name')
			->unset_texteditor('account_address')
			->display_as('account_name','Name')
			->display_as('account_address','Address')
			->display_as('country_id','Country')
			->display_as('date_updated','Date Updated')
			->add_action('contract', '', 'accounts/contract','contract-icon')
			->order_by('account_name','asc');

		$grid = $crud->render();
        $this->load->view('/default/default_grid.php',$grid);
	}

	public function contract($account_id) {
		$this->load->model('accounts_model');
		$account = $this->accounts_model->getAccountById($account_id);

		$crud = new grocery_CRUD();

		$crud->set_subject('Account Contract')
			->set_table('account_contracts')
			->columns('account_type_id','start_date','expiry_date','remarks')
			->fields('account_type_id','start_date','expiry_date','remarks')
			->required_fields('account_type_id','start_date','expiry_date')
			->set_relation('account_type_id','account_types','account_type_name')
			->unset_texteditor('remarks')
			->display_as('account_type_id','Contract Type')
			->display_as('start_date','Start Date')
			->display_as('expiry_date','Expiry Date')
			->display_as('remarks','Remarks')
			->order_by('expiry_date','desc');

		$grid = $crud->render();

		$data = array_merge((array) $grid,array('account' => $account));
		$this->load->view('/accounts/contracts.php',$data);
	}

}