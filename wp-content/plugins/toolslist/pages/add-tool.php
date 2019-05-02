<?php require_once('save-tool.php'); ?>
<h1>Add tool</h1>
<br>
<form action="admin.php?page=tools_list_dashboard&action=add&save" method="post" id="form-add-new-tool">
	<table class="form-table">
		<tbody>
			<tr class="form-field form-required">
				<th scope="row"><label for="name">Name:</label></th>
				<td><input type="text" name="name" id="name" style="width: 25em"></td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="price">tool home page url:</label></th>
				<td>
					<input type="text" class="form-control" name="homepage_url" id="homepage_url" value="http://" style="width: 25em">
					<label>
						<input type="checkbox" name="home_dofollow" value="1" />
						<i>Dofollow</i>
					</label>
				</td>
			</tr>

			<tr class="form-field form-required">
				<th scope="row"><label for="name">Status:</label></th>
				<td>
					<?php
						$dropdownStatus = new tools_List_Select_List_Status('New');
						echo $dropdownStatus->get_select_html();
					?>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label>Type:</label></th>
				<td>
					<input type="checkbox" name="type[]" id="type1" value="Link_Building">
					<label for="type1"><span>Link Building</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type2" value="Technical_SEO">
					<label for="type2"><span>Technical SEO</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type3" value="Rank_Tracking">
					<label for="type3"><span>Rank Tracking</span></label>
					<br>
				
					<input type="checkbox" name="type[]" id="type4" value="Content_Optimization">
					<label for="type4"><span>Content Optimization</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type5" value="Keyword_Research">
					<label for="type5"><span>Keyword Research</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type6" value="Backlink_Analysis">
					<label for="type6"><span>Backlink Analysis</span></label>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="price">Price:</label></th>
				<td>
					<div class="radio">									
						<input type="radio" name="price" id="Free" value="Free" checked="checked">
						<label for="Free">Free</label>
					</div>
					<div class="radio">									  
						<input type="radio" name="price" id="Paid" value="Paid">									
						<label for="Paid">Paid</label>
					</div>
					<div class="radio">									  
						<input type="radio" name="price" id="Freemium" value="Freemium">										
						<label for="Freemium">Freemium</label>
					</div>
				</td>
			</tr>
			
			<tr><td colspan="2"><hr></td></tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="summary">Summary:</label></th>
				<td><textarea name="summary" id="summary" class="form-control" cols="40" rows="5" style="max-width: 600px;"></textarea></td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="description">Description:</label></th>
				<td><textarea name="description" id="description" class="form-control" cols="40" rows="20" style="max-width: 1000px;"></textarea></td>
			</tr>
			<tr><td colspan="2"><hr></td></tr>

			<?php // Quick links ?>
			<tr class="form-field form-required">
				<th scope="row"><label>Additional links:</label></th>
				<td>
					<div class="row-link">
						<input type="text" name="link1_text" id="link1_text" style="width: 25em" placeholder="Link 1 text">
						&nbsp;&nbsp;
						<input type="text" name="link1" id="link1" style="width: 25em" placeholder="Link 1">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link1_dofollow" value="1" <?php if($toolData->link1_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
					</div>

					<div class="row-link">
						<input type="text" name="link2_text" id="link2_text" style="width: 25em" placeholder="Link 2 text">
						&nbsp;&nbsp;
						<input type="text" name="link2" id="link2" style="width: 25em" placeholder="Link 2">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link2_dofollow" value="1" <?php if($toolData->link2_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="link3_text" id="link3_text" style="width: 25em" placeholder="Link 3 text">
						&nbsp;&nbsp;
						<input type="text" name="link3" id="link3" style="width: 25em" placeholder="Link 3">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link3_dofollow" value="1" <?php if($toolData->link3_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="link4_text" id="link4_text" style="width: 25em" placeholder="Link 4 text">
						&nbsp;&nbsp;
						<input type="text" name="link4" id="link4" style="width: 25em" placeholder="Link 4">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link4_dofollow" value="1" <?php if($toolData->link4_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="link5_text" id="link5_text" style="width: 25em" placeholder="Link 5 text">
						&nbsp;&nbsp;
						<input type="text" name="link5" id="link5" style="width: 25em" placeholder="Link 5">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link5_dofollow" value="1" <?php if($toolData->link5_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>
					
					<br>
					<?php // <a href="#" class="dashicons dashicons-plus"></a> ?>
				</td>
			</tr>
			
			<?php // Images ?>
			<tr class="form-field form-required">
				<th scope="row"><label>Images:</label></th>
				<td>
					<div class="row-link">
						<input type="text" name="img1_text" id="img1_text" style="width: 25em" placeholder="Image 1 caption">
						<input type="text" name="img1" id="img1" style="width: 25em" placeholder="Image 1">
					</div>

					<div class="row-link">
						<input type="text" name="img2_text" id="img2_text" style="width: 25em" placeholder="Image 2 caption">
						<input type="text" name="img2" id="img2" style="width: 25em" placeholder="Image 2">
					</div>

					<div class="row-link">
						<input type="text" name="img3_text" id="img3_text" style="width: 25em" placeholder="Image 3 caption">
						<input type="text" name="img3" id="img3" style="width: 25em" placeholder="Image 3">
					</div>

					<div class="row-link">
						<input type="text" name="img4_text" id="img4_text" style="width: 25em" placeholder="Image 4 caption">
						<input type="text" name="img4" id="img4" style="width: 25em" placeholder="Image 4">
					</div>

					<div class="row-link">
						<input type="text" name="img5_text" id="img5_text" style="width: 25em" placeholder="Image 5 caption">
						<input type="text" name="img5" id="img5" style="width: 25em" placeholder="Image 5">
					</div>
				</td>
			</tr>

			<?php // Videos ?>
			<tr class="form-field form-required">
				<th scope="row"><label>Videos:</label></th>
				<td>
					<div class="row-link">
						<input type="text" name="video1" id="video1" style="width: 25em" placeholder="Video 1">
					</div>

					<div class="row-link">
						<input type="text" name="video2" id="video2" style="width: 25em" placeholder="Video 2">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video3" id="video3" style="width: 25em" placeholder="Video 3">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video4" id="video4" style="width: 25em" placeholder="Video 4">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video5" id="video5" style="width: 25em" placeholder="Video 5">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>
					
					<br>
					<?php // <a href="#" class="dashicons dashicons-plus"></a> ?>
				</td>
			</tr>
		</tbody>
	</table>
	
	<button type="submit" class="btn btn-default" id="btn-add-new-tool"><i class="fa fa-plus-circle"></i> Add tool</button>
</form>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#btn-add-new-tool').on('click', function(e) {
		e.preventDefault();

		errorMsg = '';
		if( jQuery('#name').val() == '' ) errorMsg += 'Please enter valid tool name.\n';
		if( (jQuery('#homepage_url').val() == '') || (jQuery('#homepage_url').val() == 'http://') ) errorMsg += 'Please enter valid home page url.\n';
			
		if(errorMsg != '') {
			alert(errorMsg);
			return;
		}
		
		jQuery('#form-add-new-tool').submit();
	});
});	
</script>