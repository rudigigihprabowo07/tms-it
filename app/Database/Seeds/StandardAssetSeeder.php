<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StandardAssetSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "category_asset_id" => "3",
                "brand_asset_id" => "12",
                "name" => "Canon G2010",
                "quantity" => "12",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "category_asset_id" => "3",
                "brand_asset_id" => "12",
                "name" => "Canon E410",
                "quantity" => "2",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "category_asset_id" => "3",
                "brand_asset_id" => "12",
                "name" => "Canon G2770",
                "quantity" => "5",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "category_asset_id" => "3",
                "brand_asset_id" => "12",
                "name" => "Canon G2020",
                "quantity" => "7",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "category_asset_id" => "4",
                "brand_asset_id" => "7",
                "name" => "LG LED Monitor 19M38H",
                "quantity" => "20",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
        ];
        $this->db->table('standard_asset')->insertBatch($data);
    }
}
