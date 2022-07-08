<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmodel extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function TotalRendimento($today = false){

        $this->db->select_sum('valor');
        $this->db->from('faturas AS f');
        $this->db->join('planos AS p', 'p.id = f.id_plano', 'inner');
        $this->db->where('f.status', 1);
        if($today){
            $this->db->where('f.data_pagamento', date('Y-m-d'));
        }

        $query = $this->db->get();

        if($query->num_rows() > 0){

            $row = $query->row();

            return number_format($row->valor, 2, ',', '.');
        }

        return 0.00;
    }

        
}
?>