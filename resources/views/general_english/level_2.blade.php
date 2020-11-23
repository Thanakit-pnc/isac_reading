@extends('layouts.app')

@section('css')
<style>

    a:hover i.fas {
        animation: rotate-swing 1.1s ease-in-out alternate;
    }

    @keyframes rotate-swing {
        0% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
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
                <li class="breadcrumb-item active">Level 2</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="javascript: void(0);" class="read-btn">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">The Haunted House</h4>
                    </div>
                </a>

                <div class="card-box pt-1 border border-muted reading-content">
                    <h4><ins>The Haunted House</ins></h4>
                    <h4>Read :</h4>
                    <a href="{{ url('pdf/L2/the-haunted-house') }}" target="_blank" role="button" class="btn btn-dark btn-block"><i class="far fa-file-pdf"></i> PDF</a>
                    <h4>Downloads :</h4>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Workbook</div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Answer Key</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" class="read-btn">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Example 2</h4>
                    </div>
                </a>

                <div class="card-box pt-1 border border-muted reading-content">
                    <h4><ins>Example 2</ins></h4>
                    <h4>Read :</h4>
                    <a href="#" role="button" class="btn btn-dark btn-block"><i class="far fa-file-pdf"></i> PDF</a>
                    <h4>Downloads :</h4>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Workbook</div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Answer Key</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <a href="javascript: void(0);" class="read-btn">
                    <div class="widget-simple text-center card-box border-top border-primary border-2">
                        <i class="fas fa-book-open fa-4x text-primary mb-2"></i>
                        <h4 class="text-primary counter my-0">Example 3</h4>
                    </div>
                </a>

                <div class="card-box pt-1 border border-muted reading-content">
                    <h4><ins>Example 3</ins></h4>
                    <h4>Read :</h4>
                    <a href="#" role="button" class="btn btn-dark btn-block"><i class="far fa-file-pdf"></i> PDF</a>
                    <h4>Downloads :</h4>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Workbook</div>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <button class="btn btn-primary mr-2"><i class="fas fa-file-download"></i></button> 
                        <div class="font-weight-bold">Answer Key</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $('.reading-content').hide();

    $('.read-btn').each((index, item) => {
        $(item).click(function() {
            $(item).children().toggleClass('bg-primary');
            $(item).next().slideToggle();
        });
    });
</script>
@stop