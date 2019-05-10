<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function Comments(){
    //1つの投稿は複数のコメントを所有する
    return $this->hasMany('App\Comment');
  }

  public function Category(){
    //1つの投稿は1つのカテゴリーに所属する
    return $this->belingsTo('App\Category');
  }
}
