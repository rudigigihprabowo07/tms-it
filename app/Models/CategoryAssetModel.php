<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryAssetModel extends Model
{
    protected $table            = 'category_asset';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'asset_type_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'asset_type_id' => 'required|is_natural_no_zero',
        'name'          => 'required|max_length[100]',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
    /*
    join category_asset table and asset_type table
    select category_asset id and name
    */
    public function getAssetTypeWithId()
    {
        $builder = $this->db->table('category_asset');
        $builder->select('category_asset.id as category_id, category_asset.name as category_name, asset_type.id as asset_type_id, asset_type.name as asset_type_name');
        $builder->join('asset_type', 'category_asset.asset_type_id = asset_type.id');
        $builder->where('category_asset.deleted_at', null);
        $query = $builder->orderBy('category_id', 'DESC')->get();
        return $query->getResult();
    }

    // get all data in join table without deleted data
    public function getAssetType()
    {
        $builder = $this->db->table('category_asset');
        $builder->select('category_asset.id as category_id, category_asset.name as category_name, asset_type.name as asset_type_name');
        $builder->join('asset_type', 'category_asset.asset_type_id = asset_type.id');
        $builder->where('category_asset.deleted_at', null);
        $query = $builder->orderBy('category_id', 'DESC')->get();
        return $query->getResult();
    }

    // show specific data where ID
    public function getSpecificCategoryAsset($id)
    {
        $builder = $this->db->table('category_asset');
        $builder->select('category_asset.id as category_asset_id, category_asset.name as category_name, asset_type.id as asset_type_id, asset_type.name as asset_type_name');
        $builder->join('asset_type', 'category_asset.asset_type_id = asset_type.id', 'LEFT');
        $builder->where('category_asset.id', $id);
        $builder->where('category_asset.deleted_at', null);
        $query = $builder->get();
        return $query->getResult();
    }
}