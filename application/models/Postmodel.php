<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class PostModel extends CI_Model
{
    const TABLE_NAME = 'blog_posts';
    public $id;
    public $image;
    public $url;
    public $time;
    public $title;
    public $description;

    /**
     * @param $limit
     * @param $page
     * @param null $search
     * @param null $month
     * @return array
     */
    public function getPosts($limit = 10, $page =1, $search = null, $month = null)
    {
        
        if ($search !== null) {
            $search = $this->db->escape_like_str($search);
            $this->db->where("(translations.title LIKE '%$search%' OR translations.description LIKE '%$search%')");
        }
        if ($month !== null) {
            $from = intval($month['from']);
            $to = intval($month['to']);
            $this->db->where("time BETWEEN $from AND $to");
        }
        $this->db->join('translations', 'translations.for_id = blog_posts.id', 'left');
        $this->db->where('translations.type', 'blog');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->order_by('time', 'desc');
        $query = $this->db->select('blog_posts.id, translations.title, translations.description, blog_posts.url, blog_posts.time, blog_posts.image')->get('blog_posts', $limit, $page);
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr[] = $this->convertToObject($row);
            }
        }
        return $arr;
    }

    public function postsCount($search = null)
    {
        if ($search !== null) {
            $this->db->like('translations.title', $search);
        }
        $this->db->join('translations', 'translations.for_id = blog_posts.id', 'left');
        $this->db->where('translations.abbr', MY_DEFAULT_LANGUAGE_ABBR);
        return $this->db->count_all_results('blog_posts');
    }

    /**
     * @param $id
     * @return ProductDetailModel
     */
    public function getOnePost($id)
    {
        $this->db->select('translations.title, translations.description, blog_posts.image, blog_posts.time');
        $this->db->where('blog_posts.id', $id);
        $this->db->join('translations', 'translations.for_id = blog_posts.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $query = $this->db->get('blog_posts');
        return $this->convertToObject($query->row_array());
    }
    /**
     * @param $arr
     * @return ProductDetailModel
     */
    public function convertToObject($arr){
        $obj = new PostModel();
        $obj->id = isset($arr['id'])?$arr['id']:'';
        $obj->image = isset($arr['image'])?$arr['image']:'';
        $obj->title = isset($arr['title'])?$arr['title']:'';
        $obj->description = isset($arr['description'])?$arr['description']:'';
        $obj->time = isset($arr['time'])?$arr['time']:0;
        $obj->url = isset($arr['url'])?$arr['url']:'';
        return $obj;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    

}