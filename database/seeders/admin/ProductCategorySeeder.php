<?php

namespace Database\Seeders\admin;

use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductCategory::unguard();
        $tablePath = public_path('db/product_category.sql');
        DB::unprepared(file_get_contents($tablePath));

        if(env('EMPTY_DATA') == true){
            $updateProduct = Product::all();
            foreach ($updateProduct as $Product){
                $Product->price = null;
                $Product->ref_code = null;
                $Product->sale_price = null;
                $Product->qty_left = null;
                $Product->qty_max = null;
                $Product->unit = null;
                $Product->pro_shop = 0;
                $Product->save();
            }

            $updateCategory = Category::all();
            foreach ($updateCategory as $Category){
                $Category->cat_shop = null;
                $Category->save();
            }

            $delPro = ['56','57','58','59','60'];
            $deletePro = Product::query()->whereIn('id',$delPro)->get();
            foreach ($deletePro as $Product){
                $Product->forceDelete();
            }

            $delCat = ['38','39','40','41','42','43','44','45'];
            $deleteCategory = Category::query()->whereIn('id',$delCat)->get();
            foreach ($deleteCategory as $Category){
                $Category->forceDelete();
            }

        }

    }
}
