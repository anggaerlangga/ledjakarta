<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="title">
                    <h1 style="color:#B53471;"><?php echo $about->title ?></h1>
                    <h1><?php echo $about->subtitle ?></h1>
                    <hr>
                </div>
                <p><?php echo $about->description ?></p>
                <!-- <div class="btn-group">
                    <a href="/about" class="btn btn-primary">Read More</a>
                </div> -->
            </div>
            <div class="col-sm-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive" />
            </div>
        </div>
        <div class="row" style="float:right;">
            <div class="whatsapp">
                <a href="https://wa.me/6281320002094?text=Hi+!+Saya+ingin+bertanya+mengenai+produk+LED+Jakarta+yang+diinformasikan+di+Website?">
                    <img src="<?php echo base_url('assets/img/Asset 26.png') ?>" class="img-responsive" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sectwo" id="product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Our Services</h1>
                <h4>We Provide various services that you can choose according to your needs</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($service as $service): ?>
                    <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <img src="<?php echo base_url('upload/images/'.$service->image) ?>" alt="" class="img-responsive">
                        <div class="card">
                            <h4><?php echo $service->service_name ?></h4>
                            <p><?php echo $service->harga ?></p>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 

<section class="secseven" id="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Gallery</h1>
                <h4>Our photo collection is for your reference</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($gallery as $gallery): ?>
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="thumbnail-img">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo base_url('upload/gallery/'.$gallery->image) ?>">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="youtube">
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <iframe class="frame-yt" src="https://www.youtube.com/embed/a8wXCUjT41M?si=cH1EpGI9Rz27W-hb" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="youtube">
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <iframe class="frame-yt" src="https://www.youtube.com/embed/70btbBcX2Dc?si=wvhrBrdBlJ5_mm62" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="youtube">
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <iframe class="frame-yt" src="https://www.youtube.com/embed/JPwWJbuGx0c?si=bfeL8CWUjo1lz21S" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secsix" id="secsix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Reservation</h1>
                <h4>Let's arrange your schedule for booking</h4>
                <hr>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card-body"> 
                    <form enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">Date :</label>
                                    <input type="date" class="form-control" name="schedule_date" id="schedule_date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="produk">Produk :</label>
                                    <select class="form-control" name="produk" id="produk">
                                        <option value="LED">LED</option>
                                        <option value="LIGHTING">LIGHTING</option>
                                        <option value="SOUNDSYSTEM">SOUND SYSTEM</option>
                                        <option value="VM">VIRTUAL MEETING</option>
                                        <option value="BACKDROP">BACKDROP RANGKA</option>
                                        <option value="PHOTOBOOTH">PHOTO VIDEOBOOTH</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="ukuran">Ukuran :</label>
                                    <input type="text" class="form-control" name="ukuran" id="ukuran">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi :</label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Mobile Phone :</label>
                                    <input type="text" class="form-control" name="mobile_phone" id="mobile_phone">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="button-group">
                                <button class="btn btn-outline-primary" type="submit" id="btn_save">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="secfive" id="secfive">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Promo</h1>
                <h4>Get attractive promos from us</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($promo as $promo): ?>
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="thumbnail-img">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url('upload/promo/'.$promo->image) ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<section class="seceight" id="testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Review</h1>
                <h4>What is their assessment after coming to our place?</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                    <div class="carousel-inner" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        
                        <?php 
                            foreach ($testimoni as $key => $value) {
                                $active = ($key == 0) ? 'active' : '';
                                echo '<div class="carousel-item ' . $active . '">
                                    <img class="rounded-circle shadow-1-strong mb-4" src="' . base_url().'upload/images/' . $value->image . '">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <h5 class="mb-3">' . $value->testi_name . '</h5>
                                            <p class="text-muted">' . $value->description . '</p>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?> 

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> 
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <!-- <div class="col-sm-8"> -->
                <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                        <!-- <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo site_url('assets/img/quotes.png') ?>" />
                                    <div class="content">
                                        <p>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc</p>
                                        <h4>Celia Almeda</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> 
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="color:#6cbc99;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</section>

<section class="secnine">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>Contact us</h1>
                <h4>You can find out location in the following information</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7232032499037!2d106.80346796936627!3d-6.16780834675792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f790a62206ed%3A0xa1bea7118d42c906!2sKAKOTO%20REFLEKSI%20%26%20MASSAGE!5e0!3m2!1sid!2sid!4v1682047956642!5m2!1sid!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                <div class="contact">
                    <ul>
                        <li><img src="<?php echo base_url('assets/img/place.png')?>">Jl. Biak No.23, Cideng, Gambir</li>
                        <li><img src="<?php echo base_url('assets/img/whatsapp.png')?>">0821-1339-0529</li>
                        <li><img src="<?php echo base_url('assets/img/instagram.png')?>">videotronjakarta</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("public/sukses.php") ?>

</body>


<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }


    $(document).ready(function(){
        $('#btn_save').on('click',function(){
            var schedule_date = $('#schedule_date').val();
            var produk = $('#produk').val();
            var name = $('#name').val();
            var mobile_phone = $('#mobile_phone').val();
            var lokasi = $('#lokasi').val();
            var ukuran = $('#ukuran').val();
            // var therapist = '';

            // if (document.getElementById('male').checked) {
            //      therapist = document.getElementById('male').value;
            // }

            // if (document.getElementById('female').checked) {
            //      therapist = document.getElementById('female').value;
            // }

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('reserve/save')?>",
                dataType : "JSON",
                data : {schedule_date:schedule_date, produk:produk, name:name, mobile_phone:mobile_phone, ukuran:ukuran, lokasi:lokasi},
                success: function(data){
                    console.log(data);
                    if(data == true){
                        // cekData();
                        sweetAlert("Successfully!", "Your booking has bee saved successfully", "success");
                    }

                }
            });
                return false;
        });

        function sukses(){
            $('#suksesModal').modal();
        }
            
    });
</script>