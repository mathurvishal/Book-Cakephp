<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" onclick="this.classList.add('hidden');">
	<?php 
		//echo print_r($message);   // to caught all errors

		//Error Messege for name.
		if(isset($message['book_name']['_empty'])) //for  not empty
		{
			echo "<p><b>Book Name : </b>".$message['book_name']['_empty']."</p>";
		}

		if(isset($message['book_name']['minLength'])) //for min lenght 
		{
			echo "<p><b>Book Name : </b>".$message['book_name']['minLength']."</p>";
		}

		if(isset($message['book_name']['maxLength'])) //for max length
		{
			echo "<p><b>Book Name : </b>".$message['book_name']['maxLength']."</p>";
		}
		//Error Messege for  Author name.
		if(isset($message['book_author']['_empty'])) //for  not empty
		{
			echo "<p><b>Author Name : </b>".$message['book_author']['_empty']."</p>";
		}

		if(isset($message['book_author']['minLength'])) //for min lenght 
		{
			echo "<p><b>Author Name : </b>".$message['book_author']['minLength']."</p>";
		}

		if(isset($message['book_author']['maxLength'])) //for max length
		{
			echo "<p><b>Author Name : </b>".$message['book_author']['maxLength']."</p>";
		}
		//Error Messege for  book_description
		if(isset($message['book_description']['_empty'])) //for  not empty
		{
			echo "<p><b>Book Description : </b>".$message['book_description']['_empty']."</p>";
		}

		if(isset($message['book_description']['minLength'])) //for min lenght 
		{
			echo "<p><b>Book Description : </b>".$message['book_description']['minLength']."</p>";
		}

		if(isset($message['book_description']['maxLength'])) //for max length
		{
			echo "<p><b>Book Description : </b>".$message['book_description']['maxLength']."</p>";
		}

		//Error Messege for Book Author Email
		if(isset($message['book_email']['_empty'])) //for  not empty
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email']['_empty']."</p>";
		}

		if(isset($message['book_email']['minLength'])) //for min lenght 
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email']['minLength']."</p>";
		}

		if(isset($message['book_email']['maxLength'])) //for max length
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email']['maxLength']."</p>";
		}
		if(isset($message['book_email']['email_unique'])) //for max length
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email']['email_unique']."</p>";
		}


		//Error Messege for Book Author Email
		if(isset($message['book_email_update']['_empty'])) //for  not empty
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email_update']['_empty']."</p>";
		}

		if(isset($message['book_email_update']['minLength'])) //for min lenght 
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email_update']['minLength']."</p>";
		}

		if(isset($message['book_email_update']['maxLength'])) //for max length
		{
			echo "<p><b>Book Author Email : </b>".$message['book_email_update']['maxLength']."</p>";
		}
	?>
		
	</div>
