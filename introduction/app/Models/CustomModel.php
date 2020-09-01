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

    /**
     * Gets all the post from db
     */
    public function all()
    {
        // SELECT * FROM posts;

        return $this->db->table('posts')->get()->getResult();
    }

    public function where()
    {
        // return $this->db->table('posts')
        //                 ->where(['post_id >=' => 90])
        //                 ->get()
        //                 ->getRow();
        return $this->db->table('posts')
                        ->where(['post_id >' => 90])
                        ->where(['post_id <' => 95])
                        ->orderBy('post_id','ASC ')
                        ->get()
                        ->getResult();
    }

    public function getPosts()
    {
        $builder = $this->db->table('posts');
        $builder->join('users', 'posts.post_author_id = users.user_id');
        $posts = $builder->get()->getResult();

        return $posts;
    }
}
