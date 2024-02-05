@extends('layouts.app')

@section('main-content')
    <h1>
        Today's trains
    </h1>
    <ul>
        @forelse ($trains as $train)
            <li>
                <h5>
                    {{ $train->company }}: From {{ $train->departing_station }} to {{ $train->arriving_station }}
                </h5>
                <p>
                    {{ $train->departing_time }} -> {{ $train->arriving_time }}
                    {{ $train->train_code }}, wagons: {{ $train->wagons_no }},
                    {{ ($train->on_time) ? 'on time' : 'delayed' }},
                    {{ ($train->cancelled) ? 'CANCELLED' : '' }}
                </p>
            </li>
        @empty
            <li>
                There are no trains available today...
            </li>
        @endforelse
    </ul>
@endsection
