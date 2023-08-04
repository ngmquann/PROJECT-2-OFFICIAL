<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $categorys = DB::table('tb1_category_product')->where('category_status', '1')->get();
        $brand = DB::table('tb1_brand_product')->where('brand_status', '1')->get();
        $data_home = [
            'cate_edit' => $categorys,
            'brand' => $brand,
        ];

        view()->composer('layoutfrontend', function ($view) use ($data_home) {
            $view->with($data_home);
        });

        // TẠI SAO PHẢI XÀI 2 LAYOUT CHO 1 TRANG USER?

        view()->composer('layout.layout2', function ($view) {
            $categorys = DB::table('tb1_category_product')->where('category_status', '1')->where('category_id', '1')->orderBy('category_id', 'desc')->get();
            $category = DB::table('tb1_category_product')->where('category_status', '1')->whereNotIn('category_id', [1])->get();
            $brand = DB::table('tb1_brand_product')->where('brand_status', '1')->get();
            $view->with(['datas_cate' => $categorys])->with(['datas_categ' => $category])->with(['brand' => $brand]);
        });

    }
}
