<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    protected $guarded = []; //不可注入的字段   BUT-> []代表所有術組皆可注入

}
