
<div class="card">
			<div class="card-header">
				<h4 class="card-title">Vos dernières notes</h4>
			</div>
			<div class="card-content collapse show">
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Matière</th>
								<th scope="col">Note</th>
								<th scope="col">Professeur</th>
								<th scope="col">Commentaire</th>
							</tr>
						</thead>
						<tbody>
                            <?php studentDisplayNotes($user_id); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>