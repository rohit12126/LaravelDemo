$(document).ready(function() {
    $('#coin_data').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('getCoinsData') }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',"searchable": false,"orderable":false},
            {data: 'coin_name', name: 'coin_name'},
            {data: 'price', name: 'price'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'},
        ]
    });

    $('#category_data').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('getCategoriesData') }}',
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',"searchable": false,"orderable":false},
            {data: 'photo_thumb', name: 'photo_thumb'},
            {data: 'category_name', name: 'category_name'},
            {data: 'on_homepage', name: 'on_homepage'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'},
        ]
    });
});