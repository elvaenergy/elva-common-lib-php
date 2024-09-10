<?php

namespace Elva\Common\Lib\Enums\Traits;

use Illuminate\Support\Collection;

trait Arrayable
{
    /**
     * Get all the enum's values as a collection.
     *
     * @return Collection<mixed>
     */
    public static function get(): Collection
    {
        return collect(self::cases())->map(
            fn($item) => $item->value
        );
    }

    /**
     * Get all the enum's values as an array.
     *
     * @return array
     */
    public static function all(): array
    {
        return self::get()->all();
    }
}