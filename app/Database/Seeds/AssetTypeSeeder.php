<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AssetTypeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "name" => "Main Asset",
                "description" => "Satu Asset Utuh yang bersifat \"main\". \nMisal : \n=> Server \n=> PC \n=> Monitor \n=> Printer \n=> Scanner",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ], 
            [
                "name" => "Spare Part / Komponen",
                "description" => "Tipe asset yang tidak bisa berdiri sendiri. \nDia membutuhkan komponen lain agar menjadi satu item Asset yang utuh \nContoh: \n=> RAM butuh Motherboard, power supply untuk menjadi PC \n=> Operating System",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Consumable",
                "description" => "Tipe Asset yang tidak bisa diukur jumlah pemakaiannya. \nContoh: \n=> Timah untuk Solder \n=> Kabel kabel",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ],
            [
                "name" => "Accessories",
                "description" => "Asset yang digunakan untuk melengkapi \"Main Asset\" \nMisal: \n=> Keyboard \n=> Mouse",
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s"),
            ]
        ];
        $this->db->table('asset_type')->insertBatch($data);
    }
}
