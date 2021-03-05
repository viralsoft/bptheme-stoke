@if ($crud->buttons()->where('stack', $stack)->count())
	@foreach ($crud->buttons()->where('stack', $stack) as $button)
        @php
        $view = stoke_view($button->content);
        $button->content($view)
        @endphp
	  {!! $button->getHtml($entry ?? null) !!}
	@endforeach
@endif
