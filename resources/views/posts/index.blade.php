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
                                <th>{{ __('posts.id') }}</th>
                                <th>{{ __('posts.title') }}</th>
                                <th>{{ __('posts.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->slug) }}"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="if (confirm('Are You Sure?')) {document.getElementById('delete-post-{{ $post->id }}').submit();} else { return false; }"><i class="fa fa-trash text-danger"></i></a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" id="delete-post-{{ $post->id }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
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
