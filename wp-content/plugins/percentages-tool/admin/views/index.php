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
</style>
<div style="margin-top: 2%">
    <div>
        
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

