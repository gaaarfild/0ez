@extends('root.main')

@section('body')
    <div class="container">
        <h1>{{ $title }}</h1>
        {!! Form::open(['route' => 'root-counters-save']) !!}
            <div>
                <div class="form-group">
                    <label for="inputGoogle">Google counter ID <span
                                class="text-muted">(i.e.: UA-12345678-1)</span></label>
                    <input type="text" name="google_analytics" id="inputGoogle" class="form-control"
                           value="{{ Conf::get('counters', '')['google_analytics'] }}">
                </div>
                <div class="form-group">
                    <label for="inputYandex">Yandex Metrika ID <span
                                class="text-muted">(i.e.: 12345678)</span></label>
                    <input type="text" name="yandex_metrika" id="inputYandex" class="form-control"
                           value="{{ Conf::get('counters.yandex_metrika', '') }}">
                </div>
                <div class="form-group">
                    <label for="inputMeta">Any Additional HTML Meta-Tags</label>
                    <textarea name="meta" id="inputMeta" class="form-control"></textarea>
                </div>
            </div>
            <div class="text-right"><input type="submit" value="SAVE" class="btn btn-success"/></div>
        {!! Form::close() !!}
    </div>
@stop