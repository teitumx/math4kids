<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserQuestion
 *
 * @property int $user_question_id
 * @property int $user_id
 * @property int $question_id
 * @property string $user_answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserQuestionId($value)
 * @mixin \Eloquent
 * @property int $number
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereNumber($value)
 */
class UserQuestion extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_question_id';
    protected $table = 'user_questions';

    protected $fillable = [
        'user_id',
        'question_id',
        'user_answer',
        'number'
    ];

    public function getQuestions(User $user, int $number): array
    {
        return self::query()
            ->select([
                'questions.question_id',
                'questions.text',
                'questions.answer',
                'user_questions.user_answer',
                'user_questions.number'])
            ->where('user_id', '=', $user->user_id)
            ->join('questions', 'questions.question_id', '=', 'user_questions.question_id')
            ->get()->toArray();
    }

    public function hasQuestions(User $user): bool
    {
        $countRows = self::query()
            ->where('user_id', '=', $user->user_id)
            ->count();
        return $countRows > 0;
    }

    public function create(array $arrayQuestions, User $user): array
    {
        $arrayUserQuestions = [];
        $number = self::query()->count() + 1;
        foreach ($arrayQuestions as $key => $question) {
            $arrayUserQuestions[] = [
                'user_id' => $user->user_id,
                'question_id' => $question->question_id,
                'user_answer' => '',
                'number' => $number
            ];
            $arrayQuestions[$key]->number = $number;
        }
        self::insert($arrayUserQuestions);
        return $arrayQuestions;
    }


    public function setAnswer(int $number, int $question_id, string $answer): bool
    {
        self::query()
            ->where(['number' => $number, 'question_id' => $question_id])
            ->update(['user_answer' => $answer]);
        $countRightAnswerRow = self::query()
            ->join('questions', 'questions.question_id', '=', 'user_questions.question_id')
            ->where([
                'user_questions.number' => $number,
                'questions.question_id' => $question_id,
                'questions.answer' => $answer])
            ->count();
        return $countRightAnswerRow > 0;
    }
}
