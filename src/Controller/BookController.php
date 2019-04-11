<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\ORM\Table;
/**
 * 
 */
class BookController extends AppController
{
	public $base_url="";
	public function initialize()
	{
		Parent::initialize();
		$this->viewBuilder()->setLayout('BookLayout');
		$this->loadModel('Books');

	}

	public function index()
	{
		$this->set("title","Book List - Index");
		$this->set('baseurl',"$this->base_url");
		$data = $this->Books->find('all', [
    'order' => ['book_id' => 'DESC']
])->toArray();
		$this->set("data",$data);

	}

	public function create()
	{
		$this->set("title","Create - Book List");
		$this->set('baseurl',"$this->base_url");

	}
	public function savedata()
	{
		$this->autoRender = False;
		//print_r($this->request->data);
		$book = $this->Books->newEntity($this->request->data);
		$validation = $book->errors();
		//img upload 



		if (!empty($validation)) {
			//we have error
			//print_r($validation);
			$this->Flash->set($validation,[
				'element' => 'book_error'
			]);

		}
		else{
			//no error
			//print_r($this->request->data); die;
			//now we save data when no errors
			$upload_path = '/img/uploads';



	$temp_name = $this->request->data['book_img']['tmp_name'];
	$file_name = $this->request->data['book_img']['name'];
	

	function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
	}
	$fileName = random_string(50).".jpg";

	if (move_uploaded_file($temp_name, WWW_ROOT.$upload_path."/".$fileName)) {
		
	$form_data = $this->request->data;
	$book->book_name = $form_data['book_name'];
	$book->book_author = $form_data['book_author'];
	$book->book_description = $form_data['book_description'];
	$book->book_email = $form_data['book_email'];
	$book->book_img = $upload_path."/".$fileName;

	$this->Books->save($book);
	$this->Flash->set('Book Has been added Successfully',[
		'element' => "book_success"
	]);
	}
			else
			{
				$this->Flash->set('Image not uploaded - Fail!',[
				'element' => 'book_error']);
			}

		}

		$this->redirect(['action'=>'create']);
	}

	public function update()
	{
		$this->autoRender = False;
		$this->set("title","Update - Book List");
		//print_r($this->request->data);

		$book = $this->Books->newEntity($this->request->data);
		$validation = $book->errors();
		$form_data = $this->request->data;
		$book = $this->Books->get($form_data['book_id']);

		if (!empty($validation)) {
			//we have error
			//print_r($validation);
			$this->Flash->set($validation,[
				'element' => 'book_error'
			]);

		}
		else{

			$upload_path = '/img/uploads';

			$temp_name = $this->request->data['book_img']['tmp_name'];
			$file_name = $this->request->data['book_img']['name'];
			
			function random_string($length) {
			$key = '';
			$keys = array_merge(range(0, 9), range('a', 'z'));

			for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
			}

			return $key;
			}
			$fileName = random_string(50).".jpg";



			if (move_uploaded_file($temp_name, WWW_ROOT.$upload_path."/".$fileName)) {



		date_default_timezone_set("Asia/Kolkata");
		$book->book_name = 	trim($form_data['book_name']);
		$book->book_author = trim($form_data['book_author']);
		$book->book_description = trim($form_data['book_description']);
		$book->book_email= trim($form_data['book_email_update']);
		$book->book_img = $upload_path."/".$fileName;
		$book->book_updated_date= date("Y-m-d h:i:s");

		

		$this->Books->save($book);
		$this->Flash->set("Book details has been updated Successfully",
			[
				'element' => 'book_success'
			]);
		}
	
		}
		$this->redirect(['action'=>'edit/'.$form_data['book_id']]);	

	}
	public function edit($id)
	{
		$this->set("title","Update - Book List");
		$this->set('baseurl',$this->base_url);
		$form_data = $this->Books->get($id);
		$this->set('data',$form_data);		


	}
	public function delete($id)
	{
		$this->autoRender = False;
		//$form_data = $this->request->data
		$book = $this->Books->get($id);
		//print_r($book->book_id); die;
		if ($this->Books->delete($book)) {
			$this->Flash->set("Book details has been deleted Successfully",
			[
				'element' => 'book_success'
			]);
		}
		else{
			$this->Flash->set("error",[
				'element' => 'book_error'
			]);
		}
		$this->redirect(['action'=>'index']);	
		
	}
}


