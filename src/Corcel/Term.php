<?php

namespace Corcel;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Term extends CorcelEloquent
{
    protected $table = 'terms';
    protected $primaryKey = 'term_id';
}