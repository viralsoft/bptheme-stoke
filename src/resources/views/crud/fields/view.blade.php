<!-- view field -->
@include('stoke-crud::fields.inc.wrapper_start')
  @include($field['view'], ['crud' => $crud, 'entry' => $entry ?? null, 'field' => $field])
@include('stoke-crud::fields.inc.wrapper_end')
