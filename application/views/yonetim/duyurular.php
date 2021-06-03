<?php $this->load->view('yonetim/include/header');?>
        <!-- End of Sidebar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo $this->session->flashdata('bilgi');?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span>Duyurular </span>
                            <a href="<?php echo base_url('yonetim/duyuruEkle') ?>" class="btn btn-primary btn-small">Duyuru Ekle</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sıra</th>
                                            <th>Duyuru Başlık</th>
                                            <th>Eklenme Tarihi</th>
                                            <th>Tıklanma Sayısı</th>
                                            <th>İşlemler</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php $sayac=1; foreach($rows as $row):?>
                                        <tr>
                                            <td><?php echo $sayac++;?></td>
                                            <td><?php echo $row->baslik;?></td>
                                            <td><?php echo $row->tarih;?></td>
                                            <td><?php echo $row->tiksayisi;?></td>
                                            <td>
                                                <a href="<?php echo base_url('yonetim/duyuruEdit/');echo ''.$row->duyuru_id  ?>" class="btn btn-success btn-small">Güncelle</a>
                                                <a href="<?php echo base_url('yonetim/duyuruSil/'); echo ''.$row->duyuru_id  ?>" class="btn btn-danger btn-small">Sil</a>
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