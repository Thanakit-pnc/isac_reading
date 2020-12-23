@extends('layouts.app')

@section('css')
@stop

@section('content')
<form id="form-exam">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Practice Test 01</h3>
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">40</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div id="wizard">

                    <ul class="nav nav-pills nav-justified form-wizard-header">
                        <li class="nav-item">
                            <a href="#passage1" data-toggle="tab" class="nav-link"> 
                                <span class="number">1</span>
                                <span class="d-none d-sm-inline">Passage 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passage2" data-toggle="tab" class="nav-link">
                                <span class="number">2</span>
                                <span class="d-none d-sm-inline">Passage 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passage3" data-toggle="tab" class="nav-link">
                                <span class="number">3</span>
                                <span class="d-none d-sm-inline">Passage 3</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content b-0 mb-4 font-16 text-dark">

                        <div class="tab-pane" id="passage1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0">READING PASSAGE 1</h4>
                                    <p>
                                        You should spend about 20 minutes on <span class="font-weight-bold">Questions 1- 14</span>, which are based on Reading Passage 1.
                                    </p>
                                </div>
                                <div class="col-lg-6 height">
                                    <h4 class="text-center">Calcutta</h4>
                                    <p  class="text-justify">
                                        <span class="font-weight-bold mr-2">A</span>
                                        <span>
                                            Calcutta, the world’s fourth largest city, inhabited by over fifteen million people of radically different backgrounds, religions and beliefs, is  a hotbed of literature and the arts, of culture and fiercely defended political causes, it leaves no-one indifferent, this crowded, noisy melting-pot in which extreme poverty and a show of great wealth are but a hair’s breadth apart.
                                        </span>
                                    </p>
                                    <p  class="text-justify">
                                        <span class="font-weight-bold mr-2">B</span>
                                        <span>
                                            Misunderstood, maligned and defended in turns, Calcutta is swamped by the fall-out of India’s population explosion, much of this being accounted for by urban migration, the search for opportunities in the large city.  Yet rather than being a drain on the country’s resources, this, the biggest city in India, is a huge, grimy, sweaty dynamo, its industrial, port and rail workers toiling away so that the Indian economy can flourish.  One of the chief commercial nerve centres of the country, it groans under a cloud of factory pollution, reverberates to the noise of steamer horns and, as the starting-point of two great rail networks, recovers twice daily after a rush-hour in which 1.6 million people pass through the chaos of the main railway station.
                                        </span>
                                    </p>
                                    <p  class="text-justify">
                                        <span class="font-weight-bold mr-2">C</span>
                                        <span>
                                            On the streets of Calcutta, one is besieged not just by beggars, but by shoe-shine boys, hawkers and salesmen of all descriptions.  Rich in the heart of it all, on the Esplanade, the late 19th century buildings such as the Oberoi Grand, the Indian Museum and a whole collection of once majestic public buildings, symbolise Calcutta’s faded grandeur.  They overlook the Maidan, a vast two-mile long and one-mile wide park, with the second largest cricket stadium and the only Ladies Golf Club in the world.  But describing the Maidan in terms of its monuments and sports facilities gives no indication as to how lively it is.  In the 19th century, fervent Bengali nationalists organised great fairs on the Maidan, with music, dance, theatre and lectures.  It was here that India’s first Nobel Laureate, the great Bengali literary figure Rabindranath Tagore, made his public debut, aged fifteen.
                                        </span>
                                    </p>
                                </div>
                                <div class="col-lg-6 height">
                                    <h1>Exam 1</h1>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage2">
                            <h1>P 2</h1>
                        </div>

                        <div class="tab-pane" id="passage3">
                            <h1>P 3</h1>
                        </div>

                    </div>
                    
                    <ul class="list-inline wizard mb-0">
                        <li class="previous list-inline-item">
                            <a href="javascript: void(0);" class="btn btn-secondary button-previous">Previous</a>
                        </li>
                        <li class="next list-inline-item float-right">
                            <a href="javascript: void(0);" class="btn btn-secondary button-next">Next</a>
                        </li>
                        <li class="finish list-inline-item float-right">
                            <input type='button' class='btn btn-success' value='Finish' id="finish" />
                         </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('javascript')
@isset($timer)
    @if($timer == 1)
    <script src="{{ asset('public/js/timer_ielts.js') }}"></script>
    @endif
@endisset
<!-- Plugins js-->
<script src="{{ asset('public/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<!-- Init js-->
<script src="{{ asset('public/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ asset('public/assets/js/wizard.js') }}"></script>
<script>
    
</script>
@endsection