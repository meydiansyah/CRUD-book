<?php

namespace App\Models;
use CodeIgniter\Model;


class BooksModel extends Model
{
    protected $table = 'books';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'bookname',
        'author'
    ];

    public function getBooks($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}