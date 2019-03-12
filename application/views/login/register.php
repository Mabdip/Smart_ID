<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="<?php echo base_url().'Homepage'?>" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registration</h3>
                    <p>Silahkan melakukan pendaftaran dengan mengisi semua form yang ada!. </p>
                    <?php if ($this->session->flashdata('success') == TRUE): ?>
                        <div role="alert" class="alert alert-success alert-dismissible fade in">
                            <button aria-label="Close" data-dissmiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span>
                            </button>
                            <p><?php echo $this->session->flashdata('success')?></p>
                        </div>
                    <?php endif;?>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url().'register/tambah_siswa'; ?>" id="loginForm" method="post">
                        <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="Nama" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="Email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Alamat</label>
                                    <textarea rows="2" cols="34" class="form-control" name="Alamat" required></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="Tempat_Lahir" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="Tanggal_Lahir" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>No Telepon</label>
                                    <input type="text" class="form-control" name="No_tlp" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="Password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        
    </div>
