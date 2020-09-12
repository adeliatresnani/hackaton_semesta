<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SIGAP COVID-19</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #242421" fixed-top>
  <div class="container">
  <a class="navbar-brand" href="#">SIGAP COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Informasi</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid" style="background-color: #242421; color: white; height: 300px;">
  <div class="container">
    <h1 class="display-4" style="">Kawal informasi seputar COVID-19 <br> secara tepat dan akurat</h1>
  </div>
</div>

<div class="row" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kumpulan Cerita Penyintas COVID-19</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Benarkah OTG Menular?</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<br> <br>

<table class="table table-bordered table-striped display" id="myTab">
		<thead>
			<tr>
				<th>FID</th>
				<th>Provinsi</th>
                <th>Kasus Positif</th>
                <th>Kasus Sembuh</th>
                <th>Kasus Meninggal</th>
                <th></th>
			</tr>
		</thead>

		<tbody>
		<?php 
		foreach($displayArray as $s){
			echo "<tr>
			<td>$s[fid]</td>
			<td>$s[provinsi]</td>
			<td>$s[kasusPosi]</td>
            <td>$s[kasusSemb]</td>
            <td>$s[kasusMeni]</td>

            </tr>";
		}
		?>
		</tbody>
	</table>

    	<!-- Create the pagination -->
	<?php echo $this->pagination->create_links(); ?>

    <div class="card text-center">
  <div class="card-header">
  Laporkan
  </div>
  <div class="card-body">
    <h5 class="card-title">Ajukan laporan jika Anda melihat dan mengetahui bahwa orang di sekitar Anda berpotensi terpapar Virus COVID-19</h5>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Ajukan Laporan</button>
  </div>

</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>

<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Pengajuan Keluhan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'kasus/create' ?>">
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
      </div>
      <div class="form-group">
        <label>Nomor HP</label>
        <input type="text" name="no_hp" class="form-control">
      </div>
      <div class="form-group">
    <label>Keluhan</label>
    <textarea class="form-control" name="keluhan" rows="3"></textarea>
  </div>
      <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

     
      </div>
    </div>
  </div>
</div>

</html>
