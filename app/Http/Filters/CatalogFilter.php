<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CatalogFilter extends AbstractFilter
{
    public const PRICE = 'price';
    public const TYPE = 'type';

    protected function getCallbacks(): array
    {
        return [
            self::PRICE => [$this, 'price'],
            self::TYPE => [$this, 'type'],
        ];
    }

    public function price(Builder $builder, $value)
    {
        if (str_contains($value, '-')) {
            [$min, $max] = explode('-', $value);
            $builder->whereBetween('price', [(int)$min, (int)$max]);
        } else {
            $builder->where('price', (int)$value);
        }
    }

    public function type(Builder $builder, $value)
    {
        $builder->whereHas('type', function ($q) use ($value) {
            $q->where('type', $value);
        });
    }
}
