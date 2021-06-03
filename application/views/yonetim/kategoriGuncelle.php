<?php $this->load->view('yonetim/include/header');?>
 

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <a href="<?php echo base_url('yonetim/kategori') ?>" class="btn btn-primary btn-small">Kategori Görüntüle</a>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('yonetim/kategoriGuncelle/'); echo ''. $info->id; ?>" >

                        <!-- Duyuru Başlığı-->
                        <div class="form-group">
                            <label>Kategori Adı</label>
                            <input type="text" name="name" value="<?php echo $info->name;?>" class="form-control" required/>
                        </div>

                        <!-- Duyuru Açıklama-->
                        
                        <!-- Makale Button-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Güncelle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->
<?php $this->load->view('yonetim/include/footer');?>