@extends('layouts.app')

@section('css')
<style>
    .height {
        height: 60vh;
        overflow-y: auto;
    }
    .border-custom:not(:last-of-type) {
        border-bottom: 1px solid #777;
    }
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Academic Test 04</h3>
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">60</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
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

                    <div class="tab-content b-0 font-16 text-dark">

                        <div class="tab-pane" id="passage1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 1</h4>
                                    <p>
                                        You should spend about 20 minutes on <span class="font-weight-bold">Questions 1 - 14</span>, which are based on Reading Passage 1.
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height" id="sandbox">
                                        <h3 class="mt-0">Diamonds</h3>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">A</span>
                                            <span>
                                            The attraction of diamonds is difficult to beat. Their brilliance has inspired the rich and famous as well as being legendary for centuries and they remain an enduring symbol of love and tradition. The history of diamonds abounds with tales of superstition and mystery. One well-known example is the Koh-i-Noor, or Mountain of Light. First recorded in 1804 this 186-carat gem is said to bring “the power to rule the world” to whoever owned it. Passed down through the centuries from its first owner, an Indian prince, to its present owner, the British Royal family, the stone has been reduced to 109 carats. It is believed to bring luck to women wearers, but ill-fortune to men.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">B</span>
                                            <span>
                                            The diamond remains the world’s most popular gemstone, accessible to an international public extending beyond the privileged royal collections of centuries past. Today the gem accounts for an average 85 percent of total US gemstone sales by dollar volume. Most jewelers admit their clients are partial to diamonds. In substance as well as interest, diamonds endure. Diamond is the hardest of all gems and a stone of the simplest composition, being of pure crystallised carbon. Very few rough diamonds from the ground are beautiful; most must be cut and polished. Costly and difficult to mine, diamonds tend to be found in remote and unforgiving environments. The world’s largest mines are in Australia and South Africa. Others are in Zaire, Botswana and Russia.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">C</span>
                                            <span>
                                            To produce one carat of diamond, miners need to remove and process approximately 250 tons of ore. Even then, only 20 percent of all diamonds mined throughout the world are of gem quality. Due to colour or flaws, the remaining stones are suitable only for industrial purposes. Diamonds are measured in carats, corresponding to one fifth of a gram. The word “carat” is derived from the carob, used by Middle East traders because its seeds were so uniform in weight, assuring an accurate gauge on ancient scales. The carat, corresponding to the weight of one carob seed, was used as a standard measure until the 1900s when the metric system was introduced. Today, the carat is the measure of weight for most gems, except pearls; one carat is divided into 100 points.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">D</span>
                                            <span>
                                            Nearly half of a diamond’s weight is lost in the cutting process. A rough cut one-carat diamond rarely produces more than one-half carat polished stone.  When a master cutter examines a rough stone, he decides which form it should be given. The most popular shape for engagement rings remains the round brilliant cut.  When the original diamond does not best lend itself for this shape, it will be considered for “fancy cutting” as a marquise, oval, pear, emerald or heart shaped cut. The round brilliant, oval, marquise and pear classics are consistently cut and polished into 58 facets, or faces, each. It is the shape of these facets, which differ from one cutting to another, that determine the intensity of the diamond’s brilliance and “flame”.  No other gem can match its sparkle.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">E</span>
                                            <span>
                                            A method long used in faceting diamonds is cleaving. After studying the internal structure of a diamond carefully, the master cutter calculates where the diamond will divide cleanly and evenly if properly struck. He marks this point on the diamond, makes a thin groove and inserts his cleaving knife, then taps the knife with his hammer. If his calculations are correct, the diamond will divide accordingly; if not, the gem will fragment into thousands of pieces. Today, laser technology has allowed creation of different shapes, such as flowers, stars or animals, offering an alternative to the classic shapes. Each has its own particular appeal and one shape is not inherently better than the other.
                                            </span>
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold mr-2">F</span>
                                            <span>
                                            The overall value of a diamond is determined by its 4c’s — clarity, colour, carat weight and cut; whereas its quality is determined by its ‘fire’. The Gemological Institute of America (GIA) has established a strict scale of standards to define the qualities most desirable in a diamond. More than any other gemstone, diamonds represent romance, wealth and elegance. No other adornment could claim such a durable distinction.
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test04.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 2</h4>
                                    <p>
                                    You should spend about 20 minutes on <span class="font-weight-bold">Questions 15 - 27</span> , which are based on Reading Passage 2.
                                    </p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        <h3 class="mt-0">The wealth of happiness</h3>
                                        <p class="text-justify">
                                        It comes as no surprise to learn from a study published this week that, although Britons are twice as rich as they were in 1987, they are no happier.
                                        </p>
                                        <p class="text-justify">
                                        The lack of relationship between wealth and happiness has long been common knowledge, and the knowledge itself has long been a source of happiness to moralisers who like the fact that money is not life's answer. There are, though, two confusions involved in the idea that anything significant can be discovered by looking for a correlation between wealth and happiness. One concerns the nature of happiness, the other the nature of wealth. If you could arrange for Britain's population to make a sudden return to 1987 levels of income and possessions, almost everybody would be unhappy. As wealth increases, so do expectations, and so does being accustomed to the lifestyle that the new level of wealth brings. For most people it is likely that wealth has to improve in order for their happiness level to remain constant; if their wealth were to decline, so would their happiness.
                                        </p>
                                        <p class="text-justify">
                                        The important point here is that the concept of "happiness" is too vague and intangible a notion to be truly helpful. Instead of talking about happiness, one should talk about satisfaction, achievement, interest, engagement, enjoyment, growth and the constant opening of fresh possibilities. Very often the activities that yield these things are challenging, even effortful. A person in the midst of doing something objectively worthwhile might not describe himself as happy - usually he will be too absorbed to notice - and only later will realise that what it is to be happy is to be absorbed in something worthwhile.
                                        </p>
                                        <p class="text-justify">
                                        If mere happiness were the point, we could easily achieve it for everyone by suitably medicating the water supply with ‘happy drugs’. Such a state of induced, temporary happiness, however, is not the same as a conscious feeling of well-being. And once the effects wear off, the euphoria is reversed and depression sets in. But it has often been well said that the surest way to unhappiness is to seek happiness directly. Instead, happiness comes as a sideline of other endeavours that in themselves bring satisfaction and a sense of achievement. It is like the dot of light in a dark room that one cannot see when looking directly at it, but notices out of the corner of one's eye on looking away.
                                        </p>
                                        <p class="text-justify">
                                        The other confusion concerns wealth. If a person has a million pounds in the bank and never touches a penny of it, or a huge mansion and never occupies it, it is the same as if he had neither the money nor the house. What this shows is that wealth is not so much what one has, but what one does with it.  A man who has a thousand pounds and spends it on a wonderful trip to the Galapagos Islands is a rich man indeed: the experiences, the things learnt, the differences wrought in him by both, are true wealth. 
                                        </p>
                                        <p class="text-justify">
                                        If you would like to know how rich a person is, you need to ask not how much money he has, but how much he has spent. This idea is associated with the wise teaching that the philosophers and poets of antiquity never tired of repeating: that a rich person is he who has enough. If his needs are modest and his habits frugal, then so long as his resources provide enough to meet both, he is rich.
                                        </p>
                                        <p class="text-justify">
                                        But the man is poor who, despite owning millions, restlessly yearns for more because he feels he cannot have enough, and in particular who lacks the things money cannot buy - ah yes, for these unpurchasable treasures can never be left out of the picture: friendship, love, a sound digestion and a reliable, natural ability to sleep at nights, are indispensable to the possibility of happiness, if not directly supplying it. 
                                        </p>
                                        <p class="text-justify">
                                        In thinking about happiness and wealth, one should avoid using the words "happiness" and "wealth", and think instead of more accurate and more substantial words that denote what one truly thinks these things are. To mention satisfaction and achievement is to suggest activity of some kind - doing and making, helping, learning, changing - which might seem obvious to most, but is chosen by surprisingly few. Ruskin tellingly remarked "a man wrapped up in himself makes a very small parcel", and this, alas, characterises too many people. The limited surface area of such parcels does not attract much of the golden dust of satisfaction.
                                        </p>
                                        <p class="text-justify">
                                        The true equation between happiness and wealth is this: that happiness is wealth. Unlike wealth in the form of money and possessions, such happiness can never be quantified, only felt; and if one has it, it does not matter if the level of it always stays the same.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test04.passage2')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="passage3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">READING PASSAGE 3</h4>
                                    <p>
                                    You should spend about 20 minutes on <span class="font-weight-bold">Questions 28 - 40</span>, which are based on Reading Passage 3.
                                    </p>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height">
                                        <h3 class="mt-0">What’s on the menu for British diners?</h3>
                                        <p class="text-justify">
                                        Western diners should get used to the idea of eating insects because by 2020 it is "inevitable" they will form an important part of our diet, according to the entomologist who heads up the world's first university centre focusing on insects as a food source.      
                                        </p>
                                        <p class="text-justify">
                                        He argues that consumers who have traditionally turned their noses up at six-legged food may have to change their minds as conventional meat becomes more expensive and scarce.
                                        </p>
                                        <p class="text-justify">
                                        In an interview with Wired magazine, Prof Marcel Dicke of Wageningen University said: "The most important thing is getting people prepared, getting used to the idea. Because from 2020 onwards, there won't be much of a choice for us." He wants to persuade people to ditch prejudices about insects, and to persuade manufacturers and suppliers to come up with products that can be sold in "a reassuring and attractive manner". Dicke heads a Netherlands-based four-year programme aiming to produce a scientific and business plan to bring insects to western tables.
                                        </p>
                                        <p class="text-justify">
                                        More than 1,000 insect species are eaten around the world in 80% of countries – mostly in the tropics. The UN's Food and Agriculture Organisation says insects are vital to meeting the nutritional needs of the world's growing population, but they hardly feature in the diets of many rich nations.
                                        </p>
                                        <p class="text-justify">
                                        For centuries insects have been part of the daily diet of humans throughout the world, from the ants and larvae eaten as part of their subsistence diet by the tribes of Africa and Australia to the popular crispy-fried locust and beetle delicacies enjoyed in Thailand.
                                        </p>
                                        <p class="text-justify">
                                        Insects as food (known as entomophagy) are increasingly being promoted as an alternative which are more healthy, nutritious and sustainable than mainstream staples such as chicken, beef and fish.
                                        </p>
                                        <p class="text-justify">
                                        The starting point for the research programme at Wageningen University – led by a team of 70 researchers – is the notion that 80% of the world's population, knowingly or unknowingly, is already consuming insects. Ground insects are already found in common foods such as canned tomatoes and peanut butter, for example.
                                        </p>
                                        <p class="text-justify">
                                        As well as being low in cholesterol and high in protein, insects produce less waste, Dicke points out, as we typically throw away three-quarters of a chicken, but can eat the same percentage of a locust. Insects also win on the "conversion factor" or ration of feed ingested by the animal to the meat produced by it – known as ECI. Beef cattle has an ECI rate of 10 while the cockroach trumps with 44. The carbon emissions associated with growing insects is also far lower than those linked to conventional livestock.
                                        </p>
                                        <p class="text-justify">
                                        In the UK, the sale of insects for human consumption is part of what is still a niche food sector centred largely around novelty snacks. The specialist supplier Edible sells a range of delicacies ranging from Thai Curry crickets to BBQ worm crisps which are stocked by some of the best known High Street retailers. Tanya McMullen, grocery buying manager at Selfridges, said: "The Edible brand grows year after year. Our customers like it because it is so unusual. You don't find oven-baked tarantula and scorpion lollies in many places so it's a product most customers won't have seen before. It is difficult to say whether it's a current trend as it has always been a successful range for Selfridges but there is definitely an increasing number of discerning customers who are more and more willing to try something out of the ordinary. Sales are currently very strong having grown 20% in the last 12 months."
                                        </p>
                                        <p class="text-justify">
                                        In the UK, chefs report some success in encouraging their diners to eat creepy-crawlies. Daniel Creedon, head chef and manager of Archipelago restaurant in central London, buys frozen cricket and locusts in bulk from a supplier on the Isle of Wight. He says: "They are very popular and not just because of their quirkiness. I think our diners are genuinely interested in sustainability and diminishing food supplies. I bake them in the oven until they are crisp and then toss them in a wok with chilli and ginger as in my experience customers tend to be squeamish about anything that is soft and squidgy."
                                        </p>
                                        <p class="mb-0 font-weight-bold">The most commonly eaten insect species on the planet</p>
                                        <ol>
                                            <li>Beetles and cockroaches</li>
                                            <li>Flies</li>
                                            <li>Lice and coccidia</li>
                                            <li>Cicadas</li>
                                            <li>Wasps, bees and ants</li>
                                            <li>Termites</li>
                                            <li>Butterflies and moths</li>
                                            <li>Dragonflies</li>
                                            <li>Crickets and grasshoppers</li>
                                            <li>Mantises</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.academic.test04.passage3')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <ul class="list-inline wizard mb-0 d-flex justify-content-between">
                        <li class="previous list-inline-item">
                            <a href="javascript: void(0);" class="btn btn-secondary button-previous">Previous</a>
                        </li>
                        <li class="show list-inline-item">
                            <button type="button" class="btn btn-purple waves-effect waves-light d-none" data-toggle="modal" data-target="#modal-score" id="btn-score"><i class="fas fa-star"></i> Show Result</button>
                         </li>
                        <li class="next list-inline-item float-right">
                            <a href="javascript: void(0);" class="btn btn-secondary button-next">Next</a>
                        </li>
                        <li class="finish list-inline-item float-right">
                            <button type='button' class='btn btn-success' id="finish">Finish</button>
                            <a href="{{ url('/') }}" class="btn btn-primary d-none"><i class="fas fa-home"></i></a>
                         </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</form>

