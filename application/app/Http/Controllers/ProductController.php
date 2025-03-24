<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

class ProductController extends Controller
{    
    private $objProduct;

    public function __construct(){
        $this->objProduct = new Product();
    }

    public function index()
    {
     $produtos = Product::all();
     return view('produtos', ['produtos' => $produtos] );
    } 

   public function listar()
   {
    $produtos = Product::all();
    return view('produtos', ['produtos' => $produtos] );
   }

   public function create()
   {
    $categories = Category::all();
    return view('produtos.create', ['categories' => $categories]);
   }
   public function store(ProductRequest $request)
   {
       $product= $this->objProduct->create([
           'name'=>$request->name,
           'slug'=> str_slug($request->name),
           'price'=> $request->price,
           'category_id'=> $request->category_id,
           'description'=>$request->description
       ]);
       if($product){
           return redirect('produtos/listar');
       }
   }

   public function edit($id)
   {
    $categories = \App\Models\Category::all();
    $product = $this->objProduct->find($id);
    return view('produtos.edit', ['categories' => $categories, 'product' => $product]);
   }

   public function update(ProductRequest $request, $id)
   {
    $this->objProduct->where(['id' => $id])->update([
        'name'=>$request->name,
        'slug'=> str_slug($request->name),
        'price'=> $request->price,
        'category_id'=> $request->category_id,
        'description'=>$request->description
    ]);
    return redirect('produtos/listar');
   }

   public function destroy($id)
   {
       $product = $this->objProduct->find($id)->delete();
       return redirect('produtos/listar')->with('msg', 'Categoria excluída com sucesso.');
   }
}