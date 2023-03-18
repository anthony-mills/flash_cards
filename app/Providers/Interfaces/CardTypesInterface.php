<?php
namespace App\Providers\Interfaces;

use Illuminate\Support\Collection;

interface CardTypesInterface
{
    public static function getTypes(): Collection;
    public static function id(string $typeName): int;
    public static function name(string $typeName): string;
}
