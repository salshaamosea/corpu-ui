<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_ubpp_instruktur extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    //     evaluasi sarana

public function getUbppInstrukturNCs($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
    YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
    AVG(report_lim1_instruktur.n_cs)           AS n_cs,

    (
        SELECT AVG(report_lim1_instruktur.n_cs)
        FROM report_lim1_instruktur,
             m_coe,
             a_hcd_plan_ubis
                 INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE report_lim1_instruktur.academy IS NOT NULL
          AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
          AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
          AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
        GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
    )                                          AS seluruh_akademi_avg_n_cs

FROM report_lim1_instruktur,
  m_coe,
  a_hcd_plan_ubis
      INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
     report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
     report_lim1_instruktur.n_culture) != 0)
AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();

    return $data;
}

public function getUbppInstrukturNMetode($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
       YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
       AVG(report_lim1_instruktur.n_metode)       AS n_metode,

       (
           SELECT AVG(report_lim1_instruktur.n_metode)
           FROM report_lim1_instruktur,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_instruktur.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                   report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                   report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
             AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
       )                                          AS seluruh_akademi_avg_n_metode

FROM report_lim1_instruktur,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
        report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
        report_lim1_instruktur.n_culture) != 0)
  AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();
    return $data;
}

public function getInstrukturNKom($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
    YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
    AVG(report_lim1_instruktur.n_kom)          AS n_kom,
    (
        SELECT AVG(report_lim1_instruktur.n_kom)
        FROM report_lim1_instruktur,
             m_coe,
             a_hcd_plan_ubis
                 INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE report_lim1_instruktur.academy IS NOT NULL
          AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
          AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
          AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
        GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
    )                                          AS seluruh_akademi_avg_n_kom
FROM report_lim1_instruktur,
  m_coe,
  a_hcd_plan_ubis
      INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
     report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
     report_lim1_instruktur.n_culture) != 0)
AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();

    return $data;
}

public function  getInstrukturNTimeMan($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
       YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
       AVG(report_lim1_instruktur.n_time_man)     AS n_time_man,

       (
           SELECT AVG(report_lim1_instruktur.n_time_man)
           FROM report_lim1_instruktur,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_instruktur.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                   report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                   report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
             AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
       )                                          AS seluruh_akademi_avg_n_time_man
FROM report_lim1_instruktur,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
        report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
        report_lim1_instruktur.n_culture) != 0)
  AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();
    return $data;
}

public function getInstrukturNProses($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
    YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
    AVG(report_lim1_instruktur.n_proses)       AS n_proses,
    (
        SELECT AVG(report_lim1_instruktur.n_proses)
        FROM report_lim1_instruktur,
             m_coe,
             a_hcd_plan_ubis
                 INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE report_lim1_instruktur.academy IS NOT NULL
          AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
          AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
          AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
        GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
    )                                          AS seluruh_akademi_avg_n_proses
FROM report_lim1_instruktur,
  m_coe,
  a_hcd_plan_ubis
      INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
     report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
     report_lim1_instruktur.n_culture) != 0)
AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();
    return $data;
}

public function getInstrukturNPemahaman($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
       YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
       AVG(report_lim1_instruktur.n_pemahaman)    AS n_pemahaman,

       (
           SELECT AVG(report_lim1_instruktur.n_pemahaman)
           FROM report_lim1_instruktur,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_instruktur.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                   report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                   report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
             AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
       )                                          AS seluruh_akademi_avg_n_pemahaman
FROM report_lim1_instruktur,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
        report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
        report_lim1_instruktur.n_culture) != 0)
  AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();
    return $data;
}

public function getInstrukturNCulture($tahun){
    $data = $this->db->query("
    SELECT t_namingconvention.deskripsi               as academy,
       YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
       AVG(report_lim1_instruktur.n_culture)      AS n_culture,

       (
           SELECT AVG(report_lim1_instruktur.n_culture)
           FROM report_lim1_instruktur,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_instruktur.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                   report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                   report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
             AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_instruktur.tanggal_mulai)
       )                                          AS seluruh_akademi_avg_n_culture
FROM report_lim1_instruktur,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_instruktur.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
        report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
        report_lim1_instruktur.n_culture) != 0)
  AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
GROUP BY t_namingconvention.deskripsi, YEAR(report_lim1_instruktur.tanggal_mulai)
    ")->result();
    return $data;
}

// end ubpp_sarana

}