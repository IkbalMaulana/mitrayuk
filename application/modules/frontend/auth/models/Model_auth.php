<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model {

	private $table = "customer";

	function login($email,$password)
	{
		$where = array(
			'emailCustomer' => $email,
			'passwordCustomer' => hash_password($password)
			);
		$this->db->where($where);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function register($data)
	{
		return $this->db->insert($this->table,$data);
	}

	function customer_confirmation($code,$where="")
	{

		$arr_where = array(
			'confirmation_code' => $code
			);

		if ($where) {
			if (is_array($where)) {
				$arr_where = array_merge($where, $arr_where);
			}else{
				$arr_where = $where;
			}
		}

		$this->db->where($arr_where);

		$query = $this->db->get('customer_confirmation');
		return $query->row();
		
	}

	function activation($code)
	{

		$where = array(
			'confirmation_code' => $code,
			'confirmation_type' => 'activation'
			);

		$this->db->where($where);
		$query = $this->db->get('customer_confirmation');

		if ($query->row()) {
			$this->db->update('customer',array('statusCustomer' => 'Aktif'),array('emailCustomer' => $query->row()->email));
			$this->db->delete('customer_confirmation',array('id' => $query->row()->id));
			return TRUE;
		}else{
			return FALSE;
		}

	}

	function forgot_password($email,$code)
	{

		$this->db->where(array('emailCustomer' => $email,'statusCustomer !=' => 'Tidak Aktif'));
		$cek = $this->db->get('customer');

		if ($cek->row()) {
			$where = array(
				'email' => $email,
				'confirmation_type' => 'reset_password'
				);

			$this->db->where($where);
			$query = $this->db->get('customer_confirmation');

			$arr_data = array(
				'email' => $email,
				'confirmation_code' => $code,
				'confirmation_type' => 'reset_password'
				);

			if ($query->row()) {
				$this->db->update('customer_confirmation',$arr_data,array('email' => $email));
			}else{
				$this->db->insert('customer_confirmation',$arr_data);
			}
			return $query->row();
		}else{
			return FALSE;
		}

	}

	function reset_password($code,$password)
	{

		$where = array(
			'confirmation_code' => $code,
			'confirmation_type' => 'reset_password'
			);

		$this->db->where($where);
		$query = $this->db->get('customer_confirmation');

		if ($query->row()) {
			$this->db->update('customer',array('passwordCustomer' => $password),array('emailCustomer' => $query->row()->email));
			$this->db->delete('customer_confirmation',array('id' => $query->row()->id));
			return TRUE;
		}else{
			return FALSE;
		}

	}

}

/* End of file Model_auth.php */
/* Location: ./application/modules/auth/models/Model_auth.php */