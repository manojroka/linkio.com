<div id="lcm_filter">
    <div>
        <?php if(isset($filter)){ ?>
        <div class="lcm_filter_form">
            <div class="form-group">
                <label class="input-labels" for="search">Search</label>
                <input type="text" onkeyup="tactic_filter()" id="tactic_search_by_tactic_name" placeholder="Search On Tactic..">
            </div>
            <div>
                <label class="input-labels" for="search">Filter By</label>
                <div onclick="tactic_filter()">
                    <label for="one" class="cb-checkbox">
                        <input id="lcm_is_tool_included" type="checkbox" value="Tool_include">
                        Tools Included
                    </label>													
                </div>
            </div>
            <div>
                <label class="input-labels" for="search">Tool Type Used</label>
                <div onclick="tactic_filter()">
                    <label for="one" class="cb-checkbox">
                        <input id="lcm_tactic_filter_free" type="checkbox" value="Free">
                        Free
                    </label>													
                </div>
                <div onclick="tactic_filter()">
                    <label for="one" class="cb-checkbox">
                        <input id="lcm_tactic_filter_paid" type="checkbox" value="Paid">
                        Paid
                    </label>													
                </div>
                <?php $names = array(); foreach($data as $nam){ $names[] = $nam->name; } $names = array_unique($names); ?>
                <div>
                    <label>By Name :</label>
                    <select id="name" onchange="tactic_filter()">
                        <?php foreach ($names as $t_name){ ?>
                        <option value="<?=$t_name?>"><?=$t_name?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label>Sort By</label>
                    <select id="tactic_sort_by">
                        <option value="name_asc">A - Z</option>
                        <option value="name_desc">Z - A</option>
                        <option value="vote_asc">Rating Low to High</option>
                        <option value="vote_desc">Rating High to Low</option>
                    </select>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php if (isset($submit_form)) { 
            lcmf_popup_form_open($module_detail); 
        ?>
            <label>Tactic Name*</label>
            <input class="form-control limit_word" type="text" name="tactic_name" required>
            <label>Tactic Description* </label>
            <?php // wp_editor("", "tactic_description", array('textarea_rows' => '8')); ?>
            <?php lcm_editor('', 'tactic_description', array('textarea_rows' => '8')); ?>
            <?php _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*') ?>
            <?php _lcmf_name_email_company_input()?>
            <div>
                <label>Expand/Collapse Button Label</label>
                <div class="lcm_expand_collapse">
                    <div class="lcm_tool_expnd_btn">
                        <label>Expand</label>
                        <input class="form-control" id="tool_btn_expand" name="lcm_btn_expand" type="text" value="Show More...">
                    </div>
                    <div class="lcm_tool_colsp_btn">
                        <label>Collapse</label>
                        <input class="form-control" id="tool_btn_collapse" name="lcm_btn_collapse" type="text" value="Show Less">
                    </div>
                </div>
            </div>
            <label>Tools Included</label> 
            <div class="lcm_tools_inc">
                <input class="form-control" type="text" name="tool_included_name[]">
                <input class="form-control" type="url" name="tool_included_url[]">
                <input type="hidden" value="0" name="tool_included_df[]">
                <label class="cb-checkbox">
                    <input type="checkbox" name="tool_included_df[]">DF
                </label>
                <div class="lcm_anchor-btn lcm_anchor_small-btn lcm_tool_included_add_btn lcm-add-more-btn">Add New</div>
            </div>
            <div class="add_new_tactic"></div>
            <?php _lcm_dropdown_selector('tool_types', NULL, array('Free', 'Paid'), 'Types of Tools Used') ?>
            <?php if(isset($categories)){  if(count((array)$categories)>0){ ?>
            <label>Select Category</label> 
            <select class="form-control" multiple="" name="category[]" style="height: 70px !important;">
                <?php foreach ($categories as $category) { ?>
                <option value="<?=$category->id?>"><?=$category->name?></option>
                <?php } ?>
            </select>
            <?php } } ?>
        <?php  lcmf_popup_form_closed($module_detail); } ?>
    </div>
</div>

