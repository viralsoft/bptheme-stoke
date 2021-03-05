@includeWhen(!empty($column['wrapper']), 'stoke-crud::columns.inc.wrapper_start')
    @include($column['view'])
@includeWhen(!empty($column['wrapper']), 'stoke-crud::columns.inc.wrapper_end')
