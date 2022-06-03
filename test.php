<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssMusee.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>

<html>
    <body>
	<img src="avatar/8.png" height= 50 data-toggle="modal"
		data-target="#exampleModal">
	<div class="modal fade" id="exampleModal" tabindex="-1"
		role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<!-- w-100 class so that header
				div covers 100% width of parent div -->
					<h5 class="modal-title w-100"
						id="exampleModalLabel">
						Selectionner votre avatar
					</h5>
					<button type="button" class="close"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							×
						</span>
					</button>
				</div>
				<!--Modal body with image-->
				<div class="modal-body">
                <?php for ($i = 1; $i < 11; $i++){ ?>
                <div class="form-check">

                    <input class="form-check-input" type="radio" name="avatar" value="<?php echo"$i" ?>" id="flexRadioDefault<?php echo"$i" ?>" required>
                    <label class="form-check-label" for="flexRadioDefault<?php echo"$i" ?>">
                    <img src="avatar/<?php echo"$i" ?>.png" height="50">
                    </label>

                </div>
                <?php } ?>
				</div>
				<div class="modal-footer">
                <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">valider</button>
              </div>
				</div>
			</div>
		</div>
	</div>
	<script src=
"https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity=
"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity=
"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous">
	</script>
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity=
"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous">
	</script>
</body>
</html>
