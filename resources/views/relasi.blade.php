@foreach ($relasi as $rel)
@foreach ($rel->locals as $r)
{{ $r->locals }}
@endforeach
@endforeach