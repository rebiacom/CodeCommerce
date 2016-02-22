<?php
namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;
use Illuminate\Support\Facades\Redirect;

class AdminCategoriesController extends Controller
{
    private $categories;
    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function index()
    {
        $categories = $this->categories->all();
        return view('admin/Categories/categories', compact('categories'));
    }

    public function create()
    {
        return view('admin/Categories/create');
    }

    public function store(Requests\CategoryRequest $request)
    {
        $input = $request->all();
        $category = $this->categories->fill($input);
        $category->save();

        return redirect()->route('categories');
    }

    public function destroy($id)
    {
        $this->categories->find($id)->delete();
        return redirect()->route('categories');
    }
}
