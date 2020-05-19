<?php 

	class M_ngarot extends CI_Model {
		public function get_data ()
		{
			return $this->db->get('tb_ngarot')->result_array();
		}
	}


 ?>