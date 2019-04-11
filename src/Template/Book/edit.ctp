
<div class="card-header"><h2>Update Book </h2></div>
          <div class="card-body">
 <?php
        echo $this->Html->link(
         "< Back",
         "/book",
          [
            'class'=>'btn btn-warning float-right',
              'style'=>'margin-top: -76px;'
          ]
        );
      ?>
            <span style="color: red;">Created Date : <?= $data->book_created_date; ?></span>
            <br>
            <span style="color: red;">Updated Date : <?php
                  if(!empty($data->book_updated_date)){
                    echo $data->book_updated_date;
                  }
                  else
                  {
                    echo "Not Updated Before";
                  }
                   ?></span>
  <?php
    echo $this->Form->create(null, 
      ["url" => ["action" => "update"] ,
      "type"=> "file"
    ]
);
  ?>
    <div class="form-group">
      <input type="hidden" value="<?= $data->book_id; ?>"  name="book_id">
      <label for="Book Name">Book Name</label>
      <input type="text" class="form-control" value="<?= $data->book_name; ?>" id="Name" placeholder="Enter Book Name" name="book_name">
    </div>
      <div class="form-group">
      <label for="Book Author">Book Author</label>
      <input type="text" class="form-control" value="<?= $data->book_author; ?> " id="Author" placeholder="Enter Book Author" name="book_author">
    </div>
    <div class="form-group">
      <label for="dec">Book Description</label>
      <input type="text" class="form-control" value="<?= $data->book_description; ?>"  id="dec" placeholder="Enter Book Description" name="book_description">
    </div>
    <div class="form-group">
      <label for="Email">Book Author Email</label>
      <input type="email" class="form-control" value="<?= $data->book_email; ?>"  id="email" placeholder="Enter BookAuthor Email" name="book_email_update">
      </div>
       <div class="form-group">
        <label for="Email">Old Book Image</label>
<?php
    if(!empty($data->book_img))
    {?>
      <img 
      src="<?php echo $this->Url->image($data->book_img); ?>" style="height: 80px; width: 80px;" >
   <?php }
    else 
    {
      echo "No Image";
    }?>
              </div>
      <div class="custom-file"> Book Photo
    <input type="file" name="book_img" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose Book Photo ..</label>
  </div>

    </div>
    <button type="submit" class="btn btn-info">Update</button>
  </form>
  </div>