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
     * @param bool $retVal
     * @return Mixed
     */
    public static function getType($typeName, $retVal=true) : Mixed
    {
        $confVal = SELF::getTypes()->firstWhere("key", $typeName);
        return ($retVal == "collection") ? collect($confVal) : (object) $confVal;
    }

    /**
     * Get types
     *
     * @return Collection
     */
    public static function getTypes() : Collection
    {
        return collect(Config::get("card_types"));
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
        return SELF::getType($typeName)->get("id");
    }

    /**
     * Get name by id
     *
     * @param int $typeId
     *
     * @return string
     */
    public static function nameById(int $typeId, $plural=false) : string
    {
        $configElm = (object) SELF::getTypes()->firstWhere("id", $typeId);

        return ($plural) ? ($configElm->plural ?? "") : ($configElm->singular ?? "");
    }

    /**
     * Get name by id
     *
     * @param int $typeId
     *
     * @return string
     */
    public static function keyById(int $typeId) : string
    {
        return ((object) SELF::getTypes()->firstWhere("id", $typeId))->key;
    }

    /**
     * Return a name for a card type
     *
     * @param string $typeName
     *
     * @return string
     */
    public static function name(string $typeName, $plural=false): string
    {
        return ($plural) ? SELF::getType($typeName)->get("plural") : SELF::getType($typeName)->get("singular");
    }

    /**
     * URL by id
     *
     * @param int $typeId
     *
     * @return string
     */
    public static function urlById(int $typeId) : string
    {
        $configElm = (object) SELF::getTypes()->firstWhere("id", $typeId);

        return $configElm->url ?? "";
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
        return (object) SELF::getTypes()->firstWhere("key", $typeName);
    }
}
