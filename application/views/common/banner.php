<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <?php
          foreach ($banner as $key => $value) {
          $active = ($key == 0) ? 'active' : '';
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
        }
      ?> 
  </ol>
  <div class="carousel-inner">
    <?php 
      foreach ($banner as $key => $value) {
        $active = ($key == 0) ? 'active' : '';
        echo '<div class="carousel-item ' . $active . '">
              <img class="d-block w-100" src="' . base_url().'upload/homepage/' . $value->image . '" alt="…">
              <div class="carousel-caption d-none d-md-block">
              <h1>' . $value->title . '</h1>
              <h4>' . $value->subtitle . '</h4>
              <p>' . $value->description . '</p> 
              <a href="' . $value->url . '" class="btn btn-primary">' . $value->label . '</a>
              </div>
            </div>';
        }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

