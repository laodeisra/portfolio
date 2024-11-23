<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
   
    html, body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    /* body nav{
      padding:20px;
    } */

    .footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info nav-pills ">
  <div class="container-fluid ">
    <a class="navbar-brand" href="index.php?page=home"><i class="bi bi-person-workspace"></i> La ode isra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- konten -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?page=about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=kontak">kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=upload">upload</a>
          </li>
        </ul>
      </div>
  <!-- akhir konten -->
  </div>
</nav>


    <div class="container">
        <?php
            $direktori = "content";
            $page = @$_GET['page'];
            if($page != "")
                include("$direktori/$page.php");
            else
                include("$direktori/home.php");
        ?>
    </div>  

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p>&copy; 2024 MyBrand. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>