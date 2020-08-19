<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    public function index(Request $request){
        $request->session()->forget('svalue');
        $products = Products::all();
        return view('index')->with('products',$products);
    }

    public function step1(Request $request){
        $svalue=$request->session()->get('svalue');
        return view('step1')->with('svalue',$svalue);
    }

    public function createstep1(Request $request){
        $validatedData = $request->validate([
            'title' => 'required:svalue',
            'brand'=>'required',
            'category'=>'required',
            'status'=>'required',
            'featured'=>'required',
            'from'=>'required',
            'to'=>'required',

        ]);

        if(empty($request->session()->get('svalue'))){
            $svalue=new Products();

            $svalue->fill($validatedData);
            $svalue->pf1 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['from'])));
            $svalue->pt1 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['to'])));

            $request->session()->put('svalue', $svalue);

        }else{
//            $svalue=new Products();
            $svalue = $request->session()->get('svalue');
            $svalue->fill($validatedData);
            $svalue->pf1 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['from'])));
            $svalue->pt1 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['to'])));
            $request->session()->put('svalue', $svalue);

        }
        return redirect('/step2');
    }

    public function step2(Request $request){
        $svalue=$request->session()->get('svalue');

        return view('step2')->with('svalue',$svalue);
    }

    public function createstep2(Request $request){
        $validatedData=  $request->validate([
            'from'=>'required',
            'to'=>'required',
            'price'=>'required',
            'sp'=>'required',
            'img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url'=>'required'
        ]);

            if(empty($request->session()->get('svalue'))){
                $svalue=new Products();
                $svalue->fill($validatedData);
                if($request->hasFile('img')) {
                    $filename = 'img-' . time() . $request->file('img')->getClientOriginalName();
                    $path = $request->file('img')->storeAs('/img', $filename);
                    $svalue->img = $filename;
                }
                $svalue->pf2 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['from'])));
                $svalue->pt2 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['to'])));
                $request->session()->put('svalue', $svalue);
            }else{
                $svalue = $request->session()->get('svalue');
//            $svalue=new Products();
                $svalue->fill($validatedData);
                if($request->hasFile('img')) {
                    $filename = 'img-' . time() . $request->file('img')->getClientOriginalName();
                    $path = $request->file('img')->storeAs('/img', $filename);
                    $svalue->img = $filename;
                }
                $svalue->pf2 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['from'])));
                $svalue->pt2 =  date('Y-m-d', strtotime(str_replace('-', '/', $request['to'])));
                $request->session()->put('svalue', $svalue);
            }

        return redirect('/step4');
    }

    public function remove(Request $request){
        $svalue=$request->session()->get('svalue');
        $svalue->img=null;
        return redirect('step2');
    }

    public  function step4(Request $request){
        $svalue=$request->session()->get('svalue');
        return view('step4')->with('svalue',$svalue);
}
public function createstep4(Request $request){
    $validatedData = $request->validate([
        'keyword' => 'required',
        'seodes'=>'required'
    ]);
    if(empty($request->session()->get('svalue'))){
        $svalue=new Products();
        $svalue->fill($validatedData);
        $request->session()->put('svalue', $svalue);
    }else{
        $svalue = $request->session()->get('svalue');
//        $svalue=new Products();
        $svalue->fill($validatedData);
        $request->session()->put('svalue', $svalue);

    }

    return view('review',compact('svalue'));
}

    public function store(Request $request)
    {
        $svalue = $request->session()->get('svalue');

        $svalue->save();

        return redirect('/data');
    }
}
