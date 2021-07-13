<?php

namespace Uasoft\Badaso\Models;

use Illuminate\Database\Eloquent\Model;

class FCMMessage extends Model
{
    protected $table = null;

    /**
     * Constructor for setting the table name dynamically
     */
    public function __construct(array $attributes = []) {
        $prefix = config('badaso.database.prefix');
        $this->table = $prefix . 'f_c_m_messages';
        parent::__construct($attributes);
    }

    protected $fillable = [
        'receiver_user_id',
        'type',
        'title',
        'content',
        'is_read',
        'sender_user_id',
    ];

    public function sender_users()
    {
        return $this->belongsTo(User::class, 'sender_user_id');
    }
}
