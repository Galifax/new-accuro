<?php

namespace App\Exports;

use App\Product;
use App\Property;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductsExport implements FromCollection, WithHeadings, WithMapping
{
    private $fields;
    private $categories;

    public function __construct()
    {
        $fields = $_POST['Excel']['fields'] ?? null;
        $fieldss = [];
        if (!empty($fields)) {
            foreach($fields as $field) {
                $fieldss[$field] = $field;
            }
        }
        $this->fields = $fieldss;
        $this->categories = $_POST['Excel']['categories'] ?? null;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        $fields = [];
        if (!empty($this->fields['id'])) {
            $fields[] = 'id';
        }if (!empty($this->fields['name'])) {
            $fields[] = 'name';
        }if (!empty($this->fields['images'])) {
            $fields[] = 'images';
        }if (!empty($this->fields['sku'])) {
            $fields[] = 'sku';
        }if (!empty($this->fields['title'])) {
            $fields[] = 'title';
        }if (!empty($this->fields['h1'])) {
            $fields[] = 'h1';
        }if (!empty($this->fields['slug'])) {
            $fields[] = 'slug';
        }if (!empty($this->fields['breadcrumbs_label'])) {
            $fields[] = 'breadcrumbs_label';
        }if (!empty($this->fields['meta_description'])) {
            $fields[] = 'meta_description';
        }if (!empty($this->fields['price'])) {
            $fields[] = 'price';
        }if (!empty($this->fields['category'])) {
            $fields[] = 'category';
        }if (!empty($this->fields['content'])) {
            $fields[] = 'content';
        }if (!empty($this->fields['properties'])) {
            $fields[] = 'properties';
        }
        return $fields;
    }

    public function collection()
    {
        if ($this->categories != null) {
            return Product::whereIn('category_id', $this->categories)->whereHas('category')->get();
        } else {
            return Product::with('category')->get();
        }
    }

    public function map($product): array
    {
        $fields = [];
        if (!empty($this->fields['id'])) {
            $fields[] = $product->id;
        }if (!empty($this->fields['name'])) {
            $fields[] = $product->name;
        }if (!empty($this->fields['images'])) {
            $fields[] = $product->getPhoto(). ", " . implode(", ", $product->getGallery());
        }if (!empty($this->fields['sku'])) {
            $fields[] = $product->sku;
        }if (!empty($this->fields['title'])) {
            $fields[] = $product->title;
        }if (!empty($this->fields['h1'])) {
            $fields[] = $product->h1;
        }if (!empty($this->fields['slug'])) {
            $fields[] = $product->slug;
        }if (!empty($this->fields['breadcrumbs_label'])) {
            $fields[] = $product->breadcrumbs_label;
        }if (!empty($this->fields['meta_description'])) {
            $fields[] = $product->meta_description;
        }if (!empty($this->fields['price'])) {
            $fields[] = $product->price;
        }if (!empty($this->fields['category'])) {
            $fields[] = $product->category->name;
        }if (!empty($this->fields['content'])) {
            $fields[] = $product->content;
        }if (!empty($this->fields['properties'])) {
            $fields[] = $product->getProps();
        }

        return $fields;
    }
}
