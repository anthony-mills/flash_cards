<?php
/**
* Eloquent model for storage of flash card Tags
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    protected $fillable = [
                            'tag',
                          ];

    /**
     * Transform tag to upper case.
     *
     * @param  string  $value
     * @return void
     */
    public function setTagAttribute($value) : void
    {
        $this->attributes['tag'] = strtoupper($value);
    }

    /**
    * Handle the saving of tags to a card
    *
    * @param int $cardId
    * @param array|null $cardTags
    *
    * @return void
    **/
    public function saveCardTags( int $cardId, $cardTags ) : void
    {
        $tagIds = [];

        if (is_array($cardTags)) {
            foreach($cardTags as $cardTag) {
                $newTag = SELF::firstOrCreate(['tag' => $cardTag]);

                CardTags::firstOrCreate(['card_id' => $cardId, 'tag_id' => $newTag->id]);
                $tagIds[] = $newTag->id;
            }
        }

        CardTags::where('card_id', $cardId)->whereNotIn('tag_id', $tagIds)->delete();
    }
}
