<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_ubpp extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

//     nilai Ubpp

    public function getDataNilaiUbpp($tahun){
        $data = $this->db->query("
        SELECT report_lim1_instruktur.academy,
        YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
        (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
         report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
         report_lim1_instruktur.n_culture) / 7     as avg_instruktur,
        (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
         report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
         report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
         report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
         report_lim1_penyelenggara.n_ces) / 10     as avg_penyelenggara,
        (
            SELECT (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                    report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                    report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) / 7
            FROM report_lim1_instruktur,
                 report_lim1_penyelenggara
            WHERE ((report_lim1_instruktur.academy IS NOT NULL) AND (report_lim1_penyelenggara.academy IS NOT NULL))
              AND ((report_lim1_instruktur.academy != 'KMCS') AND (report_lim1_penyelenggara.academy != 'KMCS'))
              AND report_lim1_instruktur.academy = report_lim1_penyelenggara.academy
              AND YEAR(report_lim1_instruktur.tanggal_mulai) = YEAR(report_lim1_penyelenggara.tanggal_mulai)
              AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                    report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                    report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
              AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                    report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                    report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                    report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                    report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
              AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
            GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
        )                                          as all_akademi_avg_instruktur,
        (
            SELECT (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                    report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                    report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                    report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                    report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) / 10
            FROM report_lim1_instruktur,
                 report_lim1_penyelenggara
            WHERE ((report_lim1_instruktur.academy IS NOT NULL) AND (report_lim1_penyelenggara.academy IS NOT NULL))
              AND ((report_lim1_instruktur.academy != 'KMCS') AND (report_lim1_penyelenggara.academy != 'KMCS'))
              AND report_lim1_instruktur.academy = report_lim1_penyelenggara.academy
              AND YEAR(report_lim1_instruktur.tanggal_mulai) = YEAR(report_lim1_penyelenggara.tanggal_mulai)
              AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
                    report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses +
                    report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0)
              AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                    report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                    report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                    report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                    report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
              AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun)
            GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
        )                                          as all_akademi_avg_penyelenggara
 FROM report_lim1_instruktur,
      report_lim1_penyelenggara
 WHERE ((report_lim1_instruktur.academy IS NOT NULL) AND (YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun) AND
        (report_lim1_penyelenggara.academy IS NOT NULL))
   AND (report_lim1_instruktur.academy != 'KMCS' OR report_lim1_penyelenggara.academy != 'KMCS')
   AND report_lim1_instruktur.academy = report_lim1_penyelenggara.academy
   AND YEAR(report_lim1_instruktur.tanggal_mulai) = YEAR(report_lim1_penyelenggara.tanggal_mulai)
   AND ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
         report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
         report_lim1_instruktur.n_culture) != 0)
   AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
         report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
         report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
         report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
         report_lim1_penyelenggara.n_ces) != 0)
 AND year(report_lim1_penyelenggara.tanggal_mulai) = $tahun
 GROUP BY report_lim1_instruktur.academy, YEAR(report_lim1_penyelenggara.tanggal_mulai)
        ")->result();
    return $data;
    }

    // End nilai Ubpp


//     total avg ubpp

public function getAvgTotal($tahun){
      $data = $this->db->query("
      SELECT
      YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
      (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom + report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture)/7 as avg_instruktur,
      (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces)/10 as avg_penyelenggara,
      (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom + report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture + report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces)/17 as avg_ubpp_total
FROM report_lim1_instruktur, report_lim1_penyelenggara
WHERE
      ((report_lim1_instruktur.academy IS NOT NULL) AND (report_lim1_penyelenggara.academy IS NOT NULL)) AND
      ((report_lim1_instruktur.academy!='KMCS') AND (report_lim1_penyelenggara.academy!='KMCS')) AND
  report_lim1_instruktur.academy=report_lim1_penyelenggara.academy AND
      YEAR(report_lim1_instruktur.tanggal_mulai)=YEAR(report_lim1_penyelenggara.tanggal_mulai) AND
      ((report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom + report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0) AND
      ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0) AND YEAR(report_lim1_instruktur.tanggal_mulai)=$tahun
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)

      ")->result();

      return $data;
}




}    