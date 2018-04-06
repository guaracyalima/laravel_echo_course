@extends('layouts.app')

@section('content')
    <style type="text/css">
        .chat {
            padding: 0;
        }

        .chat li {
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .chat li.left .chat-body {
            margin-left: 100px;
        }

        .chat li.right .chat-body {
            text-align: right;
            margin-right: 100px;
        }

        .panel-body {
            overflow-y: scroll;
            height: 400px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3>Usuários</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$room->name}}</div>

                    <div class="card-body">
                        <ul class="chat list-unstyled">
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input
                                    type="text"
                                    class="form-control input-md"
                                    placeholder="Digite sua mensagem" v-model="content" v-on:keyup="sendMessage"/>
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-md" v-on:click="sendMessage" >Enviar</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pre-script')
    <script>
        var roomId = "{{ $room->id }}";
    </script>
    @endsection