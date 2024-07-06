<body id="page-top">   
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
             <div id="content">               
                <div class="container-fluid">        
                    <div class="card mx-auto" style="width:100%">
                    <div class="card-header bg-custom-samping py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Laporan Statistik Rumah Sakit</h6>
                        </div>                        
                            <div class="card-body">
                                <form  class = "form-inline" >                                          
                                    <table cellpadding="10"> 
                                        <thead>
                                        <tr> 
                                            <<td>Dari Bulan </td>
<td>:</td> 
<td>
    <select class="form-control" name="daribulan" required>
        <option value="">--pilih Bulan--</option>
        <option value="01" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '01' ? 'selected' : '' ?>>Januari</option>
        <option value="02" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '02' ? 'selected' : '' ?>>Februari</option>
        <option value="03" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '03' ? 'selected' : '' ?>>Maret</option>
        <option value="04" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '04' ? 'selected' : '' ?>>April</option>
        <option value="05" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '05' ? 'selected' : '' ?>>Mei</option>
        <option value="06" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '06' ? 'selected' : '' ?>>Juni</option>
        <option value="07" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '07' ? 'selected' : '' ?>>Juli</option>
        <option value="08" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '08' ? 'selected' : '' ?>>Agustus</option>
        <option value="09" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '09' ? 'selected' : '' ?>>September</option>
        <option value="10" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '10' ? 'selected' : '' ?>>Oktober</option>
        <option value="11" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '11' ? 'selected' : '' ?>>November</option>
        <option value="12" <?php echo isset($_GET['daribulan']) && $_GET['daribulan'] == '12' ? 'selected' : '' ?>>Desember</option>
    </select>
</td>
<td>
    <select class="form-control" name="daritahun" required>
        <option value="">--pilih Tahun--</option>
        <?php
        $tahun = date('Y');
        for ($i = 2020; $i < $tahun + 5; $i++) { ?>
            <option value="<?php echo $i ?>" <?php echo isset($_GET['daritahun']) && $_GET['daritahun'] == $i ? 'selected' : '' ?>><?php echo $i ?></option>
        <?php } ?>
    </select>
</td>
<tr>
</thead>
<thead>
<tr>
    <td>Sampai Bulan</td>
    <td>:</td>
    <td>
        <select class="form-control" name="sampbulan" required>
            <option value="">--pilih Bulan--</option>
            <option value="01" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '01' ? 'selected' : '' ?>>Januari</option>
            <option value="02" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '02' ? 'selected' : '' ?>>Februari</option>
            <option value="03" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '03' ? 'selected' : '' ?>>Maret</option>
            <option value="04" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '04' ? 'selected' : '' ?>>April</option>
            <option value="05" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '05' ? 'selected' : '' ?>>Mei</option>
            <option value="06" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '06' ? 'selected' : '' ?>>Juni</option>
            <option value="07" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '07' ? 'selected' : '' ?>>Juli</option>
            <option value="08" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '08' ? 'selected' : '' ?>>Agustus</option>
            <option value="09" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '09' ? 'selected' : '' ?>>September</option>
            <option value="10" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '10' ? 'selected' : '' ?>>Oktober</option>
            <option value="11" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '11' ? 'selected' : '' ?>>November</option>
            <option value="12" <?php echo isset($_GET['sampbulan']) && $_GET['sampbulan'] == '12' ? 'selected' : '' ?>>Desember</option>
        </select>
    </td>
    <td>
        <select class="form-control" name="samptahun" required>
            <option value="">--pilih Tahun--</option>
            <?php
            $tahun = date('Y');
            for ($i = 2020; $i < $tahun + 5; $i++) { ?>
                <option value="<?php echo $i ?>" <?php echo isset($_GET['samptahun']) && $_GET['samptahun'] == $i ? 'selected' : '' ?>><?php echo $i ?></option>
            <?php } ?>
        </select>
    </td>
