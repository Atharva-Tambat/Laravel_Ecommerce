<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    
    public function index()
    {  
        $result['data']=Category::get();
        return view('category',$result);
    }
    
    public function manage_category( $id = '')
    {
            if($id>0){
                $arr = Category::where(['id'=>$id])->get();
            
                $result['category']=$arr['0']->category;
                $result['categoryslug']=$arr['0']->categoryslug;
                $result['id']=$arr['0']->id;

            }
            else{
                $result['category'] = '';
                $result['categoryslug'] = '';
                $result['id'] = 0;
            } 
        return view('manage_category');
    }

    public function manage_category_process(Request $request){

        $valisator = Validator::make($request->all(),[
              
            'category' => 'required',
            'categoryslug' => 'required|unique:category,categoryslug'.$request->post('id'), 
        ]);
        
        $req = $request->all();
        
            if($request->post('id') > 0){
                $model = Category::find($request->post('id'));
                $msg="category updated";
            }
            else{
                $model = new Category();
                $msg = "Inserted Successfully";
            }
        $model->category=$req['category'];
        $model->categoryslug=$req['categoryslug'];
        $model->save();
        session()->flash('message','Inserted successfully'); 
        return redirect('category');
      
    }

    public function delete(Request $request, $id){

        // return $request->post();
        $model=Category::find($id);
        $model->status();
        $model->delete();
        return redirect('category');
    }
   
}
