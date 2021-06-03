<?php $this->load->view('yonetim/include/header');?>
        <!-- End of Sidebar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo $this->session->flashdata('bilgi');?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span>Kategoriler </span>
                            <a href="<?php echo base_url('yonetim/kategoriEkle') ?>" class="btn btn-primary btn-small">Kategori Ekle</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sıra</th>
                                            <th>Kategori Adı</th>
                                            <th>İşlemler</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php $sayac=1; foreach($rows as $row):?>
                                        <tr>
                                            <td><?php echo $sayac++;?></td>
                                            <td><?php echo $row->name;?></td>
                                           
                                            <td>
                                                <a href="<?php echo base_url('yonetim/kategoriEdit/');echo ''.$row->id  ?>" class="btn btn-success btn-small">Güncelle</a>
                                                <a href="<?php echo base_url('yonetim/kategoriSil/'); echo ''.$row->id  ?>" class="btn btn-danger btn-small">Sil</a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php $this->load->view('yonetim/include/footer');?>