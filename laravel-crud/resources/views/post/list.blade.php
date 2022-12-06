@extends('layouts.master')
@section('title', 'Post List')
@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">All Post</div>
                            <div class="float-right">
                                <a class="btn btn-sm btn-primary" href="{{route('post.add')}}"><i
                                        class="fas fa-plus"></i> Add Post</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('messages'))
                                <div class="alert alert-primary" role="alert">
                                    {{Session::get('messages')}}
                                </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td style="width: 5%">{{$loop->iteration}}</td>
                                        <td style="width: 15%">{{$post->title}}</td>
                                        <td style="width: 65%">{{$post->body}}</td>
                                        <td style="width: 15%">
                                            <a class="btn btn-sm btn-success"
                                               href="{{route('post.show', $post->id)}}"><i
                                                    class="fas fa-info-circle"></i></a>
                                            <a class="btn btn-sm btn-warning"
                                               href="{{route('post.edit', $post->id)}}"><i class="fas fa-edit"></i></a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Post Silinsin
                                                                Mi?</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bu post silinsin mi?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Kapat
                                                            </button>
                                                            <a class="btn btn-sm btn-danger"
                                                               href="{{route('post.delete', $post->id)}}"><i
                                                                    class="fas fa-trash-alt"></i> Evet</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$posts->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
