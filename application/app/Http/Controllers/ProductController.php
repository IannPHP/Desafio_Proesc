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
       $product = Product::find($id);
       if (!$product) {
           return redirect()->route('produtos')->with('error', 'Produto não encontrado.');
       }
       return view('produtos.edit', ['categories' => $categories, 'produtos' => $product]);
   }

   public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('produtos')->with('error', 'Produto não encontrado.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string'
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);

        return redirect()->route('produtos')->with('success', 'Produto atualizado com sucesso!');
    }

   public function destroy($id)
   {
       $product = $this->objProduct->find($id)->delete();
       return redirect('produtos/listar')->with('msg', 'Categoria excluída com sucesso.');
   }
}
