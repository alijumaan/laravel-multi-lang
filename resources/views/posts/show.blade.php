@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <di class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>
                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                </div>
            </di>
        </div>
    </div>
@endsection
