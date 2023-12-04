<?php

namespace App\Http\Controllers;

use App\ProductList;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function ProductListPage(Request $request){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $products=ProductList::all();
        return view('productlist',['name'=>$user,'message'=>$products,'role'=>$role]);


    }
    public function AddProductListPage(Request $request){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        return view('addproductlist',['name'=>$user,'message'=>'','role'=>$role]);
    }
    public function PostAddProductListPage(Request $request){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $fileName=$request->file('picture')->getClientOriginalName();
        $store=$request->file('picture')->storeAs('public/product',$fileName);
        $path='storage/product/'.$fileName;
        $id=IdGenerator::generate(['table' => 'productinfor', 'length' => 6, 'prefix' =>'P']);
        $product = new ProductList;
        $insert=$request->input();//lấy ra 1 mảng key-value của input
        $insert["id"]=$id;//thêm vào 1 cặp key-value của mảng vừa lấy ra
        $insert["PicturePath"]=$path;
        ProductList::create($insert);//tạo mới 1 row, lưu ý phải cấu hình Model lại với fillable khai báo các giá trị muốn insert vào bảng

        return view('addproductlist',['name'=>$user,'role'=>$role,'message'=>'Add success']);
    }

    public function UpdateProductPage(Request $request,$id){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $request->session()->put(['productId'=>$id]);
        $product=ProductList::where('id',$id)->first();
        $productName=$product->ProductName;
        $productDesc=$product->Description;
        $productPrice=$product->Price;
        $productPicture=$product->PicturePath;
        $productCategory=$product->Category;
        return view('updateproduct',['message'=>'','name'=>$user,'role'=>$role,'productName'=>$productName,
    'productPrice'=>$productPrice,'productDesc'=>$productDesc,'productPicture'=>$productPicture,'Category'=>$productCategory]);
    }

    public function PostUpdateProduct(Request $request){
        $user = $request->session()->get('user');
        $role = $request->session()->get('role');
        $id   = $request->session()->get('productId');
        $productName=$request->input('productname');
        $productPrice=intval($request->input('productprice'));
        $productDescription=$request->input('productdescription');
        $productCategory=$request->input('Category');
        $product=ProductList::where('id',$id)->first();
        $product->ProductName=$productName;
        $product->Description=$productDescription;
        $product->Price=$productPrice;
        $product->Category=$productCategory;
        if($request->file('picture')){
            $fileName=$request->file('picture')->getClientOriginalName();
            $store=$request->file('picture')->storeAs('public/product',$fileName);
            $path='storage/product/'.$fileName;
            $product->PicturePath=$path;
        }
        $product->save();
        return redirect('/productlist');
    }

    public function DeleteProduct($id){
        ProductList::where('id',$id)->delete();
        return redirect('/productlist');
    }

    public function SearchByCategory(Request $request){
    $role = $request->session()->get('role');
    $user = $request->session()->get('user');
    $category = $request->input('Category');
    if($category=='All'){
        $productlist = ProductList::all();
    }else{
        $productlist = ProductList::where('Category',$category)->get();
    }
    return view('HOME',['role'=>$role,'name'=>$user,'productlist'=>$productlist]);
    }
}
