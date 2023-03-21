<?php
namespace App\Providers\Interfaces;

use App\Models\Cards;

interface CardInterface
{
    public function get(int $id): Cards;
    public function save(array $cardData, array $cardTags): int;
    public function delete(int $cardId): bool;
}
