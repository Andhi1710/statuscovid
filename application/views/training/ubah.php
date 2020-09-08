
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
   <div class="row mb-2">
    <div class="col-sm-6">
     <h1> Ubah Data Training</h1>
    </div>
    <div class="col-sm-6">
     <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item">Data Training</li>
      <li class="breadcrumb-item active">Ubah Data Training</li>
     </ol>
    </div>
   </div>
  </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
  <!-- tambah data -->
  <div class="row">
   <div class="col-md-12">
    <div class="card">
     <div class="card-header">
      <h5 class="card-title">Ubah Data</h5>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
      <div class="row">
       <div class="col-md-12">
        <?= validation_errors(); ?>
        <form action="" method="post" accept-charset="utf-8">

         <div class="card-body">
          <div class="row">

           <div class="col-md-5">
            <div class="form-group">
             <label for="exampleInputEmail1">id Training</label>
             <input type="text" class="form-control disabled" name="id_training" value="<?= $ubah['id_training'] ?>" readonly>
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Nama Kota / Kabupaten</label>
             <input type="text" class="form-control"name="nama" value="<?= $ubah['nama'] ?>">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah ODP</label>
             <input type="text" class="form-control"name="jml_odp" value="<?= $ubah['jml_odp'] ?>">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah PDP</label>
             <input type="text" class="form-control"name="jml_pdp" value="<?= $ubah['jml_pdp'] ?>">
            </div>
           </div>

           <div class="col-md-1">
           </div>

           <div class="col-md-5">
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah Positif Aktif</label>
             <input type="text" class="form-control"name="aktif" value="<?= $ubah['aktif'] ?>">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah Sembuh</label>
             <input type="text" class="form-control"name="sembuh" value="<?= $ubah['sembuh'] ?>">
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah Meninggal</label>
             <input type="text" class="form-control"name="meninggal" value="<?= $ubah['meninggal'] ?>">
            </div>
            <div class="form-group">
             <label>Status Zona</label>
             <select class="form-control" name="status_zona">
              <option <?php if($ubah['status_zona']=='merah'){echo "selected";}?> value='merah'>Merah</option>
              <option <?php if($ubah['status_zona']=='kuning'){echo "selected";}?> value='kuning'>Kuning</option>
              <option <?php if($ubah['status_zona']=='biru'){echo "selected";}?> value='biru'>Biru</option>
             </select>

            </div><br>
            <input type="submit" name="save" class="btn btn-primary" value="Update">
           </div>
          </div>






         </div>
         <!-- /.card-body -->
        </form>
       </div>
       <!-- /.col -->
      </div>
      <!-- /.row -->
     </div>
     <!-- ./card-body -->
    </div>
    <!-- /.card -->
   </div>
   <!-- /.col -->
  </div>
  <!-- /.row -->
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper