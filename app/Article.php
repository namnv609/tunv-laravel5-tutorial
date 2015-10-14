<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the post's category.
     *
     * @return Category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
