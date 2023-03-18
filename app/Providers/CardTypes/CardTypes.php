<?php
namespace App\Providers\CardTypes;

use App\Providers\Interfaces\CardTypesInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

class CardTypes implements CardTypesInterface
{
    /**
     * Get type
     *
     * @param $typeName
     * @return Collection
     */
    public static function getType($typeName) : Collection
    {
        return collect(SELF::getTypes()->firstWhere('key', $typeName));
    }

    /**
     * Get types
     *
     * @return Collection
     */
    public static function getTypes() : Collection
    {
        return collect(Config::get('card_types'));
    }



    /**
     * Return an id for a card type
     *
     * @param string $typeName
     *
     * @return int
     */
    public static function id(string $typeName): int
    {
        return SELF::getType($typeName)->get('id');
    }

    /**
     * Return a name for a card type
     *
     * @param string $typeName
     *
     * @return string
     */
    public static function name(string $typeName): string
    {
        return SELF::getType($typeName)->get('name');
    }

    /**
     * Return a config element for a card type by its id
     *
     * @param string $typeName
     *
     * @return object
     */
    public static function configByType(string $typeName) : object
    {
        return (object) SELF::getTypes()->firstWhere('key', $typeName);
    }
}
