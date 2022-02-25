<?php require_once 'includes/header.php' ?>
 
<body>
 <div class="container-sm">
 
<div class="container">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3 ">    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/car/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/car/2.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  </div>
    </div>
    <div class="col-6">
        <?php require_once 'views/desc.php' //вывод описания, если что?>
    </div>
  </div>
<hr><br>
<div class="container-sm">  
<div class="row">
<?php require_once 'views/showposts.php' //вывод постов?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require_once 'includes/footer.php' //фруктер ыы?>
</body>
 
