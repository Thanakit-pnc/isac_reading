@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-center">
            @php 
                $route = Route::current()->parameters;
                $topicTitle = ['group-1' => 'Topic 1 - 5', 'group-2' => 'Topic 6 - 10', 'group-3' => 'Topic 11 - 15', 'group-4' => 'Topic 16 - 20'];
            @endphp
            <h4>{{ $topicTitle[$route['group']] }}</h4>
            <ol class="breadcrumb m-0 pt-0 p-sm-2">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">{{ $topicTitle[$route['group']] }}</li>
            </ol>
        </div>
    </div>
</div>

<div class="row mt-1">
    @isset($exams)
        @foreach($exams as $exam)
        <div class="col-lg-4">
            <div class="card card-body text-center">
                <h4 class="card-title">{{ $exam }}</h4>
                <button data-toggle="modal" data-target="#ielts-topic" data-title="{{ $exam }}" class="btn btn-primary text-uppercase">Start</button>
            </div>
        </div>
        @endforeach
    @endisset
</div>

<div class="modal fade" id="ielts-topic" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-1 text-center">
                <h3 class="modal-title my-0 mx-auto"></h3>
            </div>
            <div class="modal-body text-center pt-2">
                <a href="" id="practice" class="btn btn-primary waves-effect mr-2"><i class="fas fa-location-arrow"></i> Practice</a>
                <a href="" id="test" class="btn btn-success waves-effect" value="test"><i class="fas fa-clock"></i> Test</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $('#ielts-topic').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) 
        let title = button.data('title') ;
        let modal = $(this)

        let url_slug;

        if(title.includes("'")) {
            url_slug = title.replaceAll(' ', '-').replace("'", "").toLowerCase()
        } else {
            url_slug = title.replaceAll(' ', '-').toLowerCase()
        }

        let practice = url_slug + '/P';
        let test = url_slug + '/T';

        modal.find('#practice').attr('href', '{!! url("'+ practice +'") !!}');
        modal.find('#test').attr('href', '{!! url("'+ test +'") !!}');
        modal.find('h3.modal-title').text(title);
    })
</script>
@stop