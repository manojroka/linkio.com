<?php require_once('save-tool.php'); ?>
<h1>Edit tool</h1>
<br>

<?php
	global $wpdb;
	$toolData = $wpdb->get_row( "SELECT * FROM {$wpdb->prefix}seo_tools_list WHERE id = " . (int)$_REQUEST['id'] );
	// var_dump( $toolData ); // For debugging	
	
	$toolType = explode(',', $toolData->type);
?>

<form action="admin.php?page=tools_list_dashboard&action=edit&id=<?php echo $toolData->id; ?>&save" method="post" id="form-edit-tool">
	<table class="form-table">
		<tbody>
			<tr class="form-field form-required">
				<th scope="row"><label for="name">Name:</label></th>
				<td>
					<input type="text" name="name" id="name" value="<?php echo $toolData->name; ?>" style="width: 25em">
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="homepage_url">tool home page url:</label></th>
				<td>
					<input type="text" class="form-control" name="homepage_url" id="homepage_url" value="<?php echo $toolData->homepage_url; ?>" style="width: 25em">
					<label>
						<input type="checkbox" name="home_dofollow" value="1" <?php if($toolData->home_dofollow) echo 'checked="checked"'; ?> />
						<i>Dofollow</i>
					</label>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="name">Status:</label></th>
				<td>
					<?php
						$dropdownStatus = new tools_List_Select_List_Status($toolData->status);
						echo $dropdownStatus->get_select_html();
					?>
					<?php /* <select name="status" id="status">
						<option value="Suggested">Suggested</option>
						<option value="New" selected="selected">New</option>
						<option value="Published">Published</option>
						<option value="Hidden">Hidden</option>
						<option value="Spam">Spam</option>
					</select> */ ?>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label>Type:</label></th>
				<td>
					<input type="checkbox" name="type[]" id="type1" value="Link_Building" <?php if(in_array('Link_Building', $toolType)) echo 'checked'; ?>>
					<label for="type1"><span>Link Building</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type2" value="Technical_SEO" <?php if(in_array('Technical_SEO', $toolType)) echo 'checked'; ?>>
					<label for="type2"><span>Technical SEO</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type3" value="Rank_Tracking" <?php if(in_array('Rank_Tracking', $toolType)) echo 'checked'; ?>>
					<label for="type3"><span>Rank Tracking</span></label>
					<br>
				
					<input type="checkbox" name="type[]" id="type4" value="Content_Optimization" <?php if(in_array('Content_Optimization', $toolType)) echo 'checked'; ?>>
					<label for="type4"><span>Content Optimization</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type5" value="Keyword_Research" <?php if(in_array('Keyword_Research', $toolType)) echo 'checked'; ?>>
					<label for="type5"><span>Keyword Research</span></label>
					<br>
					<input type="checkbox" name="type[]" id="type6" value="Backlink_Analysis" <?php if(in_array('Backlink_Analysis', $toolType)) echo 'checked'; ?>>
					<label for="type6"><span>Backlink Analysis</span></label>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label>Price:</label></th>
				<td>
					<div class="radio">									
						<input type="radio" name="price" id="Free" value="Free" <?php if($toolData->price == 'Free') echo 'checked'; ?>>
						<label for="Free">Free</label>
					</div>
					<div class="radio">									  
						<input type="radio" name="price" id="Paid" value="Paid" <?php if($toolData->price == 'Paid') echo 'checked'; ?>>									
						<label for="Paid">Paid</label>
					</div>
					<div class="radio">									  
						<input type="radio" name="price" id="Freemium" value="Freemium" <?php if($toolData->price == 'Freemium') echo 'checked'; ?>>										
						<label for="Freemium">Freemium</label>
					</div>
				</td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label>Votes:</label></th>
				<td>
					<input type="text" name="votes" id="votes" value="<?php echo $toolData->votes; ?>" size="5" maxlength="5" style="width: 100px">
				</td>
			</tr>
			
			<tr><td colspan="2"><hr></td></tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="summary">Summary:</label></th>
				<td><textarea name="summary" id="summary" class="form-control" cols="40" rows="5" style="max-width: 600px;"><?php echo $toolData->summary; ?></textarea></td>
			</tr>
			<tr class="form-field form-required">
				<th scope="row"><label for="description">Description:</label></th>
				<td><textarea name="description" id="description" class="form-control" cols="40" rows="20" style="max-width: 1000px;"><?php echo $toolData->description; ?></textarea></td>
			</tr>
			<tr><td colspan="2"><hr></td></tr>

			<?php // Quick links ?>
			<tr class="form-field form-required">
				<th scope="row"><label>Additional links:</label></th>
				<td>
					<div class="row-link">
						<input type="text" name="link1_text" id="link1_text" style="width: 25em" placeholder="Link 1 text" value="<?php echo $toolData->link1_text; ?>">
						&nbsp;&nbsp;
						<input type="text" name="link1" id="link1" style="width: 25em" placeholder="Link 1" value="<?php echo $toolData->link1; ?>">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link1_dofollow" value="1" <?php if($toolData->link1_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
						</label>
					</div>

					<div class="row-link">
						<input type="text" name="link2_text" id="link2_text" style="width: 25em" placeholder="Link 2 text" value="<?php echo $toolData->link2_text; ?>">
						&nbsp;&nbsp;
						<input type="text" name="link2" id="link2" style="width: 25em" placeholder="Link 2" value="<?php echo $toolData->link2; ?>">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link2_dofollow" value="1" <?php if($toolData->link2_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
							<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
						</label>
					</div>

					<div class="row-link">
						<input type="text" name="link3_text" id="link3_text" style="width: 25em" placeholder="Link 3 text" value="<?php echo $toolData->link3_text; ?>">
						&nbsp;&nbsp;
						<input type="text" name="link3" id="link3" style="width: 25em" placeholder="Link 3" value="<?php echo $toolData->link3; ?>">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link3_dofollow" value="1" <?php if($toolData->link3_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
							<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
						</label>
					</div>

					<div class="row-link">
						<input type="text" name="link4_text" id="link4_text" style="width: 25em" placeholder="Link 4 text" value="<?php echo $toolData->link4_text; ?>">
						&nbsp;&nbsp;
						<input type="text" name="link4" id="link4" style="width: 25em" placeholder="Link 4" value="<?php echo $toolData->link4; ?>">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link4_dofollow" value="1" <?php if($toolData->link4_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
							<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
						</label>
					</div>

					<div class="row-link">
						<input type="text" name="link5_text" id="link5_text" style="width: 25em" placeholder="Link 5 text" value="<?php echo $toolData->link5_text; ?>">
						&nbsp;&nbsp;
						<input type="text" name="link5" id="link5" style="width: 25em" placeholder="Link 5" value="<?php echo $toolData->link5; ?>">
						&nbsp;&nbsp;
						<label>
							<input type="checkbox" name="link5_dofollow" value="1" <?php if($toolData->link5_dofollow) echo 'checked="checked"'; ?> />
							<i>Dofollow</i>
							<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
						</label>
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
						<input type="text" name="img1_text" id="img1_text" style="width: 25em" placeholder="Image 1 caption" value="<?php echo $toolData->img1_text; ?>">
						<input type="text" name="img1" id="img1" style="width: 50em" placeholder="Image 1" value="<?php echo $toolData->img1; ?>">
					</div>

					<div class="row-link">
						<input type="text" name="img2_text" id="img2_text" style="width: 25em" placeholder="Image 2 caption" value="<?php echo $toolData->img2_text; ?>">
						<input type="text" name="img2" id="img2" style="width: 50em" placeholder="Image 2" value="<?php echo $toolData->img2; ?>">
					</div>

					<div class="row-link">
						<input type="text" name="img3_text" id="img3_text" style="width: 25em" placeholder="Image 3 caption" value="<?php echo $toolData->img3_text; ?>">
						<input type="text" name="img3" id="img3" style="width: 50em" placeholder="Image 3" value="<?php echo $toolData->img3; ?>">
					</div>

					<div class="row-link">
						<input type="text" name="img4_text" id="img4_text" style="width: 25em" placeholder="Image 4 caption" value="<?php echo $toolData->img4_text; ?>">
						<input type="text" name="img4" id="img4" style="width: 50em" placeholder="Image 4" value="<?php echo $toolData->img4; ?>">
					</div>

					<div class="row-link">
						<input type="text" name="img5_text" id="img5_text" style="width: 25em" placeholder="Image 5 caption" value="<?php echo $toolData->img5_text; ?>">
						<input type="text" name="img5" id="img5" style="width: 50em" placeholder="Image 5" value="<?php echo $toolData->img5; ?>">
					</div>
				</td>
			</tr>

			<?php // Videos ?>
			<tr class="form-field form-required">
				<th scope="row"><label>Videos:</label></th>
				<td>
					<div class="row-link">
						<input type="text" name="video1" id="video1" style="width: 25em" placeholder="Video 1" value="<?php echo $toolData->video1; ?>">
					</div>

					<div class="row-link">
						<input type="text" name="video2" id="video2" style="width: 25em" placeholder="Video 2" value="<?php echo $toolData->video2; ?>">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video3" id="video3" style="width: 25em" placeholder="Video 3" value="<?php echo $toolData->video3; ?>">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video4" id="video4" style="width: 25em" placeholder="Video 4" value="<?php echo $toolData->video4; ?>">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>

					<div class="row-link">
						<input type="text" name="video5" id="video5" style="width: 25em" placeholder="Video 5" value="<?php echo $toolData->video5; ?>">
						&nbsp;&nbsp;
						<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
					</div>
					
					<br>
					<?php // <a href="#" class="dashicons dashicons-plus"></a> ?>
				</td>
			</tr>
		</tbody>
	</table>
	
	<button type="submit" class="btn btn-default" id="btn-edit-tool"><i class="fa fa-plus-circle"></i> Update tool</button>
</form>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#btn-edit-tool').on('click', function(e) {
		e.preventDefault();

		errorMsg = '';
		if( jQuery('#name').val() == '' ) errorMsg += 'Please enter valid tool name.\n';
		if( (jQuery('#homepage_url').val() == '') || (jQuery('#homepage_url').val() == 'http://') ) errorMsg += 'Please enter valid home page url.\n';
			
		if(errorMsg != '') {
			alert(errorMsg);
			return;
		}
		
		jQuery('#form-edit-tool').submit();
	});
});	
</script>