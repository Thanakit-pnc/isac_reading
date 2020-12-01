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
                <a href="{{ url('GE/L1') }}" data-toggle="modal" data-target="ielts-topic" data-title="an-environmental-disaster" class="btn btn-success mb-2">An environmental disaster</a>
                <a href="{{ url('GE/L2') }}" data-toggle="modal" data-target="ielts-topic" data-title="an-environmental-disaster" class="btn btn-success mb-2">Body piercing</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade ielts-topic" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center pt-2">
                <h3 class="mt-0">Select Mode</h3>
                <form action="#" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary waves-effect"> <i class="fa fa-heart mr-1"></i> Like</button>
                    <input type="submit" class="btn btn-primary" value="Practice" name="practice">
                </form>
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

    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('title') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
@stop