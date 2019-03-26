<section class="container">
	<div id="modal-add-new-tool" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 columns">
							<div class="modal-title">
								<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true"><i class="fa fa-times"></i></span></button>
								<h3>Add new tool</h3>
								
								<h4>Want to recommend a tool not on the list ?</h4>
								<p>
									Make sure to fill in all the fields and be thorough and informational (not promotional!)<br>
									Your entry will be reviewed before going live.
								</p>
							</div>

							<form id="form-add-new-tool">
								<div class="form-group">															
									<label class="input-labels" for="name">Name:</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="">
									
									<label class="input-labels" for="summary">Summary:</label>
									<textarea name="summary" id="summary" class="form-control" rows="5"></textarea>
									
									<label class="input-labels" for="description">Description:</label>
									<textarea name="description" id="description" class="form-control" rows="10"></textarea>

									<label class="input-labels" for="modal-type">Type:</label>						
									<div id="modal-type">
										<div class="checkbox">								
											<input name="type[]" id="type1" type="checkbox" checked="checked" value="Link_Building" />
											<label for="type1"><span>Link Building</span></label>														
										</div>
										<div class="checkbox">								
											<input name="type[]" id="type2" type="checkbox" value="Technical_SEO" />
											<label for="type2"><span>Technical SEO</span></label>
										</div>
										<div class="checkbox">
											<input name="type[]" id="type3" type="checkbox" value="Rank_Tracking" />
											<label for="type3"><span>Rank Tracking</span></label>															
										</div>
										<div class="checkbox">						
											<input name="type[]" id="type4" type="checkbox" value="Content_Optimization" />
											<label for="type4"><span>Content Optimization</span></label>
										</div>
										<div class="checkbox">						
											<input name="type[]" id="type5" type="checkbox" value="Keyword_Research" />
											<label for="type5"><span>Keyword Research</span></label>
										</div>
										<div class="checkbox">							
											<input name="type[]" id="type6" type="checkbox" value="Backlink_Analysis" />
											<label for="type6"><span>Backlink Analysis</span></label>
										</div>
									</div>
									
									<label class="input-labels">Price:</label>
									<div id="modal-price">
										<div class="radio">									
											<input type="radio" name="price" id="Free" value="Free" checked>
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
									</div>
									
									<label for="url">Tool home page url:</label>
									<input type="text" class="form-control" name="homepage_url" id="homepage_url" value="http://">

									<hr>
			
									<?php // Quick links ?>
									<tr class="form-field form-required">
										<th scope="row"><label>Additional links:</label></th>
										<td>
											<div class="row-link">
												<input type="text" name="link1_text" id="link1_text" style="width: 20em" placeholder="Link 1 text">
												&nbsp;&nbsp;
												<input type="text" name="link1" id="link1" style="width: 20em" placeholder="Link 1">
											</div>

											<div class="row-link">
												<input type="text" name="link2_text" id="link2_text" style="width: 20em" placeholder="Link 2 text">
												&nbsp;&nbsp;
												<input type="text" name="link2" id="link2" style="width: 20em" placeholder="Link 2">
											</div>

											<div class="row-link">
												<input type="text" name="link3_text" id="link3_text" style="width: 20em" placeholder="Link 3 text">
												&nbsp;&nbsp;
												<input type="text" name="link3" id="link3" style="width: 20em" placeholder="Link 3">
											</div>

											<div class="row-link">
												<input type="text" name="link4_text" id="link4_text" style="width: 20em" placeholder="Link 4 text">
												&nbsp;&nbsp;
												<input type="text" name="link4" id="link4" style="width: 20em" placeholder="Link 4">
											</div>

											<div class="row-link">
												<input type="text" name="link5_text" id="link5_text" style="width: 20em" placeholder="Link 5 text">
												&nbsp;&nbsp;
												<input type="text" name="link5" id="link5" style="width: 20em" placeholder="Link 5">
											</div>
										</td>
									</tr>

									<hr>

									<?php // Images ?>
									<tr class="form-field form-required">
										<th scope="row"><label>Images:</label></th>
										<td>
											<div class="row-link">
												<input type="text" name="img1_text" id="img1_text" style="width: 20em" placeholder="Image 1 caption">
												&nbsp;&nbsp;
												<input type="text" name="img1" id="img1" style="width: 20em" placeholder="Image 1">
											</div>

											<div class="row-link">
												<input type="text" name="img2_text" id="img2_text" style="width: 20em" placeholder="Image 2 caption">
												&nbsp;&nbsp;
												<input type="text" name="img2" id="img2" style="width: 20em" placeholder="Image 2">
											</div>

											<div class="row-link">
												<input type="text" name="img3_text" id="img3_text" style="width: 20em" placeholder="Image 3 caption">
												&nbsp;&nbsp;
												<input type="text" name="img3" id="img3" style="width: 20em" placeholder="Image 3">
											</div>

											<div class="row-link">
												<input type="text" name="img4_text" id="img4_text" style="width: 20em" placeholder="Image 4 caption">
												&nbsp;&nbsp;
												<input type="text" name="img4" id="img4" style="width: 20em" placeholder="Image 4">
											</div>

											<div class="row-link">
												<input type="text" name="img5_text" id="img5_text" style="width: 20em" placeholder="Image 5 caption">
												&nbsp;&nbsp;
												<input type="text" name="img5" id="img5" style="width: 20em" placeholder="Image 5">
											</div>
										</td>
									</tr>

									<hr>

									<?php // Videos ?>
									<tr class="form-field form-required">
										<th scope="row"><label>Videos:</label></th>
										<td>
											<div class="row-link">
												<input type="text" name="video1" id="video1" style="width: 20em" placeholder="Video 1">
											</div>

											<div class="row-link">
												<input type="text" name="video2" id="video2" style="width: 20em" placeholder="Video 2">
												&nbsp;&nbsp;
												<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
											</div>

											<div class="row-link">
												<input type="text" name="video3" id="video3" style="width: 20em" placeholder="Video 3">
												&nbsp;&nbsp;
												<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
											</div>

											<div class="row-link">
												<input type="text" name="video4" id="video4" style="width: 20em" placeholder="Video 4">
												&nbsp;&nbsp;
												<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
											</div>

											<div class="row-link">
												<input type="text" name="video5" id="video5" style="width: 20em" placeholder="Video 5">
												&nbsp;&nbsp;
												<?php // <a href="#" class="dashicons dashicons-minus"></a> ?>
											</div>
											
											<br>
											<?php // <a href="#" class="dashicons dashicons-plus"></a> ?>
										</td>
									</tr>
									
									<div id="add-btn">
										<button id="form-submit" type="submit" class="btn btn-default"><i class="fa fa-plus-circle"></i> Submit tool</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Modal Get Free Starter Pack -->