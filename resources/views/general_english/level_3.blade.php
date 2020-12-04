@extends('layouts.app')

@section('css')
<style>
    a i.fas.fa-book-open {
        transition: all .2s ease-in-out;
    }

    a:hover i.fas.fa-book-open {
        transform: scale(1.1);
    }

    .bg-primary * {
        color: white !important;
    }
</style>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-center">
            <h4>Level 3</h4>
            <ol class="breadcrumb m-0 pt-0 p-sm-2">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">Level 3</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-4">
                <a type="button" class="btn-block" data-toggle="modal" data-target="#ielts-level-3" data-title="The Fisherman and the Mermaid">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Fisherman and the Mermaid</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a type="button" class="btn-block" data-toggle="modal" data-target="#ielts-level-3" data-title="The Haunted House">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Haunted House</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a type="button" class="btn-block" data-toggle="modal" data-target="#ielts-level-3" data-title="The Princess and the Gardener">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Princess and the Gardener</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a type="button" class="btn-block" data-toggle="modal" data-target="#ielts-level-3" data-title="The Accident">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Accident</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="ielts-level-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white" id="full-width-modalLabel">asdasd</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-2">
                <h4 class="mt-0">Read :</h4>
                <a id="read" href="" target="_blank" role="button" class="btn btn-dark btn-block"><i class="far fa-file-pdf"></i> Story</a>
                <h4>Downloads :</h4>
                <div class="d-flex align-items-center">
                    <a id="workbook" href="" class="btn btn-primary mr-2" download><i class="fas fa-file-download"></i></a> 
                    <div class="font-weight-bold">Workbook (PDF downloadable)</div>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <a id="answerkey" href="" class="btn btn-primary mr-2" download><i class="fas fa-file-download"></i></a> 
                    <div class="font-weight-bold">Answer Key (PDF downloadable)</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $('#ielts-level-3').on('show.bs.modal', function(e) {
        let btn = $(e.relatedTarget);
        
        btn.children().addClass('bg-primary')

        let title = btn.data('title');

        let slugUrl = title.toLowerCase().replaceAll(' ', '-');
        let readPdf = slugUrl + '-story';
        let workbook = slugUrl + '-workbook.pdf';
        let answerkey = slugUrl + '-answerkey.pdf';

        let modal = $(this);

        modal.find('h4.modal-title').text(title)
        modal.find('#read').attr('href', `{{ url('pdf/L3/${readPdf}') }}`)
        modal.find('#workbook').attr('href', `{{ asset('public/assets/pdf/L3/${workbook}') }}`)
        modal.find('#answerkey').attr('href', `{{ asset('public/assets/pdf/L3/${answerkey}) }}`)
    })

    $('#ielts-level-3').on('hide.bs.modal', function (e) {
        $('a[data-target="#ielts-level-3"]').children().removeClass('bg-primary')
    })
</script>
@stop