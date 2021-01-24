<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name'=>'iPhone 11 Pro 64GB',
             'category_id' => 1,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone 12 64GB',
             'category_id' => 2,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone 7 Plus 64GB',
             'category_id' => 2,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone Xs Max 64GB',
             'category_id' => 3,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone XS 512GB',
             'category_id' => 3,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone XR 256GB',
             'category_id' => 4,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone 12 Pro 64GB',
             'category_id' => 4,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone 8 Plus 64GB',
             'category_id' => 1,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone 8 256GB',
             'category_id' => 2,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            ['name'=>'iPhone X 256GB',
             'category_id' => 3,
             'image_url'=>'https://cdn.tgdd.vn/Products/Images/42/188705/iphone-11-pro-xam-600x600-200x200.jpg',
             'description'=>'Điện thoại iPhone 11 Pro 64GB chính hãng 
                            là smartphone 2 sim, giá rẻ, có trả góp. 
                            Giao hàng tận nơi trong 1 giờ, 1 đổi 1 tháng 
                            đầu nếu lỗi. MUA NGAY!',
             'price'=>10000000,
             'sale_percent'=>15
            ],
            
        ];

        try {
            foreach ($products as $pro) {
                Product::create($pro);
            }
        } catch (\Throwable $th) {

        }
    }
}
