{{-- localized date using nesbot carbon --}}
@php
    $value = data_get($entry, $column['name']);

    $column['escaped'] = $column['escaped'] ?? true;
    $column['text'] = empty($value) ? '' : \Carbon\Carbon::parse($value)
                    ->locale(App::getLocale())
                    ->isoFormat($column['format'] ?? config('backpack.base.default_date_format'));
@endphp

<span data-order="{{ $value ?? '' }}">
	@includeWhen(!empty($column['wrapper']), 'stoke-crud::columns.inc.wrapper_start')
        @if($column['escaped'])
            {{ $column['text'] }}
        @else
            {!! $column['text'] !!}
        @endif
    @includeWhen(!empty($column['wrapper']), 'stoke-crud::columns.inc.wrapper_end')
</span>
