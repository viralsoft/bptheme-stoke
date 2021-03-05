#Backpack Theme Stoke
Change Theme backpack to them stoke (https://themesbrand.com/skote/layouts/ui-notifications.html)
##Installation
Via Composer
``` bash
$ composer require themebackpack/stoke
```

## Usage
Optional you can publish the configuration to provide a different service provider stub. The default is here.

``` bash
$ php artisan vendor:publish --provider="ViralSoft\BPThemeStoke\StokeServiceProvider"
```

You can edit your CRUD controller extend BaseCrudController be like:

``` bash
useViralSoft\BPThemeStoke\app\Http\Controllers\BaseCrudController;

class CategoryCrudController extends BaseCrudController
```

and in function setup you need add:
``` bash
    public function setup()
    {
        parent::setup();
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('category', 'categories');
    }
```

in ```config/backpack/base.php``` you need edit 'view_namespace' => 'stoke-horizontal::' or 'view_namespace' => 'stoke-vertical::' to use theme
Reload page and theme setting successfully
