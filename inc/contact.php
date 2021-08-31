


<!-- The Modal -->
<div class="modal fade" id="message">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header bg-info">
				<h4 class="modal-title">Fill out the field to contact us</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="save_message.php" method="post">
					<div class="row ">
						<div class="col-md-12">
							<p class="mb-0 lead ">Name</p>
							<input type="text" name="name" class="form-control form-control-lg rounded-0" required >
						</div>
						<div class="col-md-12">
							<p class="mb-0 lead">Phone</p>
							<input type="text" name="phone" class="form-control form-control-lg rounded-0" required >
						</div>
					</div>
					<div class="row p-3 mt-4">
						<textarea class="form-control p-2" name="message" rows="8" required ></textarea>
					</div>
					<center>
						<button name="sent_message" class="mb-4 btn btn-lg mt-4 btn-primary shadow-lg" style="border-radius: 20px">Sent Message</button><br>
						<a href="#" class="text-danger" data-dismiss="modal">Cancel</a>
					</center>
				</form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				&copy Right by Samsong World
			</div>

		</div>
	</div>
</div>