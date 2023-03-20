<?php
namespace App\Providers\CardTypes;

use App\Providers\Cards\FlashCard;
use App\Providers\Cards\QuestionCard;

class CardFactory {

    /**
     * Factory to return a given card type class
     *
     * @param string $cardType
     * @return FlashCard|QuestionCard
     *
     */
    public function getCardType(string $cardType)
    {
        $cardType = CardTypes::getType($cardType, false);

        return match ($cardType->key) {
            "QUIZ" => $this->QuizCard($cardType->id),
            default => $this->FlashCard($cardType->id),
        };

    }

    /**
     * Return an instance of the Flash Card class
     *
     * @param int $typeId
     * @return FlashCard
     */
    protected function FlashCard(int $typeId) : FlashCard
    {
        return new FlashCard($typeId);
    }

    /**
     * Return an instance of a Question Card class
     *
     * @param int $typeId
     * @return QuestionCard
     */
    protected function QuizCard(int $typeId) : QuestionCard
    {
        return new QuestionCard($typeId);
    }
}
