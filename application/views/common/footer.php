  <!-- Javascript -->
  <script src="<?php echo base_url('assets/jquery/jquery.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Slick Carousel -->
  <script src="<?php echo base_url('vendor/slick/slick.min.js')?>"></script>
  <script src="<?php echo base_url('vendor/slick/slick-animation.min.js')?>"></script>
  <!-- Color box -->
  <script src="<?php echo base_url('vendor/colorbox/jquery.colorbox.js')?>"></script>
  <!-- shuffle -->
  <script src="<?php echo base_url('vendor/shuffle/shuffle.min.js')?>"></script>
  <script src="<?php echo base_url('vendor/aos/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/smoothscroller.js') ?>"></script>
  <script src="<?= base_url('assets/js/sweetalert.js') ?>"></script>


<div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="about-foot">
            <div class="title">
              <h4>ABOUT US</h4>
            </div>
            <div class="logo">
              <img src="<?php echo base_url('assets/img/logo-footer.png')?>">
            </div>
            <div class="desc">
              <!-- <h4>VIDTRON</h4> -->
              <p>PT. VIDEOTRON MULTIMEDIA INDOTAMA adalah perusahaan  yang bergerak di bidang penyewaan LED Videotron Indoor dan Outdoor berbagai Type dan Ukuran, selain itu kami menyediakan Alat penunjang Virtual Meeting, Kebutuhan Photography dan Videography, Soundystem & Lighting, Serta Berbagai bentuk dan design panggung, Photo dan Vidoebooth Spin 360.Perusahaan kami di dukung oleh tenaga SDM yang handal, dan kompeten, Flexible dan dinamis mengukuti kebutuhan Anda.Kami berkomitmen untuk terus meningkatkan pelayanan dan memberikan produk yang berkualitas kepada para pelanggan serta terkini dan tentunya dengan harga yang sesuai dengan budget client.
                Kami juga menyediakan:Screen Projector berbagai ukuran, LED TV Matador, Booth Pameran Custom, Mini Garden, serta kebutuhan produksi event lainnya.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-d=md-4">
          <div class="working-foot">
            <div class="title">
              <h4>JAM OPERASIONAL</h4>
            </div>
            <div class="desc">
              <p>Kami siap melayani anda baik secara online maupun offline. Kami siap melayani anda ditempat kami </p>
              <ul>
                <li>Monday - Friday   :   08:00 - 17:00 PM</li>
                <li>Saturday          :   08:00 - 12:00 PM</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-d=md-4">
          <div class="service-foot">
            <div class="title">
              <h4>SERVICE</h4>
            </div>
            <div class="desc">
              <ul>
                <li><a href="#">Videotron</a></li>
                <li><a href="#">Virtual Meeting</a></li>
                <li><a href="#">Photo Videobooth</a></li>
                <li><a href="#">Lighting</a></li>
                <li><a href="#">Sound System</a></li>
                <li><a href="#">Stage</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="copyright">
          &copy;2024 <span>VIDTRON</span>. All Rights Reserved
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Footer -->

<script>
  $('.thumbnail').click(function(){
    $('.modal-body').empty();
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#modal').modal({show:true});
});

$('#modal').on('show.bs.modal', function () {
    $('.col-4,.row .thumbnail').addClass('blur');
});

$('#modal').on('hide.bs.modal', function () {
    $('.col-4,.row .thumbnail').removeClass('blur');
});

$('.slider').slick({
      // dots: true,
      autoplay: true,
      autoplaySpeed: 2500,
      
      // slidesToShow: 1,
      // slidesToScroll: 1,
    });

</script>