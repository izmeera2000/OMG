<?php
								$user_id = $_SESSION['user_details']['id'];
								$query = "SELECT * FROM user_cart WHERE  user_id='$user_id'";
								$results = mysqli_query($db, $query);
								if (mysqli_num_rows($results) > 0) {

									?>
									<div class="table-responsive">
										<table class="table cart w-auto">
											<thead>
												<tr>
													<th scope="col" id="testput"></th>
													<th scope="col">Product Options</th>
													<th scope="col">Price</th>

												</tr>
											</thead>
											<tbody>

												<?php

												while ($user_cart = mysqli_fetch_assoc($results)) {
													?>
													<tr>
														<th scope="row" class="text-nowrap w-auto"><?php

														$product_id = $user_cart['product_id'];
														$query2 = "SELECT product.*,image.image_url FROM `product` INNER JOIN( SELECT * FROM product_image WHERE image_order = '1' ) AS image ON product.id = image.product_id WHERE product.id='$product_id';";

														$results2 = mysqli_query($db, $query2);
														if (mysqli_num_rows($results2) > 0) {

															while ($product = mysqli_fetch_assoc($results2)) {
																?>
																	<div class="image-box"><img class="w-100"
																			src="<?php echo $site_url ?>assets/img/product/<?php echo $product['id'] ?>/<?php echo $product['image_url'] ?>">
																	</div>
																</th>
																<td class="align-middle">
																	<h5><?php echo $product['name'] ?></h5>

																	<?php

																	$array_select = substr($user_cart['product_option_selected_id'], 1, strlen($user_cart['product_option_selected_id']) - 2);


																	$query3 = "SELECT * FROM `product_option` WHERE id IN (" . $array_select . ")";
																	$results3 = mysqli_query($db, $query3);
																	if (mysqli_num_rows($results3) > 0) {
																		while ($product3 = mysqli_fetch_assoc($results3)) {
																			?>

																			<p><?php echo $product3['value'] ?></p>
																			<?php

																		}
																	}

															}
														}

														?>
														</td>
														<td class="align-middle">
															<h5 class="mx-2">
																RM<?php echo number_format($user_cart['totalprice'], 2) ?></h5>
														</td>

														<td class="align-middle"><button type="button" class="btn btn-primary"
																onclick="deletecart(<?php echo $user_cart['id'] ?>)"
																data-id="<?php echo $user_cart['id'] ?>">
																<i class="bi bi-trash"></i>
															</button></td>
													</tr>
													<?php
												}

												?>
											</tbody>
										</table>
									<?php
								}
								else{
									echo "sda";
								}

								?>
								</div>