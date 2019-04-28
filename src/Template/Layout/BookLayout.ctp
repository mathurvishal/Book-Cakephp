<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= isset($title)? $title : ""; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $this->Html->css('bootstrap4.min'); ?>
 
</head>
<body>
<?php
//date_default_timezone_set("Asia/Kolkata");
//echo date("Y-m-d")." | ".date("h:i:s");
//echo date("Y-m-d h:i:s");
?>
<div class="container">
 Make by vishal
  <div class="row" style="margin-top: 10px;">
  	

    <?= $this->Flash->render(); ?>
      <div class="card" style="width: 100%;">
          
           <?= $this->fetch('content'); ?>

           
       <div class="card-footer" style="margin-bottom: 50px;">
          <strong>Notes :</strong>
          <p>1. custom unique email error to be fix.</p>

       </div>
          </div> 
      
      </div>

</div>
    
</body>
 <?= $this->Html->script('jquery.min'); ?>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</html>
