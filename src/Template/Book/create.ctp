
<div class="card-header">
  <h2>Add Book</h2>
      <?php
        echo $this->Html->link(
         "< Back",
         "/book",
          [
            'class'=>'btn btn-warning float-right',
              'style'=>'margin-top: -44px;'
          ]
        );
      ?>
</div>
 <div class="card-body">
          
  <?php
    echo $this->Form->create(null, 
      ["url" => ["action" => "savedata"] ,
      "type"=> "file"
    ]
);
  ?>
    <div class="form-group">
      <label for="Book Name">Book Name</label>
      <input type="text" class="form-control" id="book_name" placeholder="Enter Book Name" name="book_name">
    </div>
    <div class="form-group">
      <label for="Book Author">Book Author</label>
      <input type="text" class="form-control" id="book_author" placeholder="Enter Book Author" name="book_author">
    </div>
    <div class="form-group">
      <label for="dec">Book Description</label>
      <input type="text" class="form-control" id="book_description" placeholder="Enter Book Description" name="book_description">
    </div>
    <div class="form-group">
      <label for="Email">Book Author Email</label>
      <input type="email" class="form-control" id="book_email" placeholder="Enter Book Author Email" name="book_email">
    </div>
     <div class="custom-file"> Book Photo
    <input type="file" name="book_img" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose Book Photo ..</label>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
 