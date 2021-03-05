{{-- relationships (switchboard; supports both single and multiple: 1-1, 1-n, n-n) --}}
@php
   $relationshipType = new ReflectionClass($entry->{$column['name']}());
   $relationshipType = $relationshipType->getShortName();
   $allows_multiple = $crud->guessIfFieldHasMultipleFromRelationType($relationshipType);
@endphp

@if ($allows_multiple)
	@include('stoke-crud::columns.select_multiple')
@else
	@include('stoke-crud::columns.select')
@endif
