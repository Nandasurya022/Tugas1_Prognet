<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>2205551022</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-1.png" alt="..." width="50"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#booking">Booking</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#paket">Paket Tour</a></li>
                        <li class="nav-item"><a class="nav-link" href="#price">Price List</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Review</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Blueoceandive</div>
                <div class="masthead-heading text-uppercase">Snorkeling & Diving</div>
                <a class="btn btn-info btn-xl text-uppercase" href="#booking">Booking Sekarang</a>
            </div>
            <form class="form-subscribe mt-5" action="#" id="form-button" method="post">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 justify-content-center">
                                        <select class="form-control form-control-lg custom-select" id="select-box" type="email" placeholder="Email Address" onChange="window.location.href=this.value">
                                            <option selected class="opacity-50">Silahkan pilih liburan anda</option>
                                            <option value="diving.php">Diving</option>
                                            <option value="snorkeling.php">Snorkeling</option>
                                        </select>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-info btn-lg" id="form-button" type="submit">Cari</button></div>
                                </div>
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
             </form>
        </header>
        <!-- home -->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="text-center">
                    <div ><img class="img-fluid mb-3 mb-lg-0" src="assets/img/home-1.png" alt="..." /></div>
                </div>
                <div class="justify-content-center mt-5">
                    <div class="">
                        <div class="featured-text text-center text-lg-center">
                            <p class="text-black mb-0">Snorkeling activities in Bali are quite popular, with snorkeling you can enjoy the underwater beauty, witness the beauty of coral fish, various coral reefs and other marine biota. This activity will be more fun enjoyed with colleagues or friends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking -->
        <section class="page-section" id="booking">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Booking</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row text-center">
                    <div class="col-md-6 mt-5">
                        <span class="fa-stack fa-4x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </span>
                        <h4 class="my-3"><a href="http://wa.me/6281236353258" class="link-info">WhatsApp</a></h4>
                        <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> -->
                    </div>
                    <div class="col-md-6 mt-5">
                        <span class="fa-stack fa-4x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        <h4 class="my-3"><a href="https://instagram.com/blueoceandive_?igshid=Nzg3NjI1NGI=" class="link-info">Instagram</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="projects-section bg-light" id="about">
            <div class="container px-lg-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <div class=""><img class="img-fluid mb-3 mb-lg-0 mt-5" src="assets/img/about/about-1.png" alt="..." /></div>
                </div>
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center mb-5 mt-5">
                    <div class="">
                        <div class="featured-text text-center text-lg-left">
                            <p class="text-black-50 mb-0">Lokasi kita terletak di daerah wisata padang bai , Padangbai adalah sebuah desa di Kecamatan Manggis, Kabupaten Karangasem, di sisi timur Pulau Bali, Indonesia. Kota ini menjadi pelabuhan feri untuk pelayaran ke Pulau Lombok, Nusa Penida, Kepulauan Gili dan pulau-pulau lainnya di Nusa Tenggara Barat. aya tarik yang dimiliki obyek wisata Padangbai di antaranya adalah pantai berpasir putih bersih dan tebal sehingga dapat dimanfaatkan sebagai tempat berjemur sinar matahari ( sun bathing) atau berenang di laut. Keindahan panorama alam bawah lautnya sangat baik untuk diving dan snorekling karena menyimpan berbagai jenis terumbu karang dan ikan-ikan hias yang sangat indah.</p><br>
                            <p class="text-black-50 mb-0"><strong>Our location is located in the tourist area of Padang Bai, Padangbai is a village in Manggis District, Karangasem Regency, on the east side of Bali Island, Indonesia. The city is a ferry port for cruises to Lombok Island, Nusa Penida, the Gili Islands and other islands in West Nusa Tenggara. The attraction owned by Padangbai tourism objects is the clean and thick white sandy beach so that it can be used as a place for sunbathing (sun bathing) or swimming in the sea. The beauty of the underwater panorama is very good for diving and snorkeling because it stores various types of coral reefs and very beautiful ornamental fish.</strong></p><br>
                        </div>
                    </div>
                </div>
                <!-- <div class="text-center">
                    <h4 class="section-heading text-uppercase">Kami Menyediakan 2 Lokasi Untuk Snorkeling</h4>
                    <h4 class="section-heading text-uppercase">WE PROVIDE 2 LOCATIONS FOR SNORKELING</h4>
                </div>

                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center mt-5">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/about/about-2.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-black">Lokasi Pertama Yaitu Tanjung Jepun</h4>
                                    <p class="mb-0 text-black-50 ms-3">Tanjung jepun merupakan lokasi favorit pagi wisatawan karena bisa memberi makan ikan secara langsung ketika kita kasi roti ikan akan menghampiri kita. Kedalaman air hanya 2-3 meter jadi tidak begitu dalam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gx-0 justify-content-center mt-5">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/about/about-3.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-black">Lokasi Kedua Yaitu Blolagoon</h4>
                                    <p class="mb-0 text-black-50 me-3">Di lokasi kedua ini merupakan lokasi yang airnya sangat biru sesuai dengan namanya dilokasi ini jika kalian beruntung akan melihat penyu langsung dan beberapa ikan-ikan besar lainnya. Kedalamanya hingga 4-5 meter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- paket-->
        <section class="page-section" id="paket">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Paket Tour</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/paket/paket-1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>2009-2011</h4> -->
                                <!-- <h4 class="subheading">Our Humble Beginnings</h4> -->
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><br>
                                Tiket Gili Eka Jaya<br>
                                Trip Gili<br>
                                Price List : 650k</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/paket/paket-2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4> -->
                            </div>
                            <div class="timeline-body">
                            <p class="text-muted"><br>
                                Pulang Pergi<br>
                                Trip Three Angel<br>
                                Padangbay - gili - nusa penida - sanur<br>
                                Price List : 850k</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/paket/paket-3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <!-- <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4> -->
                            </div>
                            <div class="timeline-body">
                            <p class="text-muted"><br>
                                Diving<br>
                                Price List : 800k<br>
                                Inlude : Perlengkapan Diving & Tanki<br>
                                Lokasi : Bloolagoon Area</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <a href="#booking">
                            <div class="timeline-image">
                                <h4>Booking Sekarang</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- price -->
        <section class="projects-section bg-light" id="price">
            <div class="container px-lg-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Price List Snorkeling</h2>
                    <div class=""><img class="img-fluid mb-3 mb-lg-0 mt-5" src="assets/img/price/price-1.png" alt="..." /></div>
                </div>
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center mb-5 mt-5">
                    <div class="">
                        <div class="featured-text text-center text-lg-left">
                            <h4>HARGA PER ORANG</h4>
                            <h5>Price Per Person</h5>
                            <ul class="list-inline mx-auto justify-content-center mt-4">
                                <p>Lokal & internasional IDR 150k MINIMAL 2 PERSON</p>
                                <p>Lokal & internasional IDR 200k/PAX</p>
                                <p><strong>INCLUDE</strong></p>
                                <li><p>Kapal dan kapten menuju lokasi</p></li>
                                <li><p>Pemandu utama</p></li>
                                <li><p>Makan siang</p></li>
                                <li><p>Air Mineral</p></li>
                                <li><p>Handuk</p></li>
                                <li><p>Ruang Canging & Kamar Mandi</p></li><br>
                                <li><p>Ship and captain heading for location</p></li>
                                <li><p>Guide master</p></li>
                                <li><p>Snorkel gear</p></li>
                                <li><p>Lunch resto</p></li>
                                <li><p>Mineral water</p></li>
                                <li><p>Towel</p></li>
                                <li><p>Canging room & bathroom</p></li>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- review -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Review</h2>
                    <h3 class="section-subheading text-muted">Tulis Review Anda</h3>
                </div>
                
                <form id="contactForm" action="insert-review.php" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" name="nama" placeholder="Nama *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Tuliskan nama anda</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Tuliskan Email anda</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" name="hp" placeholder="No. Hp *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Tuliskan No. Hp anda</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="review" placeholder="Review *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Tuliskan review anda</div>
                            </div>
                        </div>
                    </div>
                     
            
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-info btn-xl text-uppercase" id="submitButton" type="submit">Kirim</button></div>
                </form>
            </div>
        </section>
        <section class="page-section bg-light" id="team">
            <div class="container">
            <section class="panel">
                              <header class="panel-heading">
                                  <b>Apa kata mereka?</b><br>
                            </header>
                            <div class="panel-body table-responsive">
                            <?php
                    $query1="select nama, email, review from review";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error($koneksi));
                    ?>
                                <table class="table">
                                  <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Review</th>
                                        <th class="">Action</th>
                                  </tr>
                              </thead>
                              
                                 <?php while($data=mysqli_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['review'];?></td>
                    <td><div id=""><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Review" href="edit-review.php?hal=edit&email=<?php echo $data['email'];?>">Edit</a>
                    <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Review" href="delete-review.php?email=<?php echo $data['email'];?>">Delete</a></center></td></tr></div>
                    <?php   
              } 
              ?>
              
                      </table><hr/>
                </div>
              </section>
                <!-- <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <?php
                    $query1="select nama, email, review from review";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error($koneksi));
                ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <p> </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; 2205551022 2022</div>
                    
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
