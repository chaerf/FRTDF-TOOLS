<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Faker\Generator as Faker;
use App\Models\Auth\User;
use Illuminate\Database\Eloquent\SoftDeletes;


abstract class Entity extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = [];

    protected $attributes = [
        // Default is user_id 1, always superuser
        'created_by' => 1,
        'status' => 0
    ];

    public static function ADD_COLUMNS(Blueprint $table)
    {
        $table->unsignedInteger('created_by')->default('1');
        $table->integer('status');
        $table->string('uuid');

        $table->timestamps();
        $table->softDeletes();
    }

    public static function FACTORY_FIELDS(Faker $faker) : array
    {
        $users = User::pluck('id');
        $createdBy = $faker->randomElement($users) ? : 1;
        return [
            'status' => $faker->randomDigit,
            'uuid' => $faker->uuid,
            'created_by' => $createdBy,
        ];
    }

    /**
     * Get the user
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    /**
     * Get the team
     */
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
}
