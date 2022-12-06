@extends('layouts.master')
@section('title', 'Post Detail')
@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">Post Detail</div>
                            <div class="float-right">
                                <a class="btn btn-sm btn-primary" href="{{route('index')}}"><i
                                        class="fas fa-list"></i> All Post</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
