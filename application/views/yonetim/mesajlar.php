<?php $this->load->view('yonetim/include/header');?>
        <!-- End of Sidebar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo $this->session->flashdata('bilgi');?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <span>Mesajlar </span>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-binoculars  fa-2x text-wihte"></i></th>
                                            <th>Gönderen</th>
                                            <th>Email</th>
                                            <th>Telefon</th>
                                            <th>Mesaj</th>
                                            <th>Tarih</th>
                                            <th>İşlemler</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php  foreach($rows as $row):?>
                                        <tr>
                                            <td><?php 
                                            if($row->durum==1)
                                            {?>
                                                 <i class="fas fa-check-double bg-success fa-2x"></i>
                                            <?php }
                                            else{?>
                                                <i class="fas fa-check fa-2x"></i>
                                           <?php }?>

                                            </td>
                                            <td><?php echo $row->adsoyad;?></td>
                                            <td><?php echo $row->email;?></td>
                                            <td><?php echo $row->telefon;?></td>
                                            <td><?php echo $row->mesaj;?></td>
                                            <td><?php echo $row->tarih;?></td>
                                            <td>
                                                
                                                <a href="<?php echo base_url('yonetim/mesajSil/'); echo ''.$row->id  ?>" class="btn btn-danger btn-small">Sil</a>
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