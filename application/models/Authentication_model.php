<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{

    public function signin($data)
    {

        $condition = "Email = '{$data['email']}' AND Password='{$data['password']}'";

        $queryUtilizador = $this->db->get_where("Utilizadores", $condition);

        if ($queryUtilizador->num_rows() == 0) {
            return FALSE;
        }

        $queryUtilizador = $queryUtilizador->result_array();

        if ($queryUtilizador[0]["Admin"] == 1) {
            return $queryUtilizador[0];
        }

        $condition =  "ID_Empresa = '{$queryUtilizador[0]['ID_Utilizador']}'";
        $queryEmpresa = $this->db->get_where("Empresas", $condition);
        $queryEmpresa = $queryEmpresa->result_array();

        return array_merge($queryUtilizador, $queryEmpresa);
    }

    public function signup($data)
    {
        $condition = "Email='{$data['email']}'";

        $query = $this->db->get_where("Utilizadores", $condition);

        if ($query->num_rows() == 0) {
            $this->db->insert("Utilizadores", $data);
        }
    }

    public function recoverPassword($data)
    {   
		
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password",$data["Password"]);
        return($this->db->update("Utilizadores"));
    }

    public function updatePassword($data)
    {
        return $this->db->replace("Utilizadores", $data);
    }
}
