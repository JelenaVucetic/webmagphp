<?php require APPROOT . '/views/includes/header.php'; ?> 

<!-- section -->
<div class="section">
<!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <!-- post -->
    
                   <h1>Publish a post</h1>
                   <p>Create a post with this form</p>

                <form method="POST" action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="title">Title: <sup>*</sup></label>
                    <input type="text" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid alert alert-danger' : '';?>" value="<?php echo $data['title'];?>" id="title" name="title" required>
                     <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                    </div>

                    <div class="form-group">
                    <label for="body">Description  <sup>*</sup></label>
                    <textarea id="editor2" name="body" id="body" class="form-control  <?php echo (!empty($data['body_err'])) ? 'is-invalid alert alert-danger' : '';?>" required><?php echo $data['body'];?></textarea>
                    <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
                    <!-- /post -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php require APPROOT . '/views/includes/footer.php'; ?> 

<script src="../ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor2' );
</script>