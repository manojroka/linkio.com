<div class="pta-content">
    <div>
        <h5>Url Report :</h5>
        <div class="">
            <table class="pta-tbl">
                <thead class="pta-tbl-head">
                    <tr>
                        <th class="th-sn">S.N.</th>
                        <th class="th-page-url">Page Url</th>
                        <th class="th-page-type">Page Type</th>
                        <th class="th-page-subtype">Page Subtype</th>
                        <th class="th-target-i-per">Target Ideal Percentage</th>
                        <th class="th-calc-linkio">Your Current Percentage</th>
                        <th class="th-calc-linkio">Next 10 Anchor To Build</th>
                    </tr>
                </thead>
                <tbody class="pta-tbl-data">
                    <?php
                    $c = 0;
                    foreach ($url_lists as $url_value) {
                        $c++;
                        ?>
                        <tr>
                            <td class="td-sn">
                                <?= $c; ?>
                            </td>
                            <td class="td-page-url">
                                <a href="<?= $url_value['url'] ?>" target="_blank"><?= $url_value['url'] ?></a>
                            </td>
                            <td style="padding: 0.25em;">
                                <?= page_type_dropdown($url_value, $c); ?>
                            </td>
                            <td class="page-subtype-name-<?= $c; ?>">
                                <?= page_sub_type_dropdown($url_value['page_subtype'], $c); ?>
                            </td>
                            <td class="tip-hover target-ideal-percent-<?= $c; ?>" id="idl-prcnt-<?= $c; ?>" data-tip-sn="<?= $c; ?>">
                                <div class="pta_btn_icon"><i class="far fa-chart-bar"></i></div>                        
                                <?= _subpage_popup_table($c, $url_value['page_subtype']['detail']) ?>
                            </td>
                            <td class="pta-ext-lnk"><a href="https://app.linkio.com/users/sign_up" target="_blank">Calculate with Linkio</a></td>
                            <td class="pta-ext-lnk"><a href="https://app.linkio.com/users/sign_up" target="_blank">Calculate with Linkio</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= _load_js_pta_popup_hover()?>

