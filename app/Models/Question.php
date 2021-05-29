<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Question
 *
 * @property int $question_id
 * @property string $text
 * @property string $answer
 * @property int $difficulty_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDifficultyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    use HasFactory;

    public function createQuestions($difficulty) {
        $arrayQuestions = [];
        foreach ( $difficulty as $key => $value) {
            for ($r = $value['summ'][1]; $r > $value['summ'][0]; $r--) { // a + b = r
                $question = [];
                for ( $a = $r - 1; $a > 0; $a--) {
                    $b = $r - $a;
                    $question[0] = $a . ' + '. $b; // text
                    $question[1] = $r; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] =  'summ'; // type
                    $arrayQuestions[] = $question;
                };
                
            };
            for ($a = $value['diff'][1]; $a > $value['diff'][0]; $a--) { // a - b = r
                $question = [];
                for ( $b = $a; $b > 0; $b--) {
                    $question[0] = $a . ' - '. $b; // text
                    $question[1] = $a - $b; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] =  'diff'; // type
                    $arrayQuestions[] = $question;
                };
                
            };
            for ($a = $value['mult'][1]; $a >= $value['mult'][0]; $a--) { // a * b = r
                $question = [];
                for ( $b = 10; $b > 1; $b--) {
                    $question[0] = $a . ' X '. $b; // text
                    $question[1] = $a * $b; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] =  'mult'; // type
                    $arrayQuestions[] = $question;
                };
                
            };
            for ($a = $value['div'][1]; $a >= $value['div'][0]; $a--) { // r / b = a
                $question = [];
                for ( $b = 10; $b > 1; $b--) {
                    $r = $b * $a;
                    $question[0] = $r . ' / '. $b; // text
                    $question[1] = $a; // answer
                    $question[2] = $key; // difficulty_type_id
                    $question[3] =  'div'; // type
                    $arrayQuestions[] = $question;
                };
            };
        };
        return $arrayQuestions;
    };
};
