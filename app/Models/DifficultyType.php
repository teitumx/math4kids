<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DifficultyType
 *
 * @property int $difficulty_type_id
 * @property string $title
 * @property int $score
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType whereDifficultyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DifficultyType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DifficultyType extends Model
{
    use HasFactory;

    protected $table = 'difficulty_types';
    protected $primaryKey = 'difficulty_type_id';
    protected $fillable = [
        'title',
        'score'
    ];
}
