<?php

/**
 * Description of LCM_Notices
 *
 * @author linkio.com
 */
class LCM_Notices {
           
    function set_flash($status = null, $msg=null) {
        $array_flash_session = array(
            'status'=>$status,
            'notice_message'=>$msg
        );
        $_SESSION['flash_notice']=$array_flash_session;
    }
    
    function get_flash() {
        
        if (!headers_sent()) {
            if(isset($_SESSION['flash_notice']) && isset($_GET['msg']) ){
                $flash_data = $_SESSION['flash_notice'];
                $flash_status = $flash_data['status'];
                $flash_message = $flash_data['notice_message'];

                echo "<div class='notice notice-{$flash_status} is-dismissible'>
                        <p>{$flash_message}</p>
                    </div>";
                unset($_SESSION['flash_notice']);
            }
        } else {
            if(isset($_SESSION['flash_notice']) && isset($_GET['msg']) ){
                $flash_data = $_SESSION['flash_notice'];
                $flash_status = $flash_data['status'];
                $flash_message = $flash_data['notice_message'];

                echo "<div class='notice notice-{$flash_status} is-dismissible'>
                        <p>{$flash_message}</p>
                    </div>";
                unset($_SESSION['flash_notice']);
            }
        }
        
    }   
}
