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
            <h4>Level 1</h4>
            <ol class="breadcrumb m-0 pt-0 p-sm-2">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">Level 1</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="A busy day">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">A busy day</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="A day in the life">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">A day in the life</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="Ali's day">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Ali's day</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="Ananda and his monkey">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Ananda and his monkey</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="Athong and Anchalee">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Athong and Anchalee</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="Broken Legs">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Broken Legs</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="The Monkey and the Coconuts">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Monkey and the Coconuts</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="Noi's table">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Noi's table</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="The Cockroach">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Cockroach</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" data-toggle="modal" data-target="#ielts-level-1" data-title="The Monkey and the Umbrella">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Monkey and the Umbrella</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="ielts-level-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary py-2">
                <h4 class="modal-title text-white" id="full-width-modalLabel"></h4>
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
    $('#ielts-level-1').on('show.bs.modal', function(e) {
        let btn = $(e.relatedTarget);
        
        let title = btn.data('title');
        let slugUrl;

        if(title.includes("'")) {
            slugUrl = title.toLowerCase().replaceAll(' ', '-').replaceAll("'", "");
        } else {
            slugUrl = title.toLowerCase().replaceAll(' ', '-');
        }

        let readPdf = slugUrl + '-story.pdf#toolbar=0';
        let workbook = slugUrl + '-workbook.pdf';
        let answerkey = slugUrl + '-answerkey.pdf';

        let modal = $(this);

        modal.find('h4.modal-title').text(title)
        modal.find('#read').attr('href', `{{ asset('public/assets/pdf/L1/${readPdf}') }}`)
        modal.find('#workbook').attr('href', `{{ asset('public/assets/pdf/L1/${workbook}') }}`)
        modal.find('#answerkey').attr('href', `{{ asset('public/assets/pdf/L1/${answerkey}') }}`)
    })

    $('#ielts-level-3').on('hide.bs.modal', function (e) {
        $('a[data-target="#ielts-level-1"]').children().removeClass('bg-primary')
    })
</script>
@stop