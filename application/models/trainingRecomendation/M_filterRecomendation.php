<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_filterRecomendation extends CI_Model 
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getUbisDropdown(){
        $data = $this->db->query("
        SELECT distinct(lnd_learning_focus.id_ubis), a_hcd_plan_ubis.deskripsi
        FROM lnd_learning_focus
                 INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        WHERE lnd_learning_focus.kode_akademi = 'C'
        ")->result();

        // $data = $this->db->query("
        // SELECT distinct(lnd_learning_focus.id_ubis), a_hcd_plan_ubis.deskripsi
        // FROM lnd_learning_focus
        //          INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        // ")->result();

        // $data = $this->db->query("
        // SELECT distinct(lnd_learning_focus.id_ubis), a_hcd_plan_ubis.deskripsi
        // FROM lnd_learning_focus
        // INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        // WHERE a_hcd_plan_ubis.kode_akademi = 'C'
        // ")->result();

        // $data = $this->db->query("
        // SELECT distinct(lnd_learning_focus.id_ubis), a_hcd_plan_ubis.deskripsi
        // FROM lnd_learning_focus
        // INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        // ")->result();

        return $data;
    }

    public function getCompetenceDropdown($idUbis){
        $data = $this->db->query("
        SELECT org_competence
        FROM `lnd_learning_focus`
        WHERE lnd_learning_focus.id_ubis = '$idUbis' and kode_akademi = 'C'
        ")->result();

        // $data = $this->db->query("
        // SELECT org_competence
        // FROM `lnd_learning_focus`
        // WHERE lnd_learning_focus.id_ubis = '$idUbis'
        // ")->result();

        // $data = $this->db->query("
        // SELECT org_competence
        // FROM lnd_learning_focus
        // INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        // WHERE a_hcd_plan_ubis.kode_akademi = 'C' AND lnd_learning_focus.id_ubis = '$idUbis'
        // ")->result();

        // $data = $this->db->query("
        // SELECT org_competence
        // FROM lnd_learning_focus
        // INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_focus.id_ubis
        // WHERE lnd_learning_focus.id_ubis = '$idUbis'
        // ")->result();

        return $data;
    }

    public function getObjectiveDropdown($competence){
        $data = $this->db->query("
        SELECT objective FROM t_learning_focus WHERE org_competence = '$competence'
        ")->result();

        return $data;
    }
}