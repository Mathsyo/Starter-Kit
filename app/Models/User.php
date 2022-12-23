<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Cmdinglasan\FilamentBoringAvatars\Traits\HasAvatarUrl;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasAvatarUrl;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessFilament(): bool
    {
        return $this->hasRole('administrator');
    }

    public function getIsAdminAttribute(): bool
    {
        return $this->hasRole('administrator');
    }

    // public function getProfilePictureUrlAttribute()
    // {
    //     # Check if file exists in storage
    //     if (!Storage::disk('public')->exists('users/profile_pictures/' . $this->profile_picture)) {
    //         return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->name))) . "?s=200&d=retro";
    //     }
    //     return asset(Storage::url('users/profile_pictures/' . $this->profile_picture));
    // }
}
