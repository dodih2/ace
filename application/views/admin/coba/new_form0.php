								<!-- PAGE CONTENT BEGINS -->
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <div class="card mb-3">
                  <div class="card-header">
                    <a href="<?php echo site_url('admin/test/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                  </div>
                  <div class="card-body">

                    <form action="<?php base_url('admin/test/add') ?>" method="post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="nik">Nik*</label>
                        <input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
                         type="text" name="nik" placeholder="Nik" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nik') ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nama">Nama*</label>
                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                         type="text" name="nama" placeholder="Nama" />
                        <div class="invalid-feedback">
                          <?php echo form_error('nama') ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="password">Password*</label>
                        <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                         type="text" name="password" placeholder="Password" />
                        <div class="invalid-feedback">
                          <?php echo form_error('password') ?>
                        </div>
                      </div>


                      <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>

                  </div>

                  <div class="card-footer small text-muted">
                    * required fields
                  </div>


                </div>


								<!-- PAGE CONTENT ENDS -->
