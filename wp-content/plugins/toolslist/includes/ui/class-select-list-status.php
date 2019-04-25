<?php
// @link https://stackoverflow.com/questions/13221084/how-to-create-a-select-list-using-php-oop

class Tools_List_Select_List_Status {
    protected $types;
    
	protected $select_list;
	protected $select_options = array();
    
	protected $select_html;

    public function __construct($selected_type = '') {
		$this->types = array('Suggested', 'New', 'Published', 'Hidden', 'Spam');
		
		foreach($this->types as $type) {
			$isSelected = ($selected_type == $type) ? true : false;
			$value = $type;

			$this->select_options[] = new Tools_List_Select_List_Option($type, $value, $isSelected);
		}
		
		
		$this->select_list = new Tools_List_Select_List($name_id = 'status', $this->select_options);
		$this->select_html = $this->select_list->render();
    }
	
	public function get_select_html() {
		return $this->select_html;
	}
}