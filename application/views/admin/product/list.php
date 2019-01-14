<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->Name ?>
										</td>
										<td>
											<?php echo $product->Price ?>
										</td>
											
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						
