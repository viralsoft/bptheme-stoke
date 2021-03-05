
<div class="dropdown {{ Request::get($filter->name)?'active':'' }}"
    filter-name="{{ $filter->name }}"
    filter-type="{{ $filter->type }}"
    filter-key="{{ $filter->key }}">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-bs-toggle="dropdown" aria-expanded="false">
        {{ $filter->label }}  <i class="mdi mdi-chevron-down"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" parameter="{{ $filter->name }}" dropdownkey="" href="">-</a>
        <div role="separator" class="dropdown-divider"></div>
        @if (is_array($filter->values) && count($filter->values))
            @foreach($filter->values as $key => $value)
                @if ($key === 'dropdown-separator')
                    <div role="separator" class="dropdown-divider"></div>
                @else
                    <a  class="dropdown-item {{ ($filter->isActive() && $filter->currentValue == $key)?'active':'' }}"
                        parameter="{{ $filter->name }}"
                        href=""
                        dropdownkey="{{ $key }}"
                    >{{ $value }}</a>
                @endif
            @endforeach
        @endif
    </div>
</div>

{{-- ########################################### --}}
{{-- Extra CSS and JS for this particular filter --}}

{{-- FILTERS EXTRA CSS  --}}
{{-- push things in the after_styles section --}}

    {{-- @push('crud_list_styles')
        <!-- no css -->
    @endpush --}}


{{-- FILTERS EXTRA JS --}}
{{-- push things in the after_scripts section --}}

@push('crud_list_scripts')
    <script>
		jQuery(document).ready(function($) {
			$("div.dropdown[filter-key={{ $filter->key }}] .dropdown-menu a").click(function(e) {
				e.preventDefault();

				var value = $(this).attr('dropdownkey');
				var parameter = $(this).attr('parameter');

		    	// behaviour for ajax table
				var ajax_table = $("#crudTable").DataTable();
				var current_url = ajax_table.ajax.url();
				var new_url = addOrUpdateUriParameter(current_url, parameter, value);

				// replace the datatables ajax url with new_url and reload it
				new_url = normalizeAmpersand(new_url.toString());
				ajax_table.ajax.url(new_url).load();

				// add filter to URL
				crud.updateUrl(new_url);

				// mark this filter as active in the navbar-filters
				// mark dropdown items active accordingly
				if (URI(new_url).hasQuery('{{ $filter->name }}', true)) {
					$("div[filter-key={{ $filter->key }}]").removeClass('active').addClass('active');
					$("div[filter-key={{ $filter->key }}] .dropdown-menu a").removeClass('active');
					$(this).addClass('active');
				}
				else
				{
					$("div[filter-key={{ $filter->key }}]").trigger("filter:clear");
				}
			});

			// clear filter event (used here and by the Remove all filters button)
			$("div[filter-key={{ $filter->key }}]").on('filter:clear', function(e) {
				// console.log('dropdown filter cleared');
				$("div[filter-key={{ $filter->key }}]").removeClass('active');
				$("div[filter-key={{ $filter->key }}] .dropdown-menu a").removeClass('active');
			});
		});
	</script>
@endpush
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
