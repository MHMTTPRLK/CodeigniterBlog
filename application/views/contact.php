<?php $this->load->view('include/header');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo base_url('assets/fronted/');?>img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Bana Ulaşın</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">

                    <div class="col-md-10 col-lg-8 col-xl-7">
                         <?php $this->session->flashdata('bilgi');?>
                        <p>İletişime geçmek ister misiniz? Bana mesaj göndermek için aşağıdaki formu doldurun, en kısa sürede size geri döneceğim!</p>
                        <div class="my-5">
                            <form method="post" action="<?php echo base_url('iletisim/gonder'); ;?>">
                                <div class="form-floating">
                                    <input class="form-control" id="adsoyad" name="adsoyad" type="text" placeholder="Enter your name..." />
                                    <label for="inputName">Ad Soyad</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." />
                                    <label for="inputEmail">Email Adresi</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="telefon" name="telefon" type="tel" placeholder="Enter your phone number..." />
                                    <label for="inputPhone">Telefon Numarası</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="mesaj" id="inputMessage" placeholder="Enter your message here..." style="height: 12rem"></textarea>
                                    <label for="inputMessage">Mesajınız</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" type="submit">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
 <?php $this->load->view('include/footer');?>