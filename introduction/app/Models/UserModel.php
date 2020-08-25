<?php namespace App\Models;

use CodeIgniter\Model;

date_default_timezone_set('Africa/Nairobi');

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_email', 'user_password'];

    protected $useTimestamps = true;
    protected $createdField = 'user_created_at';
    protected $updatedField = 'user_updated_at';

}
