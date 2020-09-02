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
        return $this->db->table('posts')
                        ->where(['post_id >' => 90])
                        ->where(['post_id <' => 95])
                        ->orderBy('post_id', 'ASC ')
                        ->get()
                        ->getResult();
    }


    public function join()
    {
        return $this->db->table('posts')
                    ->where('post_id >', 90)
                    ->where('post_id <', 95)
                    // ->join('users', 'posts.post_author_id = users.user_id','left')
                    // ->join('users', 'posts.post_author_id = users.user_id','right')
                    ->join('users', 'posts.post_author_id = users.user_id', 'inner')
                    ->get()
                    ->getResult();
    }

    public function like()
    {
        return $this->db->table('posts')
                    // ->like('post_title', 'Optio') // %string%
                    // ->like('post_title', 'Optio', 'both') // %string%
                    // ->like('post_title', 'Optio', 'before') // %string
                    ->like('post_title', 'Optio', 'after') // string%
                    ->join('users', 'posts.post_author_id = users.user_id')
                    ->get()
                    ->getResult();
    }

    public function grouping()
    {
        // select * from posts where (post_id = 25 and post_date < 1990-01-01 00:00:00) or post_author_id = 10
        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id' => '25', 'post_created_at <' => '1990-01-01 00:00:00']) //(post_id = 25 and post_date < 1990-01-01 00:00:00)
                        ->groupEnd()
                        ->orWhere('post_author_id', '10') // or post_author_id = 10
                        ->join('users', 'posts.post_author_id = users.user_id')
                        ->get()
                        ->getResult();
    }

    public function wherein()
    {
        $emails = ['enola.johnston@example.com','kub.david@example.org'];

        // select * from posts where (post_id = 25 and post_date < 1990-01-01 00:00:00) or post_author_id = 10
        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id' => '25', 'post_created_at <' => '1990-01-01 00:00:00']) //(post_id = 25 and post_date < 1990-01-01 00:00:00)
                        ->groupEnd()
                        // ->WhereIn('user_email', $emails) 
                        ->orWhereIn('user_email', $emails)
                        ->join('users', 'posts.post_author_id = users.user_id')
                        ->limit(5,3)
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
