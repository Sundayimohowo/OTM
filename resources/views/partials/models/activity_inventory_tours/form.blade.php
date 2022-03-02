@include('partials.fields.selector.default',
            ['name' => 'Activity Inventory', 'field' => 'activity_inventory_id', 'value' => $activity_inventory_id ?? 0,
             'route' => 'inventory.activity'])
@include('partials.fields.prefab.component_type', ['classes' => 'accommodation-component-type-select'])
@include('partials.fields.text', ['name' => 'Tour Sales Price', 'field' => 'tour_sales_price', 'value' => $tour_sales_price ?? null,])
@include('partials.fields.submit')
