@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <di class="col-md-12">
                <div class="card">
                    <div class="card-header">Posts</div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></td>
                            </tr>
                            @empty
                                <th colspan="2">No Posts Found.</th>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </di>
        </div>
    </div>
@endsection
