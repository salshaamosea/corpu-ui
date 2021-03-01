<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_contentRecomendation extends CI_Model 
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getTResult($competence, $objective){
        // $data = $this->db->query("SELECT * FROM t_result_new WHERE org_competence = '$competence' AND objective = '$objective'")->result();

        $data = $this->db->query("
        SELECT DISTINCT t_result_new.digital_skill, t_expert.subskill, t_result_new.subskill_desc, t_result_new.course_rec_1, t_result_new.course_description_1, t_result_new.course_src_1, t_result_new.course_url_1, t_result_new.course_rec_2, t_result_new.course_description_2, t_result_new.course_src_2, t_result_new.course_url_2, t_result_new.course_rec_3, t_result_new.course_description_3, t_result_new.course_src_3, t_result_new.course_url_3, t_expert.expert1, t_expert.expert2, t_expert.expert3
        FROM t_result_new
        JOIN t_expert ON t_result_new.subskill = t_expert.subskill
        WHERE t_result_new.org_competence = '$competence' AND t_result_new.objective = '$objective'
        ")->result();

        return $data;
    }

    public function getMatchedTraining($competence){
        $param = [0,1,2,3,4];
        $finalData = [];
        foreach($param as $par){
            $data = $this->db->query("
            SELECT t_course.topic_type, t_course.course_title, t_course.course_headline, t_course.course_level, t_course.course_url
            FROM t_course
            INNER JOIN t_topic
                ON t_topic.topic_type = t_course.topic_type
            INNER JOIN t_learning_focus
                ON t_learning_focus.id_org_competence = t_topic.id_org_competence
            WHERE t_learning_focus.org_competence = '$competence' and t_course.topic_type = $par 
            ORDER BY RAND() limit 10
            ")->result();
            array_push($finalData, $data);
        }

        return $finalData;
    }

    public function getTopic($competence){
        $param = [0,1,2,3,4];
        $desData = [];
        $intermediate = [];
        foreach($param as $par){
            $data = $this->db->query("
            SELECT t_topic_level.topic_type, t_topic.top5_keys, t_topic.description_summary as deskripsi_pelatihan, t_topic_level.description_summary_level as pelatihan_level_beginer
            FROM t_topic
            INNER JOIN t_learning_focus
	        ON t_learning_focus.id_org_competence = t_topic.id_org_competence
            INNER JOIN t_topic_level
	        ON t_topic.topic_type = t_topic_level.topic_type
            WHERE t_learning_focus.org_competence = '$competence' AND  t_topic_level.course_level = 'beginner' and t_topic_level.topic_type = $par
            group by t_topic_level.topic_type
            ")->result();

            array_push($desData, $data);

            $dataIntermediate = $this->db->query("
            SELECT t_topic_level.description_summary_level as Pelatihan_Level_Medium, t_topic_expert.expert
            FROM t_topic
            INNER JOIN t_learning_focus
                ON t_learning_focus.id_org_competence = t_topic.id_org_competence
            INNER JOIN t_topic_level
                ON t_topic.topic_type = t_topic_level.topic_type
            INNER JOIN t_topic_expert 
                ON t_topic.id_topic = t_topic_expert.id_topic
            WHERE t_learning_focus.org_competence = '$competence' AND  t_topic_level.course_level = 'Intermediate' and t_topic_level.topic_type = $par
            group by t_topic_level.topic_type
            ")->result();
            array_push($intermediate, $dataIntermediate);
        }
       
        $data = [
            'desData' => $desData,
            'intermediate' => $intermediate
        ];
        return $data;
    }
}

?>