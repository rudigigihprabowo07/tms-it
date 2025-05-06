<?php

namespace App\Models;

use CodeIgniter\Model;

class StandardAssetModel extends Model
{
    protected $table            = 'standard_asset';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['category_asset_id', 'brand_asset_id', 'name', 'quantity'];

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
        'category_asset_id' => 'required|is_natural_no_zero',
        'brand_asset_id' => 'required|is_natural_no_zero',
        'name' => 'required|max_length[100]',
        'quantity' => 'required|is_natural_no_zero'
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

    public function getStandardAsset()
    {
        $builder = $this->db->table('standard_asset');
        $builder->select('standard_asset.id as standard_asset_id, category_asset.id as category_asset_id, category_asset.name as category_asset_name, brand_asset.id as brand_asset_id,brand_asset.name as brand_asset_name,standard_asset.name as standard_asset_name, quantity');
        $builder->join('category_asset', 'standard_asset.category_asset_id = category_asset.id');
        $builder->join('brand_asset', 'standard_asset.brand_asset_id = brand_asset.id');
        $builder->where('standard_asset.deleted_at', null);
        $query = $builder->orderBy('standard_asset_id', 'DESC')->get();
        return $query->getResult();
    }

    public function getSpecificStandardAsset($id)
    {
        $builder = $this->db->table('standard_asset');
        $builder->select('standard_asset.id as standard_asset_id, category_asset.id as category_asset_id, category_asset.name as category_asset_name, brand_asset.id as brand_asset_id,brand_asset.name as brand_asset_name,standard_asset.name as standard_asset_name, quantity');
        $builder->join('category_asset', 'standard_asset.category_asset_id = category_asset.id');
        $builder->join('brand_asset', 'standard_asset.brand_asset_id = brand_asset.id');
        $builder->where('standard_asset.id', $id);
        $builder->where('standard_asset.deleted_at', null);
        $query = $builder->orderBy('standard_asset_id', 'DESC')->get();
        return $query->getResult();
    }
}
