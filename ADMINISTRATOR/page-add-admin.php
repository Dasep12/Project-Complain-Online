


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>

<div class="content mt-3">
<div class="animated fadeIn">
<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Tambah Admin <i class="fa fa-user-plus"></i></strong>
        </div>
         <div class="card-body">
               <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input"  class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Gender</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option >Perempuan</option>
                                        <option >Pria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Level</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                        <option value="0">Admin</option>
                                        <option value="1">Client</option>
                                    </select>
                                </div>
                            </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Sekolah Asal</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Jurusan</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" class="form-control"><small class="help-block form-text"></small></div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Profile</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                            </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat Sekolah</label></div>
                                    <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                </div>                                                 
                         </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->





</body>

</html>
