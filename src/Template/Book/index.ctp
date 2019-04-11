<div class="card-header">
	<h2>Book List</h2>
	<?php
        echo $this->Html->link(
         "+ Add Book",
         "/create",
          [
            'class'=>'btn btn-success float-right',
              'style'=>'margin-top: -44px;'
          ]
        );
      ?>
</div>
          <div class="card-body">
          	<table class="table">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Author</th>
                  <th>Description</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Created Date</th>
                  <th>Updated Date</th>
                  <th style="text-align: center;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $value) { ?>
                  <tr>
                  <td><?= $value->book_id; ?></td>
                  <td><?= $value->book_name; ?></td>
                  <td><?= $value->book_author; ?></td>
                  <td><?= $value->book_description; ?></td>
                  <td><?= $value->book_email; ?></td>
                  <td><?php
                    if(!empty($value->book_img))
                    {?>
                      <img 
                      src="<?php echo $this->Url->image($value->book_img); ?>" style="height: 80px; width: 80px;" >
                   <?php }
                    else 
                    {
                      echo "No Image";
                    }?>
                  </td>
                  <td><?= $value->book_created_date; ?></td>
                  <td><?php
                  if(!empty($value->book_updated_date)){
                    echo $value->book_updated_date;
                  }
                  else
                  {
                    echo "Not Updated Before";
                  }
                   ?></td>
                  <td>
                    <?php echo $this->Html->link(
                          "Update",
                          "/edit/".$value->book_id,
                          [
                            "class"=>"btn btn-primary"

                          ]
                    ); 
                       echo $this->Html->link(
                          "Delete",
                          "/delete/".$value->book_id,
                          [
                            "class"=>"btn btn-danger", 
                            "style"=>"margin-top:5px"
                          ]
                    ); 
                    ?>
                  </td>
                </tr>
               <?php  } ?>
              </tbody>
            </table>
            </div>