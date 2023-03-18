<?php
namespace App\Providers\Interfaces;
use App\Models\Cards;

interface CardInterface
{
    public function get(int $id): Cards;
    public function save(): Int;
    public function delete(): bool;
}
