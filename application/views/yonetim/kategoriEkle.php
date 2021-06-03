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
                    <form method="post" action="<?php echo base_url('yonetim/kategoriPost') ?>" >

                        <!-- Duyuru Başlığı-->
                        <div class="form-group">
                            <label>Kategori Adı</label>
                            <input type="text" name="name" class="form-control" required/>
                        </div>

                     
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->
<?php $this->load->view('yonetim/include/footer');?>