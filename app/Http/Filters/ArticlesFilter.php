<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ArticlesFilter extends AbstractFilter
{

    public const TYPE = 'type';

    protected function getCallbacks(): array
    {
        return [
            self::TYPE => [$this, 'type'],
        ];
    }

    public function type(Builder $builder, $value)
    {
        $builder->whereHas('typeArticles', function ($query) use ($value) {
            $query->where('type', $value);
        });
    }
}
