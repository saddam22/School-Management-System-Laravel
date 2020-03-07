<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentForm extends Model
{
    // In user model :
public function getFullNameAttribute()
{
    return $this->fname . ' ' . $this->lname;
}

}
