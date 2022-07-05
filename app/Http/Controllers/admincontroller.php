<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\confirm;
use App\Models\order;
use App\Models\products;
use App\Models\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Mockery\Undefined;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareExactlyOneParameterException;

class admincontroller extends Controller
{
    public function redirect(){
        $user_type=Auth::user()->user_type;

        if($user_type==1){
            $total_product = products::all()->count();
            $total_order = order::all()->count();
            $total_user = User::all()->count();
            $order = order::all();
            foreach($order as $orders){
                $total_cost = 0;
                $total_cost+= $orders->product_price;

            }

            return view('admin.home' , compact('total_product' , 'total_order' , 'total_user' , 'order',  ));

        }
        else{
            $product = products::paginate(2);
            return view('home.userpage' , compact('product'));
        }
    }

    public function index(){
        $product = products::paginate(15);
        return view('home.userpage' , compact('product'));
    }
    public function product_cart(REquest $request ,$id){
        if(Auth::id()){
            $user =Auth::user();
            $user_id = $user->id;
            $product = products::find($id);

            $name = $user->name;
            if($product->price!=null){
                $product_price=$product->price *$product_quantity = $request->input('number');
            }

            $email = $user->email;
            $id = $user->id;

            $product_name = $product->name;

            $product_size= $product->size;

            $product_image = $product->image;

            $product_id = $product->id;

            $product_quantity = $request->input('number');

            $is_insert = Cart::insert([
            'name'=>$name,
            'email'=>$email,
            'user_id'=>$id,
            'product_name'=> $product_name,
            'product_price'=>$product_price,
            'product_size'=>$product_size,
            'product_image'=>$product_image,
            'product_quantity'=>$product_quantity,
            'product_id'=>$product_id,
        ]);
        return redirect()->back()->with('message' , 'Add product successfully');

        }
        else{
            return redirect('login');
        }
    }
    public function cart_show(){

        if(Auth::user()){
            $id = optional(Auth::user())->id;

            $cart = Cart::where('user_id' , '=' , $id)->get();

            return view ('home.cart_show' , compact('cart'));


        }
        else{
            return redirect('login');
        }



    }

    public function delete_cart($id){
        $remove= Cart::find($id);
        $remove->delete();
        return redirect()->back();
    }
    public function cash_order(){
        $user  = optional(Auth::user());
        $user_id = $user->id;
        $data = Cart::where('user_id','=',$user_id)->get();

        foreach($data as $Data){
            $name = $Data->name;
            $email = $Data->email;
            $user_id = $Data->user_id;

            $product_name = $Data->product_name;
            $product_price = $Data->product_price;
            $product_quantity = $Data->product_quantity;
            $product_image = $Data->product_image;
            $product_size = $Data->product_size;
            $product_id = $Data->product_id;

            $insert = order::insert([
            'user_name'=>$name,
            'user_email'=>$email,
            'user_id'=>$user_id,

            'product_name'=>$product_name,
            'product_price'=>$product_price,
            'product_quantity'=>$product_quantity,
            'product_image'=>$product_image,
            'product_size'=>$product_size,
            'product_id'=>$product_id,
            'payment_status'=>'cash on delivery',
            'delivery_status'=>'processing',

        ]);

        $cart_id = $Data->id;

        $cart = Cart::find($cart_id);

        $cart->delete();
    }
           return redirect()->back()->with('message' , 'send the order successfully,
            we will connect  with you soon....');

    }

    public function card_order(){
        return redirect()->back()->with('card_message' ,' sorry ,This payment method is not currently available and will be available soon...');
    }

    public function Confirmation(){
        return view ('home.confirm');
    }

    public function confirm_info(Request $request){
        $home = $request->input('home');
        $Apartment = $request->input('Apartment');
        $city = $request->input('city');
        $state = $request->input('state');
        $country = $request->input('country');
        $postal = $request->input('postal');
        $name =    Auth::user()->name;

        $is_insert = confirm::insert([
            'Home and street address'=>$home,
            'Apartment number'=>$Apartment,
            'the city name'=>$city,
            'State name'=>$state,
            // 'country name='=>$country,
            'Postal code'=>$postal,
            'name'=>$name,
        ]);
        return view('home.payment')->with('confirm_message' , 'The purchase process must be completed, by choosing the payment method and completing the process...');
    }
    public function costumer_order(){
        if(Auth::id()){
            $user = Auth::user();
            $user_id = $user->id;

            $orders = order::where('user_id' , '=' , "$user_id")->simplePaginate(15);

            return view('home.costumer_order' , compact('orders') );
        }
        else{
            return redirect('login');
        }
    }
   public function all_products(){
    $product = products::simplePaginate(15);
    return view ('home.all_products' , compact('product'));
    return redirect()->back();
   }
   public function search_products(Request $request ){

    $product = products::where('name' , '=' , $request->search)->simplePaginate(15);
    return view('home.all_products' , compact('product'));

}


}
