<?php

namespace App\Http\Controllers\Citation;

use App\Tables\Builders\CitationTable;
use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class CitationTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = CitationTable::class;
}
