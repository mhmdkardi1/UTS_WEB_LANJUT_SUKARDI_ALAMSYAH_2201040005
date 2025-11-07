<?php

namespace App\Models;

class Post{
  public static function data (){
    return [
            ['id' => 1, 'title' => 'UBG', 'content' => 'komputer'],
            ['id' => 2, 'title' => 'unram', 'content' => 'teknik sipil'],
            ['id' => 3, 'title' => 'uin', 'content' => 'agama'],
        ];
  }
  public static function caridata ($id){
    $post = self::data ();

    foreach ($posts as $post => $value) {
      if ($post['id'] == $id) {
        return $post;
      }

    }
  }
}