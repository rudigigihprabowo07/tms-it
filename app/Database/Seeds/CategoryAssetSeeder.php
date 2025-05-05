<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoryAssetSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "name" => "PC Desktop",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "PC Server",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Printer",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Monitor",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Scanner",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Pesawat Telepon",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Router",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Stabilizer",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Switch",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Notebook",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "CCTV",
                "asset_type_id" => "1",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Mouse",
                "asset_type_id" => "4",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Keyboard",
                "asset_type_id" => "4",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Processor",
                "asset_type_id" => "2",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "RAM",
                "asset_type_id" => "2",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "IP Address",
                "asset_type_id" => "4",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
        ];
        $this->db->table('category_asset')->insertBatch($data);
    }
}
