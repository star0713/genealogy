<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForPublications extends Migration
{
    protected $permissions = [
        ['name' => 'publications.index', 'description' => 'Show index for publications', 'is_default' => false],

        ['name' => 'publications.create', 'description' => 'Create publication', 'is_default' => false],
        ['name' => 'publications.store', 'description' => 'Store a new publication', 'is_default' => false],
        ['name' => 'publications.show', 'description' => 'Show publication', 'is_default' => false],
        ['name' => 'publications.edit', 'description' => 'Edit publication', 'is_default' => false],
        ['name' => 'publications.update', 'description' => 'Update publication', 'is_default' => false],
        ['name' => 'publications.destroy', 'description' => 'Delete publication', 'is_default' => false],
        ['name' => 'publications.initTable', 'description' => 'Init table for publications', 'is_default' => false],

        ['name' => 'publications.tableData', 'description' => 'Get table data for publications', 'is_default' => false],

        ['name' => 'publications.exportExcel', 'description' => 'Export excel for publications', 'is_default' => false],

        ['name' => 'publications.options', 'description' => 'Get publication options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Publications', 'icon' => 'users', 'route' => 'publications.index', 'order_index' => 999, 'has_children' => false,
    ];

    protected $parentMenu = 'References';
}
