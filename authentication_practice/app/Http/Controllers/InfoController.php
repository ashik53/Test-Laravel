<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class InfoController extends Controller
{
    public function saveData(Request $request){

    	$this->validate($request, [

    		'name' => 'required',
    		

    	]);

        $info = new Info();
        $info->name = $request->name;

        //dd($request);

        if($request->hasFile('image')){
            
        	
            $info->image = $request->image->store('public/images');

        } else {
            return 'hello';
            $info->image = '';
        }

        $info->save();
        return redirect('/see-all');
    }//

    public function seeAll(){

    	$infos = Info::all();

    	return view('show')->withInfos($infos);

    } //func
}
