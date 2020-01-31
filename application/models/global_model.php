<?php

/**
 * 
 */
class Global_model extends CI_Model
{
	public function getDataByCondition($table,$where){
		return $this->db->get_where($table, $where);
	}

	public function getDataAll($table){
		return $this->db->get($table);
	}
}

?>