<?php namespace App\Models;

use CodeIgniter\Model;

date_default_timezone_set('Africa/Nairobi');

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['post_title', 'post_content'];

    protected $useTimestamps = true;
    protected $createdField = 'post_created_at';
    protected $updatedField = 'post_updated_at';
    // protected $deletedField = 'post_deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;


    protected $beforeInsert = ['checkName'];
    /**
     * Events that CI4 uses
     * beforeInsert
     * afterInsert
     * beforeUpdate
     * afterUpdate
     * afterFind
     * afterDelete
     */

    public function checkName(array $data)
    {
        $newTitle = $data['data']['post_title'] . ' Extra Features';
        $data['data']['post_title'] = $newTitle;

        return $data;
    }
}
