<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BrandAssetSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Lenovo',
                'description' => 'Laptop Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Asus',
                'description' => 'Laptop Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Acer',
                'description' => 'Laptop and Monitor Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'HP',
                'description' => 'Laptop Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Dell',
                'description' => 'Laptop, Monitor Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Apple',
                'description' => 'Laptop Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'LG',
                'description' => 'Monitor Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'BenQ',
                'description' => 'Monitor Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Samsung',
                'description' => 'Monitor, RAM Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'ViewSonic',
                'description' => 'Laptop Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Logitech',
                'description' => 'Mouse, Keyboard Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Logitech',
                'description' => 'Mouse, Keyboard Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'CORSAIR',
                'description' => 'RAM Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Intel',
                'description' => 'Processor Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'AMD',
                'description' => 'Mouse, Keyboard Brand',
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],  
        ];
        $this->db->table('brand_asset')->insertBatch($data);
    }
}
