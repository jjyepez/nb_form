<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo_m extends CI_Model 
{
    function extraer_info_tabla ($tabla, $parametros=array())
    {
        $data_salida=array();
        $rs=$this->db->get($tabla);
        $rs_arr=$rs->result_array();
        $rs_obj=$rs->result();

        $campos_arr=$this->db->field_data($tabla);
        
        $data_salida['campos']  =$campos_arr;
        $data_salida['datos']   =$rs_arr;

        $this->db->close();
        return $data_salida;
    }
}