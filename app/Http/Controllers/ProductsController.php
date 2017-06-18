<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\product_users;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['create', 'store', 'edit', 'update', 'index']]);
    }

    public function getProducts()
    {
        $products = Product::all();

        //return View('product.products',$products);
        return view('product.product', compact('products'));

    }

    public function index()
    {
        $products = Product::all();

        //return View('product.products',$products);
        return view('cms.webshop.products', compact('products'));

    }
    public function indexcms(){
        $products = Product::all();

        return view('cms.webshop.index', compact('products'));
    }

    // for session or logged in user
    public function getAddToCart(Request $request, $id)
    {


        if (Auth::check()) {
            $product_users = new product_users();
            $product_users->product_id = $id;
            $product_users->users_id = Auth::id();
            $product_users->save();



        } else {

            $product = Product::find($id);
            $oldCart = Session('cart');


            $cart = new Cart($oldCart);
            $cart->add($product, $product->id);


            $request->session()->put('cart', $cart);
            Session::save();
        }

        $products = Product::all();
        return redirect()->route('/products');
        //return view('product.product', compact('products'));

    }

    public function show(Product $product) {
        return view('product.detailed-product', compact('product'));
    }

    public function create()
    {
        return view('cms.webshop.add-item');
    }

    public function store(ProductRequest $request) {

        $lastid = Product::create($request->all())->id;
        $product = Product::findOrFail($lastid);


        $file = $request->file('image');




        $filename = time(). '-' . $file->getClientOriginalName();

        $path = $filename;

        //dd($filename);

        $file->move(public_path().'/images/', $filename);

        $product->image = $path;

        //dd($path);
        //$post->photo = '/uploads/'.$filename;


        //$product->image = $filename;
        //Storage::disk('uploads')->put($file->getFilename(),$file);
        $product->update();
//        $product->save();
        return redirect('cms/producten');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('cms.webshop.edit-product', compact('product'));
    }

    public function update(Product $product, ProductRequest $request) {
        $product->update($request->all());
        return redirect('cms/producten');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/producten');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('cms/producten');
    }

    public function search()
    {

        $searchString = Input::get('search');


        //  Returns an array of products that have the query string located somewhere within
        // our products.
        $products = Product::Search($searchString)->get();

        //  returns a view and passes the view the list of articles and the original query.
        return view('product.product', compact('products'));
    }
}