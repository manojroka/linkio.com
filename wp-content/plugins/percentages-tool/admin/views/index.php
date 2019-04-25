<style>
    .pta-tbl-head tr th{
        padding: 0.5rem;
        padding-top: 0.6rem;
        padding-bottom: 0.6rem;
        font-size: 0.75rem;
        text-align: -webkit-center;
        background: #adc0d0; 
        color: white
    }
    .pta-tbl-data tr td{
        text-align: center;
        padding: 0.5rem;
        padding-top: 0.6rem;
        padding-bottom: 0.6rem;
        font-size: 0.75rem;
    }
    
    .pta-sc-tooltip {
        position: relative !important;
        /*display: inline-block !important;*/
        opacity: 1;
        float: right;
        background: #efefef;
    padding: 3px;
    border-radius: 4px;
    }
    
    .pta-sc-tooltip .pta-sc-tooltiptext {
        visibility: hidden !important;
        width: 65% !important;
        background-color: #555 !important;
        color: #fff !important;
        text-align: center !important;
        border-radius: 6px !important;
        padding: 5px !important;
        position: absolute !important;
        z-index: 1 !important;
        bottom: 120% !important;
        /*left: 50% !important;*/
        margin-left: -80px !important;
        opacity: 0 !important;
        transition: opacity 0.3s !important;
    }
    
    .pta-sc-tooltip .pta-sc-tooltiptext::after {
        content: "" !important;
        position: absolute !important;
        top: 100% !important;
        left: 50% !important;
        margin-left: 35px !important;
        border-width: 8px !important;
        border-style: solid !important;
        border-color: #555 transparent transparent transparent;
    }
    
    .pta-sc-tooltip:hover .pta-sc-tooltiptext {
        visibility: visible !important;
        opacity: 1 !important;
    }
    
    .pta_copy_short_code{
        background: #458bc5;
        color: white;
        cursor: pointer;
        font-weight: 600;
        padding: 2px;
    }
    
</style>

<div style="margin-top: 2%">
    <div>
        <div>
            <p class="pta-sc-tooltip">Plugin Shortcode: 
                <span class="pta-sc-tooltiptext" id="pta-sc-spantooltip">Click Here copy to clipboard</span>
                <span class="pta_copy_short_code">[percentages_tool_analysis]</span>
            </p>
        </div>
        <h5>Saved Percentages :</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                <thead class="pta-tbl-head">
                    <tr>
                        <th rowspan="2" style="width: 25%;text-align: left;">Anchor Type</th>
                        <th colspan="2">Branded</th>
                        <th colspan="3">Keyword</th>
                        <th colspan="2">Hybrid</th>
                        <th colspan="3">Url</th>
                        <th colspan="3">Natural</th>
                    </tr>
                    <tr>
                        <th>Brand Name</th>
                        <th>Website.com</th>
                        <th>Exact</th>
                        <th>Part Only</th>
                        <th>Keyword + Word</th>
                        <th>Title Tag</th>
                        <th>Brand + Keyword</th>
                        <th>Naked</th>
                        <th>Without http</th>
                        <th>Homepage</th>
                        <th>Natural</th>
                        <th>No Text</th>
                        <th>Random</th>
                    </tr>
                </thead>
                <tbody class="pta-tbl-data">
                    <?php foreach ($category_sub_type as $value) { ?>
                        <tr>
                            <td style="text-align: left; padding: 0.2em;"><?= $value->anchor_type ?></td>
                            <td><?= $value->brand_name ?>%</td>
                            <td><?= $value->website_dot_com ?>%</td>
                            <td><?= $value->exact_keyword ?>%</td>
                            <td><?= $value->part_of_keyword ?>%</td>
                            <td><?= $value->keyword_plus_word ?>%</td>
                            <td><?= $value->title_tag ?>%</td>
                            <td><?= $value->brand_plus_keyword ?>%</td>
                            <td><?= $value->naked_url ?>%</td>
                            <td><?= $value->naked_url_no_http ?>%</td>
                            <td><?= $value->home_page_url ?>%</td>
                            <td><?= $value->just_natural ?>%</td>
                            <td><?= $value->no_text ?>%</td>
                            <td><?= $value->totally_random ?>%</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery('.pta_copy_short_code').click(function(){
    var pta_sc_cpy = document.createElement("input");
    pta_sc_cpy.setAttribute("id", "pta-sc-temp-id");
    pta_sc_cpy.setAttribute("value", "[percentages_tool_analysis]");
    document.body.appendChild(pta_sc_cpy);
    pta_sc_cpy.select();
    document.execCommand("copy");
    var copied_pta_sc_value = document.getElementById("pta-sc-temp-id").value;
    pta_sc_cpy.removeAttribute("id");
    document.body.removeChild(pta_sc_cpy);
    var sc_tooltip = document.getElementById("pta-sc-spantooltip");
    sc_tooltip.innerHTML = "Copied: " + copied_pta_sc_value;
});
</script>
