<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['data']=size::get();
        return view('size',$result);
    }

    public function manage_size(Request $request, $id = '')
    {
            if($id>0){
                $arr = size::where(['id'=>$id])->get();
                $result['size']=$arr['0']->size;
                $result['status']=$arr['0']->status;
                $result['id']=$arr['0']->id;

            }
            else{
                $result['size'] = '';
                $result['status'] = '';
                $result['id'] = 0;
            } 
        return view('manage_category');
    }

    public function manage_size_process(Request $request){

        $valisator = Validator::make($request->all(),[
              
            'status' => 'required',
            'size' => 'required|unique:category,categoryslug'.$request->post('id'), 
        ]);
        
        $req = $request->all();
        
            if($request->post('id') > 0){
                $model = size::find($request->post('id'));
                $msg="category updated";
            }
            else{
                $model = new size();
                $msg = "Inserted Successfully";
            }
        $model->status=$req['status'];
        $model->size=$req['size'];
        $model->save();
        session()->flash('message','Inserted successfully'); 
        return redirect('size');
      
    }

    public function delete(Request $request, $id){

        // return $request->post();
        $model=size::find($id);
        $model->delete();
        return redirect('category');
    }
   }
