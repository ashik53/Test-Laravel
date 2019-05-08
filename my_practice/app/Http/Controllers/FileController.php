<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doc;

class FileController extends Controller
{
   
   public function index(){

   	 	$docs = Doc::all();

   	 	return view('show-pdfs')->withDocs($docs);
   }//func
   public function store(Request $request){

   		$doc_name = $request->doc_name;

   		//dd($doc_name);
   		$name = $request->file('file');

   		if(empty($name) == true ){
   			dd(" file null");
   		}

   		if(is_null($doc_name) == true){
   			dd("doc name null");
   		}


   		$name->getClientOriginalName();
   		//dd($name->getClientOriginalName());
   		//dd($name->getClientOriginalExtension());

   		//dd($name->getRealPath());

   		 $destinationPath = 'uploads';

   		 $location = $destinationPath ."/".$name->getClientOriginalName();

   		// dd($location);

   		// dd($destinationPath);
      	 $name->move($destinationPath, $name->getClientOriginalName());

      	 $doc = new Doc();
      	 $doc->name = $doc_name;
      	 $doc->jayga = $location;

      	 $doc->save();

      	 //dd($doc);


      	 $docs = Doc::all();

      	 return redirect("show-all");


/*			
   		$location = "documents/$name";


   		$doc_name 	= $_POST['doc_name'];

	$name 	= $_FILES['file']['name'];

	$tmp_name 	= $_FILES['file']['tmp_name'];

	if($name && $doc_name){
		$location = "documents/$name";
		move_uploaded_file($tmp_name, $location);
		$query = "INSERT INTO documents (name, jayga) VALUES ('$doc_name', '$location')";
		if ($conn->query($query) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $query . "<br>" . $conn->error;
		}
		header('Location:index.php');
	}else {
		die("Please select a file");
	}
*/

   } //
}//class
