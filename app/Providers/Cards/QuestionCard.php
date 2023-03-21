<?php
namespace App\Providers\Cards;

use App\Http\Requests\QuizCardCreateForm;
use App\Models\Cards;
use App\Models\Tags;
use App\Providers\Interfaces\CardInterface;
use Illuminate\Support\Facades\DB;

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

    /**
     * Create or update the data for the quiz card in the database
     *
     * @param array $cardData
     * @param array $cardTags
     *
     * @return int $cardId
     */
    public function save(array $cardData, array $cardTags=[]) : int
    {
        Cards::upsert( $cardData, 'id' );
        $cardId = (is_numeric($cardData['id'])) ? $cardData['id'] : DB::getPdo()->lastInsertId();
        ( new Tags )->saveCardTags( $cardId, $cardTags );
        return $cardId;
    }

    /**
     * Delete a row from the database
     *
     * @param int $cardId
     *
     * @return bool
     */
    public function delete(int $cardId) : bool
    {
        $cardRow = Cards::where('id', $cardId)->where('type', $this->typeId)->first();
        if ($cardRow) {
            $cardRow->delete();
            return true;
        }
        return false;
    }
    /**
     * Format form data for saving to the database.
     *
     * @param QuizCardCreateForm $cardObj
     *
     * @return array
     */
    public function formatData(QuizCardCreateForm $cardObj) : array
    {
        return array(
            'id' => ($cardObj->get('card_id') ?? null),
            'type' => $this->typeId,
            'category' => $cardObj->get('category'),
            'difficulty' => $cardObj->get('difficulty'),
            'problem' => $cardObj->get('problem'),
            'solution' => json_encode(
                (object) [
                    'correct_answer' => $cardObj->get('correct_answer'),
                    'answer1' => $cardObj->get('answer1'),
                    'answer2' => $cardObj->get('answer2'),
                    'answer3' => $cardObj->get('answer3'),
                    'answer4' => $cardObj->get('answer4'),
                ]
            ),
        );
    }
}
