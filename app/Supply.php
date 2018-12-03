<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Supply extends Model
{
    use Sortable;

    protected $fillable = ['task_name', 'description' ];

    protected $primaryKey = 'id';

    public $sortable = ['id', 'task_name', 'description'];
}
