<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

date_default_timezone_set('Africa/Nairobi');

class CustomModel
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getPosts()
    {
        $builder = $this->db->table('posts');
        $builder->join('users', 'posts.post_author_id = users.user_id');
        $posts = $builder->get()->getResult();

        return $posts;
    }
}
