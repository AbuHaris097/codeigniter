<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="col-lg-8">
<form class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'title','placeholder'=>'title','class'=>'form-control']); ?>
      </div>
      <div class="col-md-5">
      <?php echo form_error('title','<div class="text-danger">', '</div>'); ?>
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
      <?php echo form_textarea(['name'=>'description','placeholder'=>'description','class'=>'form-control']); ?>
      </div>
      <div class="col-md-5">
      <?php echo validation_errors(); ?>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php echo anchor('Welcome', 'Back', ['class'=>'btn btn-default']); ?>
        <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>

      </div>
    </div>
 
</form>