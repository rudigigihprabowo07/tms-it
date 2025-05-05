<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStandardAssetTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category_asset_id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
                'null' => false,
            ],
            'brand_asset_id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => '5',
                'null' => false,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'deleted_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_asset_id', 'category_asset', 'id', 'CASCADE', 'CASCADE', 'fk_standardasset_categoryasset');
        $this->forge->addForeignKey('brand_asset_id', 'brand_asset', 'id', 'CASCADE', 'CASCADE', 'fk_standardasset_brandasset');
        $this->forge->createTable('standard_asset');
    }

    public function down()
    {
        $this->forge->dropForeignKey('standard_asset', 'fk_standardasset_categoryasset');
        $this->forge->dropForeignKey('standard_asset', 'fk_standardasset_brandasset');
        $this->forge->dropTable('standard_asset');
    }
}