</tr>
</thead>

                                    </table>                                 
                                    <?php
                                        if (
                                            isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
                                            isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
                                            isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
                                            isset($_GET['samptahun']) && $_GET['samptahun'] != ''
                                        ) {
                                            $daribulan = $_GET['daribulan'];
                                            $daritahun = $_GET['daritahun'];
                                            $sampbulan = $_GET['sampbulan'];
                                            $samptahun = $_GET['samptahun'];
                                            $first_bulan = $daritahun. '-' .$daribulan;
                                            $second_bulan =$samptahun. '-' .$sampbulan;
                                        } else {
                                            $daribulan = date('m') ;
                                            $daritahun =date('Y') ;
                                            $sampbulan = date('m') ;
                                            $samptahun =date('Y') ;
                                            $first_bulan = $daritahun. '-' .$daribulan;
                                            $second_bulan =$samptahun. '-' .$sampbulan;
                                        }
                                    ?>                                                                                                                                   
                                    <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i> Tampilkan</button>
<a href="<?= base_url('OpperiodeStatistik') ?>" class="btn btn-success mb-2 ml-2">
    <i class="fa fa-refresh"></i> Refresh
</a>
<?php if(count($filter) > 0) { ?>
    <a href="<?php echo base_url('OpperiodeStatistik/cetak?daribulan='.$daribulan.'&daritahun='.$daritahun.'&sampbulan='.$sampbulan.'&samptahun='.$samptahun) ?>" class="btn btn-success mb-2 ml-2" target="_blank">
        <i class="fa fa-print"></i> Cetak
    </a>
    <a href="<?php echo base_url('OpgrafikRumahsakit/generateChart?daribulan='.$daribulan.'&daritahun='.$daritahun.'&sampbulan='.$sampbulan.'&samptahun='.$samptahun) ?>" class="btn btn-success mb-2 ml-2" target="_blank">
        <i class="fa fa-chart"></i> Tampilkan Grafik
    </a>
<?php } else { ?>
    <button class="btn btn-danger mb-2 ml-2" data-toggle="modal" data-target="#grafikModal"><i class="fa fa-chart"></i> Grafik</button>
<?php } ?>
                                   
                                                                                                          
                                </form>
                            </div>                
                            <div class="alert alert-info" style="width:100%">
                                Menampilkan Data Statistik Rumah Sakit:
                                dari bulan   :<span class="font-weight-bold"><?php echo  $first_bulan?>  
                                sampai bulan :<span class="font-weight-bold"><?php echo $second_bulan?></span>                                    
                            </div> 
                    </div> 
                    <div class="card mx-auto" style="width:100%">                       
                        <div class="card-body">                
                            <div class="table-responsive"> 
                            <?php
                            $jlh_peserta = count ($filter);
                            if ($jlh_peserta > 0) {?>
                               <table id="dataTable" class="table table-bordered table-striped"> <!-- datatable-->                                 
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Bulan/Tahun</th>                                 
                                            <th>BOR</th>
                                            <th>AvLOS</th>
                                            <th>TOI</th>
                                            <th>BTO</th>
                                            <th>GDR</th>
                                            <th>NDR</th>    
			                      		</tr>
                                    </thead>
                                    <tbody>
                                        <?php                                  
                                            $no = 1;
                                            foreach($filter as $u){ 
                                        ?>
		                                <tr>
                                            <td><?php echo $no++ ?></td>  
                                            <td><?php echo date('Y-m', strtotime($u->bulan)) ?></td>                                 
                                            <td><?php echo $u->bor ?></td>
                                            <td><?php echo $u->avlos ?></td>
                                            <td><?php echo $u->toi ?></td>
                                            <td><?php echo $u->bto ?></td>
                                            <td><?php echo $u->ndr ?></td>
                                            <td><?php echo $u->gdr ?></td>                            
			                            </tr>                                    
                                        <?php
                                        }?>                              
                                    </tbody>                                   
                                </table>
                                <?php }else{?>
                                    <span class="badge badge-danger" style="font-size:14px;"><i class="fa fa-warning" style="font-size:20px;color:red"></i>Tidak ada data !!</span>               
                                <?php }	?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      
 <!-- print Modal
 <div class="modal fade" id="cetakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    Tidak Ada Data yang akan di cetak                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Ok</button>                    
                </div>
            </div>
        </div>
    </div>-->

<!--grafik Modal-->
     <div class="modal fade" id="grafikModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrafik"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    Data Tidak Ada untuk di tampilkan pada grafik..!!
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Ok</button>
                    
                </div>
            </div>
        </div>
    </div>
       
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

        <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      