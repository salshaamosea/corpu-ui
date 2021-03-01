<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_distributionSkill extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getAcademyDesc(){
        $data = $this->db->query("
        SELECT
        DISTINCT(t_namingconvention.deskripsi)
        FROM cbhrm
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        ")->result();
        return $data;
    }

    public function getUbisDesc(){
        $data = $this->db->query("
        SELECT
        DISTINCT a_hcd_plan_ubis.deskripsi
        FROM a_hcd_plan_ubis
        JOIN cbhrm ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        ")->result();
        return $data;
    }

    public function getCCGroup(){
        $data = $this->db->query("
        SELECT
        DISTINCT a_hcd_plan_ubis.deskripsi, cbhrm.cc_group, t_namingconvention.deskripsi as nama_akademi
        FROM a_hcd_plan_ubis
        JOIN cbhrm ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        ")->result();
        return $data;
    }

    public function getRadarChartAvgSkillAcademy($academydesc, $ccgroup){
        $data = $this->db->query("
        SELECT
        t_namingconvention.deskripsi as nama_akademi,
        cc_group,
        cbhrm.title,
        cbhrm.competencycode,
        AVG(case when cbhrm.age_by_2020 < 32 then cbhrm.gap_total end) as under31,
        AVG(case when cbhrm.age_by_2020 > 31 && cbhrm.age_by_2020 < 43 then cbhrm.gap_total end) as between31_42,
        AVG(case when cbhrm.age_by_2020 > 42 then cbhrm.gap_total end) as above42,
        AVG(cbhrm.gap_total) as total
        FROm cbhrm
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        JOIn t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE t_namingconvention.deskripsi = '$academydesc' AND cbhrm.cc_group = '$ccgroup'
        GROUP BY cbhrm.cc_group, cbhrm.title
        ORDER BY cc_group
        ")->result();
        return $data;
    }

    public function getBarChartDisSkillAcademy($academydesc, $ccgroup){
        $data = $this->db->query("
        SELECT
        t_namingconvention.deskripsi as nama_akademi,
        cc_group,
        cbhrm.title,
        cbhrm.competencycode,
        Count(case when cbhrm.age_by_2020 < 32 then 1 end) as under31,
        Count(case when cbhrm.age_by_2020 > 31 && cbhrm.age_by_2020 < 43 then 1 end) as between31_42,
        Count(case when cbhrm.age_by_2020 > 42 then 1 end) as above42,
        Count(cbhrm.gap_total) as total
        FROm cbhrm
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        JOIn t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE t_namingconvention.deskripsi = '$academydesc' AND cbhrm.cc_group = '$ccgroup'
        GROUP BY cbhrm.cc_group, cbhrm.title
        ORDER BY cc_group
        ")->result();
        return $data;
    }

    public function getRadarChartAvgSkillUbis($ubisdesc, $ccgroup){
        $data = $this->db->query("
        SELECT cc_group, cbhrm.title, cbhrm.competencycode,
        AVG(case when cbhrm.age_by_2020 < 32 then cbhrm.gap_total end) as under31,
        AVG(case when cbhrm.age_by_2020 > 31 && cbhrm.age_by_2020 < 43 then cbhrm.gap_total end) as between31_42,
        AVG(case when cbhrm.age_by_2020 > 42 then cbhrm.gap_total end) as above42,
        AVG(cbhrm.gap_total) as total
        FROM cbhrm
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        WHERE a_hcd_plan_ubis.deskripsi = '$ubisdesc' AND cbhrm.cc_group = '$ccgroup'
        GROUP BY cbhrm.cc_group, cbhrm.title ORDER BY cc_group
        ")->result();
        return $data;
    }

    public function getBarChartDisSkillUbis($ubisdesc, $ccgroup){
        $data = $this->db->query("
        SELECT cc_group, cbhrm.title, cbhrm.competencycode,
        COUNT(case when cbhrm.age_by_2020 < 32 then cbhrm.gap_total end) as under31,
        COUNT(case when cbhrm.age_by_2020 > 31 && cbhrm.age_by_2020 < 43 then cbhrm.gap_total end) as between31_42,
        COUNT(case when cbhrm.age_by_2020 > 42 then cbhrm.gap_total end) as above42,
        COUNT(cbhrm.gap_total) as total
        FROM cbhrm
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.deskripsi = cbhrm.divisi
        WHERE a_hcd_plan_ubis.deskripsi = '$ubisdesc' AND cbhrm.cc_group = '$ccgroup'
        GROUP BY cbhrm.cc_group, cbhrm.title, cbhrm.age_category ORDER BY cc_group
        ")->result();
        return $data;
    }
    
}
