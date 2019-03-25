<?php
/**
 * Description of LCMFHome
 */
class LCMFHome extends LCMfrontend{
    
    function index() {
        $module_detail = $this->lcmf_model->get_template_name_by_id($this->id);
        //---check template with module name-------
        if($module_detail['status'] == TRUE){
            if($module_detail['num_rows'] > 0){
                $module = $module_detail['result']->module;
                $this->data['module_detail'] = $module_detail['result'];
                //------ get all template list ---------------
                $list_templates = $this->lcmf_model->get_all_templates_by_id($module, $this->id, $this->limit, NULL);
                if($list_templates['status'] == TRUE){
                    if($list_templates['num_rows'] > 0){
                        $data_list = $list_templates['result'];
                        if($this->filter != NULL){
                            $this->data['filter'] = TRUE;
                        }
                        if($this->submit_form != NULL){
                            $this->data['submit_form'] = TRUE;
                        }
                        if($module == 'tactic'){
                            $this->data['categories'] = $list_templates['categories'];
                        }
                        if($module == 'tool'){
                            $this->data['types'] = $list_templates['types'];
                            $this->data['_filter_by'] = $this->_filter_by($data_list);
                        }
                        $this->data['data'] = $data_list;
                        $this->page = 'pages/'.$module.'/list';
                    } else {
                        
                        if($this->submit_form != NULL){
                            $this->data['submit_form'] = TRUE;
                            $this->page = 'pages/'.$module.'/_filter_form';
                        }
                        echo 'No template lists found.';
                    }
                } else {
                    echo $list_templates['last_error'];
                }
            }else{
                echo 'No data found.';
            }
        } else {
            echo $module_detail['last_error'];
        }
    }
    
    function filter() {
        $module_detail = $this->lcmf_model->get_template_name_by_id($this->id);
        if($module_detail['status'] == TRUE){
            if($module_detail['num_rows'] > 0){
                $module = $module_detail['result']->module;
                $this->page = 'pages/'.$module.'/_filter_form';
            }else{
                echo 'No data found.';
            }
        } else {
            echo $module_detail['last_error'];
        }
    }
    
    function update_vote_count() {
        $vote_count = $_POST['vote_count'];
        unset($_POST['vote_count']);
        if (($_POST['item_id'] < 1) || ($_POST['template_id'] < 1) || ($_POST['module_id'] < 1)) {
            $custom_data = array(
                'vote_count'=>$vote_count,
                'msg'=>"Error:Invalid ID's",
            );
            return wp_send_json_error($custom_data);
        }
        //------- check already voted or not -----------
        $is_voted = $this->lcmf_model->vote_status_check();
        if($is_voted['status'] == TRUE){
            $vote_count = $is_voted['result']->vote_count;
            if($is_voted['result']->voted > 0){
                $custom_data = array(
                    'vote_count'=>$vote_count,
                    'msg'=>'You have already voted for this item',
                );
                return wp_send_json_error($custom_data);
            }
        }
        //---------- update vote count -----------------
        $result = $this->lcmf_model->update_vote();
        if($result['status'] == TRUE){
            $custom_data = array(
                'vote_count'=>$vote_count+1,
                'msg'=>'Thanks for Voting',
            );
            return wp_send_json_success($custom_data);
        } else {
            $custom_data = array(
                'vote_count'=>$vote_count,
                'msg'=>'Error:Sorry!! your vote is not updated',
            );
            return wp_send_json_error($custom_data);
        }
    }
    
    
    function _filter_by($tool_list_f) {
        $f_arr = [];
        foreach ($tool_list_f as $key => $tool_d) {
            $tool_r[$key]->id = $tool_d->id;
            $tool_r[$key]->tool_name = $tool_d->tool_name;
            $tool_r[$key]->type = $tool_d->type;
            $tool_r[$key]->price = $tool_d->price;
            $tool_r[$key]->vote_count = $tool_d->vote_count;
            $f_arr[] = $tool_r[$key];
        }
        $f_arr = json_encode($f_arr);
        return $f_arr;
    }
    
}
