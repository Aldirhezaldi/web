<div class="container mt-3">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="search-text" id="search-text"
					placeholder="Input Movie Title" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary ml-2" type="button" id="btn-search">Search <i
							class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<div class="row" id="movie-list">

	</div>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Movie Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>