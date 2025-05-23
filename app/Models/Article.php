<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use Filterable;
    protected $table = 'articles';
    protected $guarded = [];

    public function typeArticles()
    {
        return $this->belongsTo(TypeArticle::class, 'type_id', 'id');
    }

}
