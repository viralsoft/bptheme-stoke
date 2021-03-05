@if (config('backpack.base.breadcrumbs') && isset($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs))
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        @yield('header')
            <div class="page-title-right">
                <ol class="breadcrumb bg-transparent p-0 {{ config('backpack.base.html_direction') == 'rtl' ? 'justify-content-start' : 'justify-content-end' }}">
                    @foreach ($breadcrumbs as $label => $link)
                        @if ($link)
                            <li class="breadcrumb-item text-capitalize"><a href="{{ $link }}">{{ $label }}</a></li>
                        @else
                            <li class="breadcrumb-item text-capitalize active" aria-current="page">{{ $label }}</li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endif
