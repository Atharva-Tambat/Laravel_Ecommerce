<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
   
    public function index()
    {
        $result['data']=Coupon::get();
 
        return view('coupon',$result);
    }

    public function manage_coupon(Request $request, $id = '')
    {
        
            if($id>0){
                $arr = Coupon::where(['id'=>$id])->get();

                $result['title']=$arr['0']->title;
                $result['code']=$arr['0']->code;
                $result['value']=$arr['0']->value;
                $result['id']=$arr['0']->id;;

            }
            else{
                $result['title'] = '';
                $result['code'] = '';
                $result['value'] = '';
                $result['id'] = 0;
            }
        return view('manage_coupon',$result);
    }

    public function manage_coupon_process(Request $request){

        $valisator = Validator::make($request->all(),[
              
            'title' => 'required',
            'code' => 'required|unique:coupon,categoryslug'.$request->post('id'), 
            'value' => 'required',
            
        ]);
        
        $req = $request->all();
        
            if($request->post('id') > 0){
                $model = Coupon::find($request->post('id'));
                $msg="coupon updated";
            }
            else{
                $model = new Coupon();
                $msg = "coupon Successfully";
            }
        $model->title=$req['title'];
        $model->code=$req['code'];
        $model->value=$req['value'];
        $model->save();
        session()->flash('message',$msg); 
        return redirect('coupon');
    }
    public function delete(Request $request, $id){

        // return $request->post();
        $model=Coupon::find($id);
        $model->delete();
        return redirect('coupon`');
    }
}
