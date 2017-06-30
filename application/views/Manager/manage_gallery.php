<div class="row">
<div class="col-md-12">
<?php if ($this->session->flashdata('msg')): ?>
                <div class="alert alert-success">
                <center> 
                    <strong> 
                        <?=$this->session->flashdata('msg');?>
                   </strong>
                </center>
                 </div>
                    <?php endif; ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php if ($this->session->flashdata('info')): ?>
                <div class="alert alert-info">
                <center> 
                    <strong> 
                        <?=$this->session->flashdata('info');?>
                   </strong>
                </center>
                 </div>
                    <?php endif; ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                <center> 
                    <strong> 
                        <?=$this->session->flashdata('error');?>
                   </strong>
                </center>
                 </div>
                    <?php endif; ?>
</div>
</div>

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Images</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">

                  <?php echo form_open_multipart('upload/do_upload');?>
                 <input type="text" class="form-control" name="caption" size="500" placeholder='Image caption here' required />
                  <input type="file" class="form-control"  name="userfile" size="20" required/>
                  
                  <br /><br />

                  <input class="btn btn-info" type="submit" value="upload" />
                  
                  </form>
                </div>
          </div>
     </div>
</div>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Imagaes in Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  
                  <th>Image</th>
                  <th>Caption</th>
                  <th>Action</th>
                </tr>
                <?php foreach($images as $image):?>
                <tr>
                  
                  <td><img src="<?=base_url('assets/uploads/');?><?=$image['path']?>" height="150" width="150"></td>
                  <td><?=$image['caption'];?></td>

                  <td>
                  <a href="<?=base_url('manager/delete_image?');?>id=<?=$image['id'];?>" id='deleteImage' class="label label-danger">Delete</a>
                  </td>
                 </tr>
               <?php endforeach; ?>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
 </div>
<script type="text/javascript">
    $('#deleteImage').on('click', function () {
        return confirm('Are you sure?');
    });
</script>