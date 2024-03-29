<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\TasksExpirationDate;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function create(array $attributes = [])
    {
        $user = static::query()->create($attributes);

        // Crear familia por defecto
        Family::create(['user_id' => $user->id, 'name' => 'First Family!']);

        return $user;
    }

    public function families()
    {
        return $this->hasMany(Family::class)
            ->orderBy('updated_at', 'desc')
            ->with('tasks');
    }

    public function tasksByExpirationDate(TasksExpirationDate $tasksExpirationDate)
    {
        $operator = null;
        switch ($tasksExpirationDate) {
            case TasksExpirationDate::PAST:
                $operator = "<";
                break;
            case TasksExpirationDate::TODAY:
                $operator = "=";
                break;
            case TasksExpirationDate::FUTURE:
                $operator = ">";
                break;
            default:
                break;
        }

        return $this->hasManyThrough(Task::class, Family::class)
            ->whereDate('expiration_date', $operator, Carbon::now())
            ->orderBy('expiration_date', 'asc')
            ->orderBy('updated_at', 'asc')
            ->get();
    }
}
