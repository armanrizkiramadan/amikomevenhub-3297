<h1>Daftar Event Amikom</h1>
<ul>
    @foreach($events as $event)
        <li>{{ $event->name }} - {{ $event->start_time }}</li>
    @endforeach
</ul>