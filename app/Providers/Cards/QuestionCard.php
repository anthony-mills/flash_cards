<?php
namespace App\Providers\Cards;

use App\Models\Cards;
use App\Providers\Interfaces\CardInterface;

/**
 * @property $typeId
 */
class QuestionCard implements CardInterface
{

    public function __construct(int $typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * Return a Flash card via its row id
     *
     * @param int $id
     * @return Cards
     */
    public function get(int $id) : Cards
    {
        return Cards::where('id', $id)->where('type', $this->typeId)->first();
    }

    public function save() : int
    {
        return 0;
    }

    public function delete() : bool
    {
        return False;
    }
}
