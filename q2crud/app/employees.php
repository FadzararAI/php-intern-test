<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = ['id','nomor','jabatan','talahir','photo_upload_path'];
}