<?php


namespace App\Services\backend;
use App\Models\Product;
use App\Models\Product_image;
use App\Http\Requests\ProductRequest;
use Illuminate\Database\Eloquent\Model;

class ProductService
{
    public function getAll(){
        return Product::paginate(10);
    }
    public function findProductById($id){
        return Product::find($id);
    }
    public function getProductOnDelete(){
        return Product::onlyTrashed()->get();
    }
    public function addProduct(ProductRequest $request)
    {
        $product = Product::create([
            'name' =>$request->get('name'),
            'name_vi' =>$request->get('name_vi'),
            'price' =>$request->get('price'),
            'SKU' =>$request->get('SKU'),
            'Slug' =>$request->get('Slug'),
            'category_id' =>$request->get('category_id'),
            'description1' =>$request->get('description1'),
            'description2' =>$request->get('description2'),
            'description3' =>$request->get('description3'),
        ]);
        $image = new Product_image(['product_id' => $product ->id,'image_name'=>$request->get('image')]);
        $product->images()->save($image);
        return $product;
    }
    public function updateProduct(ProductRequest $request,$id){
        $product= Product::find($id);
        $product -> update([
            'name' =>$request->get('name'),
            'name_vi' =>$request->get('name_vi'),
            'price' =>$request->get('price'),
            'SKU' =>$request->get('SKU'),
            'Slug' =>$request->get('Slug'),
            'category_id' =>$request->get('category_id'),
            'description1' =>$request->get('description1'),
            'description2' =>$request->get('description2'),
            'description3' =>$request->get('description3'),
        ]);
        $image = new Product_image(['product_id' => $id,'image_name'=>$request->get('image')]);
        $product->images()->delete();
        $product->images()->save($image);
        return $product;
    }
    public function delete($id){
        $product =Product::find($id)->delete();
        return $product;
    }
    public function HardDelete($id){
        $product =Product::withTrashed()->find($id)->forceDelete();
        return $product;
    }
    public function restored($id){
        $product =Product::withTrashed()->find($id)->restore();
        return $product;
    }
}
