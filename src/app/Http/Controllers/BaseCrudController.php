<?php

namespace ViralSoft\BPThemeStoke\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BaseCrudController extends CrudController
{
    private $viewNamespace = "stoke-crud::";
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        $theme = config('backpack.base.view_namespace');
        if ($theme != 'backpack::') {
            CRUD::setListView($this->viewNamespace.'list');
            CRUD::setCreateView($this->viewNamespace.'create');
            CRUD::setDetailsRowView($this->viewNamespace.'details_row');
            CRUD::setShowView($this->viewNamespace.'show');
            CRUD::setEditView($this->viewNamespace.'edit');
            CRUD::setReorderView($this->viewNamespace.'reorder');
        }
    }

}
