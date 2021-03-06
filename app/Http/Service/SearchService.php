<?php

namespace App\Http\Service;

use App\Book;

class SearchService
{

    /**
     * 搜索书籍服务
     * @param $keyword
     * @param int $page
     * @return mixed
     */
    public function search($keyword, $page = 1)
    {
        if (is_null($keyword)) {
            $bookList = Book::offset(($page - 1) * 20)->limit(20)->get()->toArray();
        } else {
            $bookList = Book::where("title", "like", "%{$keyword}%")->offset(($page - 1) * 20)->limit(20)->get()->toArray();
        }

        return $bookList;
    }

    /**
     * 根据属性搜索
     * @param $attr
     * @param $page
     * @return mixed
     */
    public function searchByAttr($attr, $page)
    {
        if ($attr == 'all') {
            $bookList = Book::offset(($page - 1) * 20)->limit(20)->get()->toArray();
        } else {
            $bookList = SmXiaoShuoService::getSMXiaoShuoBooks($attr, $page);
        }

        return $bookList;
    }
}