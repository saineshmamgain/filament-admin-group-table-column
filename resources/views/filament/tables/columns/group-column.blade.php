<div>
    @php($data = collect($groupColumns)->map(fn ($column) => data_get($getRecord(), $column))->implode($columnSeparator))
    {!! $data !!}
</div>
