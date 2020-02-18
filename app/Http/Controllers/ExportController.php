<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exports\ProductsExport;
use App\Product;
use Illuminate\Http\Request;
use Excel;

class ExportController extends Controller
{
    public function index()
    {
        $fields = [
            'id' => 'id',
            'Название' => 'name',
            'Картинки' => 'images',
            'Артикул' => 'sku',
            'Тайтл' => 'title',
            'H1' => 'h1',
            'Ccылка' => 'slug',
            'Хлебные крошки' => 'breadcrumbs_label',
            'Мета описание' => 'meta_description',
            'Цена' => 'price',
            'Категория' => 'category',
            'Контент' => 'content',
            'Свойства' => 'properties'
        ];

        $categories = Category::all()->pluck('id', 'name');
        return view('export.index', compact('fields', 'categories'));

    }
    public function export()
    {
//        $product = Product::with('properties.property')->first();
//        return $product->getProps();
        return Excel::download(new ProductsExport, 'products.xlsx');

//        $i = 0;
//        while (($products = Product::offset($i * 10)->limit(10)->get()) && count($products) > 0) {
//            $i++;
//
//        }
    }
}
