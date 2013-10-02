<header>
<div class="body-space"></div>
<div class="jumbotron text-center">
<h1>Smart Move.</h1>
<p>Just a few more details and we are good to go!</p>
</div>
</header>

<div class="container">

<div class="row">
<div class="col-md-4 col-md-offset-4 panel">
<div class="panel-body">
<?php echo $this->Form->create('user_details'); ?>
<legend>Account Details</legend>
<fieldset>

<div class="row">

<div class="form-group col-lg-6">
<label>First Name</label>
<?php echo $this->Form->input('fname', array('class' => 'form-control', 'placeholder' => 'John', 'label' => false));	?>
</div>

<div class="form-group col-lg-6">
<label>Last Name</label>
<?php echo $this->Form->input('lname', array('class' => 'form-control', 'placeholder' => 'Doe', 'label' => false)); ?>
</div>
</div>

<div class="form-group">
<label>Email</label>

<?php echo $this->Form->input('email', array('class' => 'form-control', 'value' => $email['User']['email'], 'label' => false, 'id' => 'disabledTextInput')); ?>
</div>

<div class="form-group col-lg-6">
<label>Company Size</label>
<?php echo $this->Form->input('size', array('options' => array('1-3' => '1-3', '3-10' => '3-10', '11+' => '11+'), 'class' => 'form-control', 'label' => false)); ?>
</div>


</fieldset>
<?php

echo $this->Form->submit('Update', array('class' => 'btn btn-primary btn-block'));
echo $this->Form->end();

?>
</div>
</div>
</div>

</div>