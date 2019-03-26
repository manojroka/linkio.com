
<div style="margin-top: 3%">
    <form class="pta-form-control" method="post" id="submit_pta_form_data">
        <input type="hidden" id="pta_home_url" value="<?= PTA_HOME_URL ?>">
        <div class="form-group">
            <label class="title">Homepage Url:</label>
            <div>
                <input type="url" class="form-control" name="home_page_url" placeholder="Homepage Url">
            </div>
        </div>
        <br>

        <div class="form-group"> 
            <div>
                <label class="title">Website Type:</label>
                <div class="web-type-btn">
                    <label><input type="radio" checked="" name="website_type" value="national"> National</label>
                    <label><input type="radio" name="website_type" value="local"> Local Business</label>
                    <label><input type="radio" name="website_type" value="ecommerce"> E-Commerce</label>
                    <label><input type="radio" name="website_type" value="software"> Software</label>
                </div>
            </div>
        </div>
        <br>

        <div> 
            <div>
                <label class="title">Domain Name:</label>
                <div class="domain-type-btn">
                    <label><input type="radio" name="domain_type" value="emd" checked> Exact Match Domain</label>
                    <!--<br>-->
                    <label><input type="radio" name="domain_type" value="nmd"> No Match Domain</label>
                    <!--<br>-->
                    <label><input type="radio" name="domain_type" value="pmd"> Partial Match Domain</label>
                </div>
            </div>
        </div>
        <br>
        <div> 
            <div>
                <button type="submit" id="pta_item_submit_btn" class="btn">Generate</button>
            </div>
        </div>
    </form>
    
    <div class="add_table"></div>
    
</div>
