<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CatalogFilter extends AbstractFilter
{
    public const PRICE = 'price';
    public const TYPE = 'type';

    protected function getCallbacks(): array
    {
        // TODO: Implement getCallbacks() method.
    }

    public function price(Builder $builder, $value)
    {
        $builder->where('price');
    }
}
