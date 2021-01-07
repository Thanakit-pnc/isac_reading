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
    .thead th {
        vertical-align: middle !important;
        font-weight: bold;
    }
    /* @media(max-width: 1280px) {
        input[type=text] {
            width: 75% !important;
        }
    } */
</style>
@stop

@section('content')
<form id="form-exam" method="post">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>General Training Test 04</h3>
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
                            <a href="#section1" data-toggle="tab" class="nav-link"> 
                                <span class="number">1</span>
                                <span class="d-none d-sm-inline">Section 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#section2" data-toggle="tab" class="nav-link">
                                <span class="number">2</span>
                                <span class="d-none d-sm-inline">Section 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#section3" data-toggle="tab" class="nav-link">
                                <span class="number">3</span>
                                <span class="d-none d-sm-inline">Section 3</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content b-0 font-16 text-dark">

                        <div class="tab-pane" id="section1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0">SECTION 1 Questions 1 – 14</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height" id="sandbox">
                                        <h5 class="mt-0 mb-3">
                                            Read the text below and answer Questions 1-6.
                                        </h5>
                                        <h4 class="mt-0 text-center">Need a short break? Three package deals to choose from:</h4>
                                        
                                        <table class="table table-bordered table-sm text-dark my-3">
                                            <thead>
                                                <tr class="text-center thead">
                                                    <th>No.</th>
                                                    <th>Name + Location</th>
                                                    <th>Cost</th>
                                                    <th>Length of stay</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-bold">A</td>
                                                    <td>
                                                        <p class="font-weight-bold">Seaview Resort</p> 
                                                        Tranquil beach-front hotel on remote island located in Andaman Sea. <br><br> Private speed boat to and from mainland (free)
                                                    </td>
                                                    <td>
                                                        $700 (per person)
                                                    </td>
                                                    <td>
                                                        3D/2N (not including weekends)
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Free water sports</li>
                                                            <li>All meals provided</li>
                                                            <li>Closed during monsoon season (May-June)</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">B</td>
                                                    <td>
                                                        <p class="font-weight-bold">Forest Retreat</p> 
                                                        Get back to nature in style: pine cabins set back among the trees. <br><br> Access road for 4-wheel drive vehicles
                                                    </td>
                                                    <td>
                                                        $750 (per cabin: sleeps 6)
                                                    </td>
                                                    <td>
                                                        4D/3N
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Self-catering</li>
                                                            <li>BBQ pits provided</li>
                                                            <li>Guide available for trekking</li>
                                                            <li>Mosquito nets provided</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">C</td>
                                                    <td>
                                                        <p class="font-weight-bold">Lakeside Villas</p> 
                                                        Set in National Park: 5-star luxury on shore of Lake Tarn; breath-taking views of extinct volcano <br><br> Public transport (bus) to Park, then 500-metre walk to villas.
                                                    </td>
                                                    <td>
                                                        $1000 (per villa: max 2 pax)
                                                    </td>
                                                    <td>
                                                        2D/1N
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Inclusive all meals (X3)</li>
                                                            <li>Tennis and squash courts available</li>
                                                            <li>Includes guided walk around lake</li>
                                                            <li>Suitable for more mature guests</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4 class="text-center">Special discounts for September!</h4>

                                        <div class="pt-1 bg-dark my-2"></div>
                                        
                                        <h5 class="mb-3">Read the text below and answer Questions 7-14.</h5>

                                        <div>
                                            <div class="border px-2 font-14">
                                                <h4 class="text-center">AIC  INSURANCE</h4>
                                                <div class="row font-weight-bold mb-1">
                                                    <div class="col-6">Holiday Insurance Cover:</div>
                                                    <div class="col">
                                                        Standard Policy
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3 font-weight-bold">Period of cover:</div>
                                                    <div class="col">
                                                        1 month / 3 months / 12 months (circle preferred option)
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3 font-weight-bold">No of trips:</div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                Single trip <i class="far fa-square align-middle ml-2 font-18"></i>
                                                            </div>
                                                            <div class="col-auto">
                                                                Multiple trips <i class="far fa-square align-middle ml-2 font-18"></i>
                                                            </div>
                                                            <div class="col-6">
                                                                Specify number __________
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-3 font-weight-bold">Areas covered:</div>
                                                    <div class="col">
                                                        All countries with the exception of the USA
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-12 font-weight-bold">Inclusions:</div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li class="font-weight-bold">Medical</li>
                                                            <ul>
                                                                <li>All transportation costs (including airlift,  emergency evacuation and repatriation to country of origin)</li>
                                                                <li>Hospital accommodation and accompanying medical costs to a daily maximum of $500</li>
                                                                <li>Work person’s compensation: $60 for each working day lost through sickness and/or injury</li>
                                                            </ul>
                                                        </ul>
                                                        <ul>
                                                            <li class="font-weight-bold">Travel:</li>
                                                            <ul>
                                                                <li>Cancellation fees as a result of illness to self or family members</li>
                                                                <li>All hotel accommodation as a result of delays (in excess of 12 hours) and flight cancellations. </li>
                                                                <li>Lost baggage: a maximum of $120 per lost item</li>
                                                            </ul>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-12 font-weight-bold">Exclusions:</div>
                                                    <div class="col-12">
                                                        <ul style="list-style-type: circle;">
                                                            <li>Pre-existing medical conditions and any medication for such conditions</li>
                                                            <li>Out-patient visits: except for accidents and emergencies</li>
                                                            <li>Death or injury through extreme sports such as:</li>
                                                            <ul style="list-style-type: square;">
                                                                <li>Bunjee jumping</li>
                                                                <li>Para-gliding</li>
                                                                <li>Mountaineering</li>
                                                                <li>Scuba diving</li>
                                                            </ul>
                                                            <li>Acts of terrorism, including hi-jacking and bombing</li>
                                                            <li>Natural disasters: e.g. floods, cyclones, tsunamis</li>
                                                            <li>Lost baggage: photographic equipment not included</li>
                                                            <li>The cost of meals incurred as a result of flight delays and cancellations</li>
                                                            <li>Loss of cash</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="d-flex font-14">
                                                    <h5 class="mr-2">N.B.</h5>
                                                    <h5>All receipts and medical certificates must accompany each claim. In the case of lost property, a relevant police report must accompany the claim.</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test04.passage1')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0">SECTION 2 Questions 15 – 27</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 15-21.</h5>
                                        <h4 class="mt-0">E-mail etiquette: some basic rules for sending electronic mail</h4>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">1. Be concise and to the point:</span> Do not make an e-mail longer than it needs to be. Remember that reading an e-mail is harder than reading printed communications and a long e-mail can be very discouraging to read. 
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">2. Answer all questions, and pre-empt further questions:</span> An email reply must answer all questions, and pre-empt further questions – If you do not answer all the questions in the original email, you will receive further e-mails regarding the unanswered questions, which will not only waste your time and your customer’s time but also cause considerable frustration. Moreover, if you are able to pre-empt relevant questions, your customer will be grateful and impressed with your efficient and thoughtful customer service. Imagine for instance that a customer sends you an email asking which credit cards you accept. Instead of just listing the credit card types, you can guess that their next question will be about how they can order, so you also include some order information and a URL to your order page. Customers will definitely appreciate this. 
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">3. Use proper spelling, grammar & punctuation:</span> This is not only important because improper spelling, grammar and punctuation give a bad impression of your company, it is also important for conveying the message properly. E-mails with no full stops or commas are difficult to read and can sometimes even change the meaning of the text. And, if your program has a spell checking option, why not use it?
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">4. Make it personal:</span> Not only should the e-mail be personally addressed, it should also include personal i.e. customized content. For this reason auto replies are usually not very effective. However, templates can be used effectively in this way, see next tip.
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">5. Answer swiftly:</span> Customers send an e-mail because they wish to receive a quick response. If they did not want a quick response they would send a letter or a fax. Therefore, each e-mail should be replied to within at least 24 hours, and preferably within the same working day. If the email is complicated, just send an email back saying that you have received it and that you will get back to them. This will put the customer's mind at rest and usually customers will then be very patient!
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">6. Do not attach unnecessary files:</span> By sending large attachments you can annoy customers and even bring down their e-mail system. Wherever possible try to compress attachments and only send attachments when they are productive. Moreover, you need to have a good virus scanner in place since your customers will not be very happy if you send them documents full of viruses!
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">7. Use proper structure & layout:</span> Since reading from a screen is more difficult than reading from paper, the structure and lay out is very important for e-mail messages. Use short paragraphs and blank lines between each paragraph. When making points, number them or mark each point as separate to keep the overview. 
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">8. Do not write in CAPITALS:</span> IF YOU WRITE IN CAPITALS IT SEEMS AS IF YOU ARE SHOUTING. This can be highly annoying and might trigger an unwanted response in the form of a flame mail. Therefore, try not to send any email text in capitals.
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">9. Read the email before you send it:</span> A lot of people don't bother to read an email before they send it out, as can be seen from the many spelling and grammar mistakes contained in emails. Apart from this, reading your email through the eyes of the recipient will help you send a more effective message and avoid misunderstandings and inappropriate comments.
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">10. Take care with abbreviations and emoticons:</span> In business emails, try not to use abbreviations such as BTW (by the way) and LOL (laugh out loud). The recipient might not be aware of the meanings of the abbreviations and in business emails these are generally not appropriate. The same goes for emoticons, such as the smiley :-). If you are not sure whether your recipient knows what it means, it is better not to use it.
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">11. Do not use email to discuss confidential information:</span> Sending an email is like sending a postcard. If you don't want your email to be displayed on a bulletin board, don't send it. Moreover, never make any libelous, sexist or racially discriminating comments in emails, even if they are meant to be a joke.
                                        </p>
                                        <p class="text-justify">
                                            <span class="font-weight-bold">12. Avoid long sentences:</span> Try to keep your sentences to a maximum of 15-20 words. Email is meant to be a quick medium and requires a different kind of writing than letters. Also take care not to send emails that are too long. If a person receives an email that looks like a dissertation, chances are that they will not even attempt to read it!
                                        </p>

                                        <div class="pt-1 bg-dark my-3"></div>

                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="mt-0 mb-3">Read the text below and answer Questions 22-27.</h5>
                                                <h4>Health and safety in the construction industry</h4>

                                                <p class="text-justify">
                                                    Construction is one of Australia’s highest risk industries. 
                                                    In 20011-12, the construction industry employed 5% of the Australian workforce but accounted for 9% of the accepted workers’ compensation claims involving an average of three weeks off work that were lodged in that year. On average, 49 building and construction workers have been killed at work each year in Australia since 1997–98. People working in the construction industry are more than twice as likely to be killed at work as the average worker in all Australian industries. In 2011–12, for example, workers compensation records show there were 9.2 fatalities per 100,000 employees in the construction industry, compared with the national average of 3.1 fatalities per 100,000 employees.
                                                </p>
                                                <p class="text-justify">
                                                    <span class="font-weight-bold">‘Construction work’ </span> means any work on or in the vicinity of a construction site carried out in connection with the construction, alteration, conversion, fitting out, commissioning, renovation, repair, maintenance, de-commissioning, demolition or dismantling of any structure, and includes: 
                                                </p>
                                                <p class="d-flex px-2">
                                                    <span class="mr-2">(a)</span>
                                                    <span>the demolition or dismantling of a structure, or part of a structure, and the removal from the construction site of any product or waste resulting from the demolition or dismantling; </span>
                                                </p>
                                                <p class="d-flex px-2">
                                                    <span class="mr-2">(b)</span>
                                                    <span>the assembly of prefabricated elements to form a structure or the disassembly of prefabricated elements, which, immediately before such disassembly, formed a structure; </span>
                                                </p>
                                                <p class="d-flex px-2">
                                                    <span class="mr-2">(c)</span>
                                                    <span>any work in connection with any excavation, landscaping, preparatory work, or site preparation carried out for the purpose of any work referred to in this definition; and </span>
                                                </p>
                                                <p class="text-justify">but does not include the exploration for or extraction of mineral resources or preparatory work relating to the extraction carried out at a place where such exploration or extraction is carried out. </p>

                                                <h5 class="font-weight-bold">Occupational health and safety training </h5>
                                                <p class="text-justify">Adequate training in health and safety issues in construction should be provided to all persons with control of construction projects, all persons with control of construction work and all persons undertaking construction work, with the exception of: </p>
                                                <p class="d-flex px-2">
                                                    <span class="mr-2">(a)</span>
                                                    <span>visitors to a construction site who are accompanied by a person who has received occupational health and safety induction training; and </span>
                                                </p>
                                                <p class="d-flex px-2">
                                                    <span class="mr-2">(b)</span>
                                                    <span>persons temporarily at a construction site to deliver plant, supplies, materials or services where a risk assessment indicates that any risks to such persons can be controlled through other measures. </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test04.passage2')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="section3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 mb-0">SECTION 3 Questions 28 – 40</h4>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="card-box height">
                                        <h5 class="mt-0 mb-3">Read the text below and answer Questions 28 – 40.</h5>
                                        <h4>The driest place on earth</h4>
                                        <p class="text-justify">
                                            The Atacama Desert eco-region, as defined by the World Wide Fund for Nature (WWF), extends from a few kilometers south of the Peru-Chile border to about 30° south latitude. To the north lies the Peruvian Sechura Desert eco-region, whilst to the south is the Chilean Matorral eco-region.The National Geographic Society, by contrast, considers the coastal area of southern Peru to be part of the Atacama Desert. It includes in this definition the deserts south of the Ica Region in Peru.
                                        </p>
                                        <p class="text-justify">
                                            Atacama Desert is commonly known as the driest place in the world. The average rainfall in the Chilean region of Antofagasta is just 1 millimetre per year. Some weather stations in the Atacama have never received rain. Evidence suggests that the Atacama may not have had any significant rainfall from 1570 to 1971. It is so arid that mountains that reach as high as 6,885 metres are completely free of glaciers and, in the southern part from 25°S to 27°S, may have been glacier-free throughout the Quaternary, though permafrost extends down to an altitude of 4,400 metres and is continuous above 5,600 metres. Studies by a group of British scientists have suggested that some river beds have been dry for 120,000 years. However, some locations in the Atacama receive a marine fog known locally as the camanchaca, providing sufficient moisture for algae, lichens and even some cacti – the genus Copiapoa is notable among these. Geographically, the aridity can be explained by the following reasons:s
                                        </p>
                                        <ul>
                                            <li>The desert is located on the leeward side of the Chilean Coast Range, so little moisture from the Pacific Ocean can reach the desert.</li>
                                            <li>The Andes are so high that they block convective clouds, which may bring precipitation, formed above the Amazon Basin from entering the desert from the east.</li>
                                            <li>An inversion layer is created by the cold Humboldt current and the South Pacific High.</li>
                                        </ul>
                                        <p class="text-justify">
                                            In July 2011, an extreme Antarctic cold front broke through the rain shadow, bringing 80 cm of snow to the plateau, stranding residents across the region, particularly in Bolivia, where many drivers became stuck in snow drifts and emergency crews became overtaxed with a large number of rescue calls. The total rainfall for the winter of 2011 was sufficient for wildflowers to bloom in the Atacama. 
                                        </p>
                                        <p class="text-justify">
                                            The Atacama is sparsely populated, with most cities located along the Pacific coast. Towards Ataca, near the deserted coast, you see a land without men, where there is not a bird, not a beast, nor a tree, nor any vegetation. In interior areas, oases and some valleys have been populated for millennia, being the seat of the most advanced Pre-Columbian societies found in Chile. These oases have had little population growth and urban development, and have, since the 20th century, faced conflicts over water resources that are needed for the coastal cities and the mining industry. San Pedro de Atacama, at about 2,000 metres elevation, is a typical example. Its church was built by the Spanish in 1577. In pre-Hispanic times, before the Inca empire, the extremely arid interior was inhabited mainly by the Atacameño tribe. The tribe is noted for the construction of fortified towns called pucarás, one of which can be seen a few kilometers from San Pedro de Atacama.
                                        </p>
                                        <p class="text-justify">
                                            The coastal cities originated in the 16th, 17th, and 18th centuries during the time of the Spanish Empire, when they emerged as shipping ports for silver produced in Potosí and other mines. During the 19th century the desert came under control of Bolivia, Chile, and Peru, and soon became a zone of conflict due to unclear borders and the discovery of sodium nitrate deposits. After the War of the Pacific, in which Chile annexed most of the desert, cities along the coast developed into international ports, and many Chilean workers migrated there. With the guano and saltpeter booms of the 19th century the population grew immensely, mostly due to immigration from central Chile. 
                                        </p>
                                        <p class="text-justify">
                                            The Atacama desert again became a source of wealth from the 1950s onwards due to copper mining. The Escondida and Chuquicamata copper mines are located within the Atacama Desert. The desert has rich deposits of copper and other minerals, and the world's largest natural supply of sodium nitrate, which was mined on a large scale until the early 1940s. The Atacama border dispute over these resources between Chile and Bolivia began in the 19th century.  In the 20th century the nitrate industry declined and at the same time the largely male population of the desert became increasingly problematic for the Chilean state. Mineworkers and mining companies came into conflict, and protests spread throughout the region. Now the desert is littered with approximately 170 abandoned nitrate (or "saltpetre") mining towns, almost all of which were shut down decades after the invention of synthetic nitrate in Germany at the turn of the 20th century.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box height">
                                        @include('ielts_tests.general.test04.passage3')
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
    <div class="modal-dialog modal-xl">
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
    // $('.nav-item a[href="#section3"]').tab('show')
    
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
            url: "{{ route('store.gt-test-04') }}",
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