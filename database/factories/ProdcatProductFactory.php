<?php

// database/factories/ProdcatProductFactory.php

use App\Models\ProdcatProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdcatProductFactory extends Factory
{
    protected $model = ProdcatProduct::class;

    public function definition()
    {
        return [
            'product_id' => rand(1, 30),
            'prodcat_id' => rand(1, 10),
        ];
    }
}
