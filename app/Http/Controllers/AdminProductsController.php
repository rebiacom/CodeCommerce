<?php
namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;

class AdminProductsController extends Controller
{
    private $products;
    public function __construct(Product $product)
    {
        $this->products = $product;
    }

    public function index()
    {
        $products = $this->products->all();
        return view('products/products', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Requests\ProductRequest $request)
    {
        $input = $request->all();
        $product = $this->products->fill($input);
        $product->save();

        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $this->products->find($id)->delete();
        return redirect()->route('products');
    }
}
