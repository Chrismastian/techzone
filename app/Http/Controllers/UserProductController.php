<?php

namespace App\Http\Controllers;

use App\Support\CategoryMap;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Home page - shows every product category
     */
    public function index()
    {
        $featured = collect(CategoryMap::MODELS)
            ->map(fn ($model) => $model::latest()->take(4)->get());

        return view('user.index', [
            'keyboards' => $featured['keyboard'],
            'mouses'    => $featured['mouse'],
            'headsets'  => $featured['headset'],
            'monitors'  => $featured['monitor'],
            'storages'  => $featured['storage'],
        ]);
    }

    /**
     * Product list for one category
     */
    public function category(Request $request, string $category)
    {
        $model = CategoryMap::model($category);

        $products = $model::query()
            ->when($request->search, fn ($q) => $q->where('nama', 'like', '%' . $request->search . '%'))
            ->latest()
            ->paginate(8)
            ->withQueryString();

        return view('user.products', [
            'products' => $products,
            'category' => CategoryMap::label($category),
            'slug'     => $category,
        ]);
    }

    /**
     * Product detail page
     */
    public function show($category, $id)
    {
        $model = CategoryMap::model($category);

        $product = $model::findOrFail($id);

        $related = $model::where('id', '!=', $id)->latest()->take(4)->get();

        return view('user.detail', [
            'product'      => $product,
            'categoryName' => CategoryMap::label($category),
            'related'      => $related,
            'category'     => $category,
        ]);
    }
}
