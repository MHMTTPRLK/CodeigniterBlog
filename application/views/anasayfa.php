<?php $this->load->view('include/header');?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo base_url('assets/fronted/');?>img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header> <!-- Main Content-->

        
        <div class="container px-4 px-lg-5">
            <div class="col-lg-2">
            <h2 align="left">Kategoriler</h2>
            <ul class="list-group">
                <?php foreach($datas as $data):?>
                <li class="list-group-item"><?php echo $data->name;?> <span class="badge badge-secondary text-danger">12</span></li>
                
              <?php endforeach; ?>
            </ul>
        </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">

                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach($rows as $row):?>
                    <div class="post-preview">
                        <a href="<?php echo base_url('duyuru/'); echo ''.$row->duyuru_id  ?>">
                            <h2 class="post-title"><?php echo $row->baslik; ?></h2>
                            <h3 class="post-subtitle"><?php
                            $txt=substr($row->aciklama, 0,100);

                             echo  $txt; ?></h3>
                        </a>
                        <p class="post-meta">
                           Paylaşım Tarihi
                           <?php echo $row->tarih; ?> 
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php endforeach ?>
                    
                   
                    </div>
                  
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
<?php $this->load->view('include/footer');?>