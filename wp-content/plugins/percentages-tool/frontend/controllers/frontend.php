<?php

/**
 * Description of frontend
 *
 * @author linkio.com
 */
class PTAfrontend {

    public $page;
    public $hasLayout;
    public $data;

    public function __construct() {
        $this->page = '';
        $this->hasLayout = TRUE;
        $this->data = [];
    }

    /**
     * controls the lifecycle of the controller
     * @param string $action
     */
    public function do_action($action = 'index', $as_html = NULL) {
        $this->$action();
        if ($this->hasLayout) {
            if ($as_html == 'return_as_html') {
                $this->render_as_html();
            } else {
                $this->renderHttpResponse();
            }
        }
    }

    private function renderHttpResponse() {

        if ($this->page != '') {
            $view = PTA_PLUGIN_FRONT_DIR . '/views/' . $this->page . '.php';
            if (file_exists($view)) {
                if (isset($this->data)) {
                    if ($this->data != NULL) {
                        extract($this->data);
                    }
                }
                require_once $view;
            } else {
                echo ' 404 not found. ' . $view;
            }
        }
    }

    private function render_as_html() {

        if ($this->page != '') {
            $view = PTA_PLUGIN_FRONT_DIR . '/views/' . $this->page . '.php';
            if (file_exists($view)) {
                if (isset($this->data)) {
                    if ($this->data != NULL) {
                        require_once PTA_PLUGIN_FRONT_DIR . '/views/include/' . 'utls' . '.php';
                        extract($this->data);
                        ob_start();
                        include_once($view);
                        $result = ob_get_clean();
                        $custom_data = array(
                            'msg' => $result,
                        );
                        $this->echo_pta_send_json_success($custom_data);
                    }
                }
            } else {
                $custom_data = array(
                    'msg' => ' 404 not found. ' . $view,
                );
                $this->echo_pta_send_json_error($custom_data);
            }
        }
    }

    function echo_pta_send_json_error($data_array) {
        echo wp_send_json_error($data_array);
    }

    function echo_pta_send_json_success($data_array) {
        echo wp_send_json_success($data_array);
    }

}
