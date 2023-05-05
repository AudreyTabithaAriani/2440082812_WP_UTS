<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\userModel;
use App\Models\categories;
use App\Models\coffeeModel;
use Illuminate\Database\Seeder;
use App\Models\transactionModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        categories::create([
            "coffee_category" => "Signature",
            "slug" => "signature",
            "image_address" => "img23.png"
        ]);

        categories::create([
            "coffee_category" => "Brewed",
            "slug" => "brewed",
            "image_address" => "img14.png"
        ]);

        categories::create([
            "coffee_category" => "Espresso",
            "slug" => "espresso",
            "image_address" => "img15.png"
        ]);

        categories::create([
            "coffee_category" => "Non-Coffee",
            "slug" => "non-coffee",
            "image_address" => "img8.png"
        ]);

        coffeeModel::create([
            "category_id" => 1,
            "coffee_name" => "Hazelnut Latte",
            "coffee_price" => 45000,
            "image_address" => "img27.png"
        ]);

        coffeeModel::create([
            "category_id" => 1,
            "coffee_name" => "Split",
            "coffee_price" => 42000,
            "image_address" => "img26.png"
        ]);

        coffeeModel::create([
            "category_id" => 1,
            "coffee_name" => "Charcoal Mocha",
            "coffee_price" => 78000,
            "image_address" => "img25.png"
        ]);

        coffeeModel::create([
            "category_id" => 1,
            "coffee_name" => "Spro Tonic",
            "coffee_price" => 78000,
            "image_address" => "img24.png"
        ]);

        coffeeModel::create([
            "category_id" => 1,
            "coffee_name" => "Safe & Sound",
            "coffee_price" => 78000,
            "image_address" => "img23.png"
        ]);

        coffeeModel::create([
            "category_id" => 2,
            "coffee_name" => "Cold Brew",
            "coffee_price" => 40000,
            "image_address" => "img22.png"
        ]);

        coffeeModel::create([
            "category_id" => 2,
            "coffee_name" => "V60",
            "coffee_price" => 42000,
            "image_address" => "img21.png"
        ]);

        coffeeModel::create([
            "category_id" => 2,
            "coffee_name" => "Hot Brew",
            "coffee_price" => 38000,
            "image_address" => "img19.png"
        ]);

        coffeeModel::create([
            "category_id" => 2,
            "coffee_name" => "Nitro Cold Brew",
            "coffee_price" => 42000,
            "image_address" => "img18.png"
        ]);

        coffeeModel::create([
            "category_id" => 2,
            "coffee_name" => "Vietnamese Cold Brew",
            "coffee_price" => 40000,
            "image_address" => "img17.png"
        ]);

        coffeeModel::create([
            "category_id" => 3,
            "coffee_name" => "Single Shot",
            "coffee_price" => 30000,
            "image_address" => "img16.png"
        ]);

        coffeeModel::create([
            "category_id" => 3,
            "coffee_name" => "Doppio",
            "coffee_price" => 38000,
            "image_address" => "img15.png"
        ]);

        coffeeModel::create([
            "category_id" => 3,
            "coffee_name" => "Americano",
            "coffee_price" => 35000,
            "image_address" => "img12.png"
        ]);

        coffeeModel::create([
            "category_id" => 3,
            "coffee_name" => "Ristretto",
            "coffee_price" => 38000,
            "image_address" => "img13.png"
        ]);

        coffeeModel::create([
            "category_id" => 3,
            "coffee_name" => "Lungo",
            "coffee_price" => 40000,
            "image_address" => "img12.png"
        ]);

        coffeeModel::create([
            "category_id" => 4,
            "coffee_name" => "Dirty Chai",
            "coffee_price" => 50000,
            "image_address" => "img11.png"
        ]);

        coffeeModel::create([
            "category_id" => 4,
            "coffee_name" => "Melta Matcha",
            "coffee_price" => 50000,
            "image_address" => "img10.png"
        ]);

        coffeeModel::create([
            "category_id" => 4,
            "coffee_name" => "Melta Hojicha",
            "coffee_price" => 50000,
            "image_address" => "img9.png"
        ]);

        coffeeModel::create([
            "category_id" => 4,
            "coffee_name" => "Artisan Tea",
            "coffee_price" => 35000,
            "image_address" => "img8.png"
        ]);

        coffeeModel::create([
            "category_id" => 4,
            "coffee_name" => "Peach Ice Tea",
            "coffee_price" => 35000,
            "image_address" => "img7.png"
        ]);

        userModel::create([
            "user_name" => "Vico Lomar",
            "loyalty" => "Gold Level"
        ]);

        userModel::create([
            "user_name" => "Fei Fei Li",
            "loyalty" => "Green Level"
        ]);

        transactionModel::create([
            "user_id" => 1,
            "transaction_time" => "2023-03-19",
            "coffee_name" => "Hot Brew",
            "coffee_price" => 38000
        ]);

        transactionModel::create([
            "user_id" => 1,
            "transaction_time" => "2023-03-20",
            "coffee_name" => "Hot Brew",
            "coffee_price" => 38000
        ]);

        transactionModel::create([
            "user_id" => 1,
            "transaction_time" => "2023-03-21",
            "coffee_name" => "Single Shot",
            "coffee_price" => 30000
        ]);

        transactionModel::create([
            "user_id" => 2,
            "transaction_time" => "2023-03-18",
            "coffee_name" => "Melta Matcha",
            "coffee_price" => 50000
        ]);

        transactionModel::create([
            "user_id" => 2,
            "transaction_time" => "2023-03-19",
            "coffee_name" => "Dirty Chai",
            "coffee_price" => 50000
        ]);

        transactionModel::create([
            "user_id" => 2,
            "transaction_time" => "2023-03-21",
            "coffee_name" => "V60",
            "coffee_price" => 42000
        ]);
    }
}
