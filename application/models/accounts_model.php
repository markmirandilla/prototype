<?php

class accounts_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    public function getAccountById($account_id) {
    	$query = $this->db->get_where('accounts', array('account_id' => $account_id));
    	return $query->row();
    }


}