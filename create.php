<h2><?php echo $title; ?></h2>

<?php if (validation_errors() !=null) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
    </div>
<?php } ?> 

<?php echo form_open('news/create'); ?>

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="input" name="title" class="form-control" />
    </div>
    
    <div class="form-group">
        <label for="slug">Kategori</label>
        <input type="input" name="slug" class="form-control" />
    </div>

    <div class="form-group">
        <label for="text">Isi Berita</label>
        <textarea name="text"  class="form-control" rows=5 ></textarea>
    </div>

    <input type="submit" name="submit" value="Create news item" />

</form>