<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoryAssetTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'asset_type_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'null'           => false,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
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
        $this->forge->addForeignKey('asset_type_id', 'asset_type', 'id', 'CASCADE', 'CASCADE', 'fk_categoryasset_assettype');
        $this->forge->createTable('category_asset');
    }

    public function down()
    {
        $this->forge->dropForeignKey('category_asset', 'fk_categoryasset_assettype');
        $this->forge->dropTable('category_asset');
    }
}
