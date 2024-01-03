<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name','slug', 'status', 'platform','category','login_app','group','group_area','priority','impact','web_server','db_server','url_dev','url_prod','frontend','backend','database','db_connection_path','sap_connection_path','git_path','pic_sisi','pic_ict','description', 'user_login','notes','business_process',''];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
