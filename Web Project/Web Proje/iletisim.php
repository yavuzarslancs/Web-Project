<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ben Kimim?</title>
  </head>
  <body>
      <style>
          @media (min-width:1200px) {.container {max-width: 1200px;}}
      </style>
      <nav class="navbar sticky-top  navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Yavuz ARSLAN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="özgecmis.html">Özgeçmişim</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="takimimiz.html">Takımımız</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanlarim.html">İlgi alanlarım</a>
              </li>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
        </div>
      </nav>

  <table class="table container " id="form">
		<thead>
			<tr>
				<th scope="col">Bilgiler</th>
				<th scope="col">Kişi</th>   
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">İsim</th>
				<td><?php echo $_POST["isim"]?></td>
			</tr>
			<tr>
				<th scope="row">Soyisim</th>
				<td><?php echo $_POST["soyisim"]?></td>
			</tr>
			<tr>
				<th scope="row">Email</th>
				<td><?php echo $_POST["email"]?></td>
			</tr>
			<tr>
				<th scope="row">Cinsiyet</th>
				<td><?php echo $_POST["cinsiyet"]?></td>
			</tr>
			<tr>
				<th scope="row">Mesaj Gönderilme Sebebi</th>
				<td><?php echo $_POST["sebep"]?></td>
			</tr>
      <tr>
				<th scope="row">Bizi Nereden Buldunuz?</th>
				<td><?php $secimler=$_POST['secim']; foreach($secimler as $secim){echo" ".$secim;}?></td>
			</tr>
			<tr>
				<th scope="row">Mesaj</th>
				<td><?php echo $_POST["mesaj"]?></td>
			</tr>
		</tbody>
	</table>
</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>