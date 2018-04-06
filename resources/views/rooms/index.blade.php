@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Escolha uma das salas a baixo</div>

                    <div class="card-body">
                        <ul class="list-group">
                        @foreach($rooms as $room)

                                <li class="list-group-item">
                                    <a href="{{ route('chat.rooms.show', ['id' => $room->id]) }}">
                                        {{ $room->name }}
                                    </a>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
