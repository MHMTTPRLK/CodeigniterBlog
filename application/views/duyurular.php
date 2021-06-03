<?php $this->load->view('include/header');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo base_url('assets/fronted/');?>img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $this->session->userdata('title');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?php echo $info->aciklama;?></p>
                        <p>
                           Tarih:<?php echo $info->tarih;?>
                            
                        </p>
                    </div>
                </div>
            </div>
        </article>
       <?php $this->load->view('include/footer');?>