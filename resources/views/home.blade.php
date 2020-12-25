@extends('layouts.app')

@section('css')
<style>
    .hover-scale i.fas {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }
</style>
@stop

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-4 mb-3 mb-lg-0">
        <a href="javascript: void(0);" class="hover-scale" id="general-english">
            <div class="widget-simple text-center card-box border-top border-primary border-2">
                <i class="fas fa-book text-primary fa-4x mb-2"></i>
                <h3 class="text-primary counter my-0">General English</h3>
            </div>
        </a>

        <div id="general-level" style="display: none;">
            <div class="d-flex flex-column">
                <a href="{{ url('GE/L1') }}" class="btn btn-primary mb-2">Level 1</a>
                <a href="{{ url('GE/L2') }}" class="btn btn-primary mb-2">Level 2</a>
                <a href="{{ url('GE/L3') }}" class="btn btn-primary">Level 3</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <a href="javascript: void(0);" class="hover-scale" id="ielts-topics">
            <div class="widget-simple text-center card-box border-top border-success border-2">
                <i class="fas fa-book text-success fa-4x mb-2"></i>
                <h3 class="text-success counter my-0">IELTS Topics</h3>
            </div>
        </a>

        <div id="ielts-topics-content" style="display: none;">
            <div class="d-flex flex-column text-center font-16">
                @php 
                    $group = 1;
                    $start = 1;
                    $end = 10;
                @endphp

                @foreach($buttons as $key => $button)
                @php 
                    if($key == 0) {
                        $start = $start;
                        $end = $end;
                    } else {
                        $start = $end + 1;
                        $end = $end + 10;
                    }
                @endphp
                <a href="{{ url('ielts/group-'.$group++) }}" class="btn btn-success mb-2">{{ 'Topic '.$start.' - '.$end }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3 mb-lg-0">
        <a href="javascript: void(0);" class="hover-scale" id="ielts-tests">
            <div class="widget-simple text-center card-box border-top border-purple border-2">
                <i class="fas fa-book text-purple fa-4x mb-2"></i>
                <h3 class="text-purple counter my-0">IELTS Tests</h3>
            </div>
        </a>

        <div id="ielts-tests-mode" style="display: none;">
            <div class="d-flex flex-column">
                <a href="{{ url('academic') }}" class="btn btn-purple mb-2">Academic</a>
                <a href="{{ url('general-training') }}" class="btn btn-purple">General Training</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>

    $('#general-english').click(function() {
        $('#general-level').slideToggle();
    });

    $('#ielts-topics').click(function() {
        $('#ielts-topics-content').slideToggle();
    });

    $('#ielts-tests').click(function() {
        $('#ielts-tests-mode').slideToggle();
    })
</script>
@stop