<div id="modal-score" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="myModalLabel"><i class="fas fa-star"></i> Show Result</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
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
    // $('.nav-item a[href="#passage3"]').tab('show')
    
    $('#finish').on('click', function() {
        Swal({
            type: 'warning',
            title: 'Are you sure.',
            text: 'you want to submit?',
            showCancelButton: true,
            allowOutsideClick: false
        }).then((result) => {
            if(result.value) {
                $('#form-exam').submit();
            } 
            return false;
        })
    })
    
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.ac-test-04') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('.finish #finish').hide();
                    $('.finish a').removeClass('d-none')
                    $('.show button').removeClass('d-none');
                    $('input, select').attr('disabled', 'disabled');
                }
                if(timeSt == '1') {
                    stopTime();
                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    });
 
    function showAnswer(data) {
        let results = Object.keys(data.exam).map(key => data.exam[key])
    
        $('#modal-score .modal-body').append(`
            <div class="text-right">
                <h4 class="mt-0">${data.total}</h4>
            </div>
            <div class="row text-dark">
                <div class="col-md-6 p-0 box-1 border border-dark"></div>
                <div class="col-md-6 p-0 box-2 border border-dark border-left-0"></div>
            </div>
        `)

        results.forEach((result, idx) => {
            if(idx < 20) {
                $('.box-1').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            } else {
                $('.box-2').append(`
                    <div class="d-flex p-1 border-custom">
                        <span class="font-weight-bold" style="flex: 50%;">${idx + 1}. ${result.stdAnswer == '' ? 'No answer' : result.stdAnswer}</span>
                        <div style="flex: 50%;">
                            <span class="mr-1">${ result.status == 'R' ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</span>
                            <span class="text-success font-weight-bold">${result.rightAnswer}</span>
                        </div>
                    </div>
                `)
            }
        })

        $('#modal-score').modal('show')
    }
</script>
@endsection