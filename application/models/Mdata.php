<?php
class Mdata extends CI_Model{

	function __construct()
    {
        parent::__construct();
    }

	function get_percent_date($string,$date_data){
        $last = substr($string, -1);
        if($last==6){
		   $new_date = date("Y-m-d", strtotime($date_data . " +3 days"));
        }else if($last==2 || $last==4){
            $last_character = 2; 
			$new_date = date("Y-m-d", strtotime($date_data . " +2 days"));
        }else if($last==9 || $last==5 || $last==0 || $last==7){
            $last_character = 1; 
			$new_date = date("Y-m-d", strtotime($date_data . " +1 days"));
        }else if($last==1 || $last==3 || $last==8){
            $new_date = $date_data; 
        }
		return $new_date;
       
    }

	public function get_profile($id_user){
		exit;
		$sql = "SELECT * FROM tb_user where id='$id_user'  order by id desc";
		$query = $this->db->query($sql);
		return $query->result();
		$this->db->close();
	}

	function check_data_cetak_abc($id){
		$this->abcdb = $this->load->database('abcdb', TRUE);
		$sql = "select id from datacetak where id_dummy='$id'";
		$query = $this->abcdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_abc_pemasukan($id){
		$this->abcdb = $this->load->database('abcdb', TRUE);
		$sql = "select id from pemasukkan where id_dummy='$id'";
		$query = $this->abcdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_abc_pengeluaran($id){
		$this->abcdb = $this->load->database('abcdb', TRUE);
		$sql = "select id from pengeluaran where id_dummy='$id'";
		$query = $this->abcdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_data_cetak_express($id){
		$this->expressdb = $this->load->database('expressdb', TRUE);
		$sql = "select id from datacetak where id_dummy='$id'";
		$query = $this->expressdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_express_pemasukan($id){
		$this->expressdb = $this->load->database('expressdb', TRUE);
		$sql = "select id from pemasukkan where id_dummy='$id'";
		$query = $this->expressdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_express_pengeluaran($id){
		$this->expressdb = $this->load->database('expressdb', TRUE);
		$sql = "select id from pengeluaran where id_dummy='$id'";
		$query = $this->expressdb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}
	
	function check_data_cetak_nagoya($id){
		$this->nagoyadb = $this->load->database('nagoyadb', TRUE);
		$sql = "select id from datacetak where id_dummy='$id'";
		$query = $this->nagoyadb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}
	
	function check_nagoya_pemasukan($id){
		$this->nagoyadb = $this->load->database('nagoyadb', TRUE);
		$sql = "select id from pemasukkan where id_dummy='$id'";
		$query = $this->nagoyadb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function check_nagoya_pengeluaran($id){
		$this->nagoyadb = $this->load->database('nagoyadb', TRUE);
		$sql = "select id from pengeluaran where id_dummy='$id'";
		$query = $this->nagoyadb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}
	
    
	

	
}
