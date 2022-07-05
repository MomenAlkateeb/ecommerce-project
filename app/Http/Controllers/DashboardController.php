<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\order;
use App\Models\catagory;
use App\Models\category;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function view_catagory(){
        $data = catagory::all();
        if(Auth::id()){
            return view('admin.catagory' , compact('data'));

        }
        else{
            return redirect('login');
        }

    }


   public function add_catagory(Request $request){
    $name = $request->input('cata_name');

    $is_insert = catagory::insert(['catagories_name'=>$name]);

    return redirect()->back()->with('add_message','add catagory successfully');
  }


public function remove_category($id){
    $remove = catagory::find($id);
    $remove->delete();

    return redirect()->back()->with('delete_message', 'deleted successfully' );
}
public function view_product(){
    if(Auth::id()){

        return view('admin.add_product');
    }
    else{
        return redirect('login');
    }
}

public function add_product(Request $request){

    $add_name = $request->input('product_name');

    $description = $request->input('product_description');

    $price = $request->input('product_price');

    $size = $request->input('product_size');

    $category = $request->input('product_category');

    $image = $request->input('product_image');

    $add_success = products::insert(['name'=>$add_name ,
    'description' =>$description ,
    'category'    =>$category ,
    'price'       =>$price ,
    'image'      =>$image ,
    'size'       =>$size
]);
 return redirect()->back()->with('product_message' , 'product add  successfully');

}

public function show_product(){
    $product = products::simplePaginate(15);
    if(Auth::id()){

        return view ('admin.view_product' ,compact('product') );
    }
    else{
        return redirect('login');
    }
}

public function delete_product($id){
    $remove_product = products::find($id);
    $remove_product->delete();
    return redirect()->back()->with('remove_message' , " product deleted successfully");
}
public function update_product($id){
    $update = products::find($id);
    $category = catagory::all();
    return view('admin.update_product' , compact('update', 'category'));
}

public function confirm_update(Request $request, $id){
    $confirm = products::find($id);
    $confirm->name = $request->product_name;
    $confirm->category = $request->product_category;
    $confirm->price = $request->product_price;
    $confirm->size = $request->product_size;
    $confirm->image = $request->product_image;
    $confirm->save();
    return redirect()->back()->with('confirm message' , "updated successfully");
}
public function product_details($id){
    $details = products::find($id);
    return view ('home.details' , compact('details'));
}
public function view_order(){
    if(Auth::id()){

        $orders = order::simplePaginate(15);
    }
    else{
        return redirect('login');
    }

    return view ('admin.view_order' , compact('orders'));
}
public function update_01($id){

    $update_01 = order::find($id);

    $update_01 -> delivery_status = 'processing';



    $update_01->save();
return redirect()->back()->with('update_message' , "updated successfully");
}
public function update_02($id){
    $update_02 = order::find($id);
    $update_02 -> delivery_status = 'charged';

    $update_02->save();
    return redirect()->back()->with('update_message' , "updated successfully");
}
public function update_03($id){
    $update_03 = order::find($id);
    $update_03 -> delivery_status = 'delivered';

    $update_03->save();
    return redirect()->back()->with('update_message' , "updated successfully");
}
public function update_04($id){
    $update_04 = order::find($id);
    $update_04 -> delivery_status = 'received';

    $update_04->save();
    return redirect()->back()->with('update_message' , "updated successfully");
}
public function update_05($id){
    $update_05 = order::find($id);
    $update_05->delete();
    return redirect()->back()->with('delete_message' , "deleted successfully");
}


public function view_dashboard(){
    if(Auth::id()){

        return view ('admin.body');
    }
    else{
        return redirect('login');
    }
}


}
