<?php
namespace App\Providers\Interfaces;


interface CardTypesInterface
{
    public static function getTypes();
    public static function id(string $typeName): int;
    public static function name(string $typeName): string;
}
