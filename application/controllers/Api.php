<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    
    
    // abc
    function abc_data_cetak(){
        $this->abcdb_real = $this->load->database('abcdb_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM datacetak WHERE id>34418 AND date(created_date)='$now'  order by id asc ";
		$query = $this->abcdb_real->query($sql);
		$list = $query->result();
		$this->abcdb_real->close();

        if(count($list)>0){
            foreach($list as $obj){
                $data = array(
                    'id_dummy' => 'D-'.$obj->id,
                    'Tanggal' => $obj->Tanggal,
                    'Customer' => $obj->Customer,
                    'Deskripsi' => $obj->Deskripsi,
                    'Bahan' => $obj->Bahan,
                    'Sisi' => $obj->Sisi,
                    'Uk1' => $obj->Uk1,
                    'X' => $obj->X,
                    'Uk2' => $obj->Uk2,
                    'M' => $obj->M,
                    'Jumlah' => $obj->Jumlah,
                    'Pcs' => $obj->Pcs,
                    'Finishing' => $obj->Finishing,
                    'Desain' => $obj->Desain,
                    'HargaModal' => $obj->HargaModal,
                    'UnitPriceModal' => $obj->UnitPriceModal,
                    'TotalModal' => $obj->TotalModal,
                    'Harga' => $obj->Harga,
                    'UnitPrice' => $obj->UnitPrice,
                    'Total' => $obj->Total,
                    'Balance' => $obj->Balance,
                    'Dp' => $obj->Dp,
                    'Ppn' => $obj->Ppn,
                    'ActualAmount' => $obj->ActualAmount,
                    'SisaBayar' => $obj->SisaBayar,
                    'Tgl_DP' => $obj->Tgl_DP,
                    'Tgl_Lunas' => $obj->Tgl_Lunas,
                    'NoInvoice' => $obj->NoInvoice,
                    'Status' => $obj->Status,
                    'Validasi' => $obj->Validasi,
                    'User' => $obj->User,
                    'Mesin' => $obj->Mesin,
                );
                $new_id = 'D-'.$obj->id;
                $this->abcdb = $this->load->database('abcdb', TRUE);
                $check = $this->Mdata->check_data_cetak_abc($new_id);
                if($check==2){
                    $this->abcdb->insert('datacetak', $data);
                }else{
                    $this->abcdb->where('id_dummy', $new_id);
                    $this->abcdb->update('datacetak', $data);
                }
            }
        }
        echo 'success : '.count($list);
    }

    function abc_pemasukan(){
        $this->abcdb_real = $this->load->database('abcdb_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pemasukkan WHERE id>25294 AND date(created_date)='$now'  order by id asc ";
		$query = $this->abcdb_real->query($sql);
		$list = $query->result();
		$this->abcdb_real->close();
        foreach($list as $dt){
                $id_ = $dt->NoInvoice;
                $date_ = $dt->Tanggal;
                $invoice_date = $this->Mdata->get_percent_date($id_,$date_);
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'NoInvoice' => $dt->NoInvoice,
                'Customer' => $dt->Customer,
                'Dp' => $dt->Dp,
                'SisaBayar' => $dt->SisaBayar,
                'Saldo' => $dt->Saldo,
                'StatusBayar' => $dt->StatusBayar,
                'Tgl_DP' => $dt->Tgl_DP,
                'Tgl_Lunas' => $dt->Tgl_Lunas,
                'Keterangan' => $dt->Keterangan,
                'invoice_date' => $invoice_date,
            );
            $new_id = 'D-'.$dt->id;
            $this->abcdb = $this->load->database('abcdb', TRUE);
            $check = $this->Mdata->check_abc_pemasukan($new_id);
            if($check==2){
                $this->abcdb->insert('pemasukkan', $data);
            }else{
                $this->abcdb->where('id_dummy', $new_id);
                $this->abcdb->update('pemasukkan', $data);
            }
        }
        echo 'success : '.count($list);
    }
    
    function abc_pengeluaran(){
        $this->abcdb_real = $this->load->database('abcdb_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pengeluaran WHERE id>6120 AND date(created_date)='$now'  order by id asc ";
		$query = $this->abcdb_real->query($sql);
		$list = $query->result();
		$this->abcdb_real->close();
        foreach($list as $dt){
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'Keterangan' => $dt->Keterangan,
                'Jumlah' => $dt->Jumlah,
                'User' => $dt->User,
                'Status' => $dt->Status,
            );
            $new_id = 'D-'.$dt->id;
            $this->abcdb = $this->load->database('abcdb', TRUE);
            $check = $this->Mdata->check_abc_pengeluaran($new_id);
            if($check==2){
                $this->abcdb->insert('pengeluaran', $data);
            }else{
                $this->abcdb->where('id_dummy', $new_id);
                $this->abcdb->update('pengeluaran', $data);
            }
        }
        echo 'success : '.count($list);
    }

    // express sincom 
    function express_data_cetak(){
        $this->express_real = $this->load->database('express_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM datacetak WHERE id>33985 AND date(created_date)>'2024-08-01'  order by id asc";
		$query = $this->express_real->query($sql);
		$list = $query->result();
		$this->express_real->close();
       
        if(count($list)>0){
            foreach($list as $obj){
                $data = array(
                    'id_dummy' => 'D-'.$obj->id,
                    'Tanggal' => $obj->Tanggal,
                    'Customer' => $obj->Customer,
                    'Deskripsi' => $obj->Deskripsi,
                    'Bahan' => $obj->Bahan,
                    'Sisi' => $obj->Sisi,
                    'Uk1' => $obj->Uk1,
                    'X' => $obj->X,
                    'Uk2' => $obj->Uk2,
                    'M' => $obj->M,
                    'Jumlah' => $obj->Jumlah,
                    'Pcs' => $obj->Pcs,
                    'Finishing' => $obj->Finishing,
                    'Desain' => $obj->Desain,
                    'HargaModal' => null,
                    'UnitPriceModal' => null,
                    'TotalModal' => null,
                    'Harga' => $obj->Harga,
                    'UnitPrice' => $obj->UnitPrice,
                    'Total' => $obj->Total,
                    'Balance' => null,
                    'Dp' => $obj->Dp,
                    'Ppn' => $obj->Ppn,
                    'ActualAmount' => $obj->ActualAmount,
                    'SisaBayar' => $obj->SisaBayar,
                    'Tgl_DP' => $obj->Tgl_DP,
                    'Tgl_Lunas' => $obj->Tgl_Lunas,
                    'NoInvoice' => $obj->NoInvoice,
                    'Status' => $obj->Status,
                    'Validasi' => $obj->Validasi,
                    'User' => $obj->User,
                    'Mesin' => $obj->Mesin,
                );
               
                $new_id = 'D-'.$obj->id;
                $this->expressdb = $this->load->database('expressdb', TRUE);
                $check = $this->Mdata->check_data_cetak_express($new_id);
                if($check==2){
                    $this->expressdb->insert('datacetak', $data);
                }else{
                    $this->expressdb->where('id_dummy', $new_id);
                    $this->expressdb->update('datacetak', $data);
                }
            }
        }
        echo 'success : '.count($list);
    }

    function express_pemasukan(){
        $this->express_real = $this->load->database('express_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pemasukkan WHERE id>19819 AND date(created_date)='$now'  order by id asc ";
		$query = $this->express_real->query($sql);
		$list = $query->result();
		$this->express_real->close();
       
        foreach($list as $dt){
                $id_ = $dt->NoInvoice;
                $date_ = $dt->Tanggal;
                $invoice_date = $this->Mdata->get_percent_date($id_,$date_);
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'NoInvoice' => $dt->NoInvoice,
                'Customer' => $dt->Customer,
                'Dp' => $dt->Dp,
                'SisaBayar' => $dt->SisaBayar,
                'Saldo' => $dt->Saldo,
                'StatusBayar' => $dt->StatusBayar,
                'Tgl_DP' => $dt->Tgl_DP,
                'Tgl_Lunas' => $dt->Tgl_Lunas,
                'Keterangan' => $dt->Keterangan,
                'invoice_date' => $invoice_date,
            );
            $new_id = 'D-'.$dt->id;
            $this->expressdb = $this->load->database('expressdb', TRUE);
            $check = $this->Mdata->check_express_pemasukan($new_id);
            if($check==2){
                $this->expressdb->insert('pemasukkan', $data);
            }else{
                $this->expressdb->where('id_dummy', $new_id);
                $this->expressdb->update('pemasukkan', $data);
            }
        }
        echo 'success : '.count($list);
    }

    function express_pengeluaran(){
        $this->express_real = $this->load->database('express_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pengeluaranxpress WHERE id>2474 AND date(created_date)='$now'  order by id asc ";
		$query = $this->express_real->query($sql);
		$list = $query->result();
		$this->express_real->close();
       
        foreach($list as $dt){
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'Keterangan' => $dt->Keterangan,
                'Jumlah' => $dt->Jumlah,
                'User' => $dt->User,
                'Status' => null,
            );
            $new_id = 'D-'.$dt->id;
            $this->expressdb = $this->load->database('expressdb', TRUE);
            $check = $this->Mdata->check_express_pengeluaran($new_id);
            if($check==2){
                $this->expressdb->insert('pengeluaran', $data);
            }else{
                $this->expressdb->where('id_dummy', $new_id);
                $this->expressdb->update('pengeluaran', $data);
            }
        }
        echo 'success : '.count($list);
    }
    
    //  nagoya
    function nagoya_data_cetak(){
        $this->nagoya_real = $this->load->database('nagoya_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM datacetak WHERE id >51875 AND  date(created_date)='$now'  order by id asc ";
		$query = $this->nagoya_real->query($sql);
		$list = $query->result();
		$this->nagoya_real->close();
	

        if(count($list)>0){
            foreach($list as $obj){
                $data = array(
                    'id_dummy' => 'D-'.$obj->id,
                    'Tanggal' => $obj->Tanggal,
                    'Customer' => $obj->Customer,
                    'Deskripsi' => $obj->Deskripsi,
                    'Bahan' => $obj->Bahan,
                    'Sisi' => $obj->Sisi,
                    'Uk1' => $obj->Uk1,
                    'X' => $obj->X,
                    'Uk2' => $obj->Uk2,
                    'M' => $obj->M,
                    'Jumlah' => $obj->Jumlah,
                    'Pcs' => $obj->Pcs,
                    'Finishing' => $obj->Finishing,
                    'Desain' => $obj->Desain,
                    'HargaModal' => $obj->HargaModal,
                    'UnitPriceModal' => $obj->UnitPriceModal,
                    'TotalModal' => $obj->TotalModal,
                    'Harga' => $obj->Harga,
                    'UnitPrice' => $obj->UnitPrice,
                    'Total' => $obj->Total,
                    'Balance' => $obj->Balance,
                    'Dp' => $obj->Dp,
                    'Ppn' => $obj->Ppn,
                    'ActualAmount' => $obj->ActualAmount,
                    'SisaBayar' => $obj->SisaBayar,
                    'Tgl_DP' => $obj->Tgl_DP,
                    'Tgl_Lunas' => $obj->Tgl_Lunas,
                    'NoInvoice' => $obj->NoInvoice,
                    'Status' => $obj->Status,
                    'Validasi' => $obj->Validasi,
                    'User' => $obj->User,
                    'Mesin' => $obj->Mesin,
                );
                $new_id = 'D-'.$obj->id;
                $this->nagoyadb = $this->load->database('nagoyadb', TRUE);
                $check = $this->Mdata->check_data_cetak_nagoya($new_id);
                if($check==2){
                    $this->nagoyadb->insert('datacetak', $data);
                }else{
                    $this->nagoyadb->where('id_dummy', $new_id);
                    $this->nagoyadb->update('datacetak', $data);
                }
            }
        }
        echo 'success : '.count($list);
    }
    
    function nagoya_pemasukan(){
        $this->nagoya_real = $this->load->database('nagoya_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pemasukkan WHERE id>3562 and date(created_date)='$now'  order by id asc ";
		$query = $this->nagoya_real->query($sql);
		$list = $query->result();
		$this->nagoya_real->close();
        foreach($list as $dt){
                $id_ = $dt->NoInvoice;
                $date_ = $dt->Tanggal;
                $invoice_date = $this->Mdata->get_percent_date($id_,$date_);
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'NoInvoice' => $dt->NoInvoice,
                'Customer' => $dt->Customer,
                'Dp' => $dt->Dp,
                'SisaBayar' => $dt->SisaBayar,
                'Saldo' => $dt->Saldo,
                'StatusBayar' => $dt->StatusBayar,
                'Tgl_DP' => $dt->Tgl_DP,
                'Tgl_Lunas' => $dt->Tgl_Lunas,
                'Keterangan' => $dt->Keterangan,
                'invoice_date' => $invoice_date,
            );
            $new_id = 'D-'.$dt->id;
            $this->nagoyadb = $this->load->database('nagoyadb', TRUE);
            $check = $this->Mdata->check_nagoya_pemasukan($new_id);
            if($check==2){
                $this->nagoyadb->insert('pemasukkan', $data);
            }else{
                $this->nagoyadb->where('id_dummy', $new_id);
                $this->nagoyadb->update('pemasukkan', $data);
            }
        }
        echo 'success : '.count($list);
    }
    
    function nagoya_pengeluaran(){
        $this->nagoya_real = $this->load->database('nagoya_real', TRUE);
        $now = date('Y-m-d');
        $sql = "SELECT * FROM pengeluaran WHERE id>824 and date(created_date)='$now'  order by id asc ";
		$query = $this->nagoya_real->query($sql);
		$list = $query->result();
		$this->nagoya_real->close();
        foreach($list as $dt){
            $data = array(
                'id_dummy' => 'D-'.$dt->id,
                'Tanggal' => $dt->Tanggal,
                'Keterangan' => $dt->Keterangan,
                'Jumlah' => $dt->Jumlah,
                'User' => $dt->User,
                'Status' => $dt->Status,
            );
            $new_id = 'D-'.$dt->id;
            $this->nagoyadb = $this->load->database('nagoyadb', TRUE);
            $check = $this->Mdata->check_nagoya_pengeluaran($new_id);
            if($check==2){
                $this->nagoyadb->insert('pengeluaran', $data);
            }else{
                $this->nagoyadb->where('id_dummy', $new_id);
                $this->nagoyadb->update('pengeluaran', $data);
            }
        }
        echo 'success : '.count($list);
    }

    

}

