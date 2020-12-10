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
                <a href="{{ url('ielts/group-1') }}" class="btn btn-success mb-2">Topic 1 - 10</a>
                <a href="{{ url('ielts/group-2') }}" class="btn btn-success mb-2">Topic 11 - 20</a>
            </div>
        </div>
    </div>
</div>

<!-- <button data-toggle="modal" data-target="#ielts-topic" data-title="An environmental disaster" class="btn btn-success mb-2">An environmental disaster</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="Body piercing" class="btn btn-success mb-2">Body piercing</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="How animals communicate" class="btn btn-success mb-2">How animals communicate</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="The Mysterious Kris" class="btn btn-success mb-2">The Mysterious Kris</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="Comic strips" class="btn btn-success mb-2">Comic strips</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="Diamonds" class="btn btn-success mb-2">Diamonds</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="Dubai" class="btn btn-success mb-2">Dubai</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="Face blindness" class="btn btn-success mb-2">Face blindness</button>
<button data-toggle="modal" data-target="#ielts-topic" data-title="A meal to die for" class="btn btn-success mb-2">A meal to die for</button> -->

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
    $('#general-level').hide();
    $('#ielts-topics-content').hide();

    $('#general-english').click(function() {
        $('#general-level').slideToggle();
    });

    $('#ielts-topics').click(function() {
        $('#ielts-topics-content').slideToggle();
    });

    $('#ielts-topic').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) 
        let title = button.data('title') ;
        let modal = $(this)

        let url_slug = title.replaceAll(' ', '-').toLowerCase()

        let practice = url_slug + '/P';
        let test = url_slug + '/T';

        modal.find('#practice').attr('href', practice);
        modal.find('#test').attr('href', test);
        modal.find('h3.modal-title').text(title);
    })
</script>
@stop