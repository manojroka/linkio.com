<?php

class LCMFQuote extends LCMfrontend{
    
    function detail() {
        $detail = $this->lcmf_model->get_quote_detail_by_id($this->id);
        if($detail['status'] == TRUE){
            if($detail['num_rows'] > 0){
                $module = $detail['result']->module;
                $this->data['detail'] = $detail['result'];
                $this->page = 'pages/'.$module.'/detail';
            }else{
                echo 'Sorry, no data found.';
            }
        } else {
            echo $detail['last_error'];
        }
    }
    
    function submit_item() {
        $save_result = $this->lcmf_model->save_item();
        if($save_result['status'] == TRUE){
            $lcm_refferer_url = $_SERVER['HTTP_REFERER'];
            if (strpos($lcm_refferer_url, 'newitemform') !== false) {
                $lcm_refferer_url = str_replace('?newitemform=quote', '', $lcm_refferer_url);
                $save_result['lcm_refferer_url'] = $lcm_refferer_url;
            } else {
                $save_result['lcm_refferer_url'] = $lcm_refferer_url;
            }
            echo json_encode($save_result);
        } else {
            if( isset($save_result['status']) && $save_result['status'] == FALSE){
                echo json_encode($save_result);
            } else {
                echo json_encode(array('status'=>FALSE));
            }
        }
        exit;
    }
}
