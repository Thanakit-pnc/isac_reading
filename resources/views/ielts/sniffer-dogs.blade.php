@extends('layouts.app')

@section('css')
<style>
    .position-absolute {
        position: absolute;
        top: 50px;
        right: 20px;
        z-index: 10000;
    }
</style>
@stop

@section('content')
<form id="form-exam" method="POST">
    <div class="row mt-1">
        <div class="col-md-6">
            <h3>Sniffer dogs</h3>    
        </div>
        <div class="col-md-6">
            @isset($timer)
                @if($timer == 1)
                <h4 class="text-right" id="time"><span class="text-danger">20</span> minutes <span class="text-danger">00</span> seconds</h4>
                @endif
            @endisset
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom sandbox">
                <p>
                <span class="font-weight-bold">Sniffer dogs</span> have been used at borders and airports for many years to sniff out the presence of illegal drugs and unwanted foodstuffs in passengers’ luggage. While not everyone welcomes the use of these animals in this intrusive manner, two recent studies have found a further way to exploit these natural skills. And no one is likely to question the benefits derived from such usage. The reason: sniffer dogs may be able to spot the early signs of cancer, well before the sufferers and the medical professionals ever could.
                </p>
                <p>
                The first study, carried out by researchers from Schillerhoehe Hospital in Germany, is the first to find that sniffer dogs can reliably detect lung cancer. Lung cancer is the second most frequent form of cancer in men and women across Europe with over 340,000 deaths per year. It is also the most common cause of death from cancer worldwide.
                </p>
                <p>
                The disease is not strongly associated with any symptoms and early detection is often by chance. Current methods of detection are unreliable and scientists have been working on using exhaled breath specimens from patients for future screening tests. This method relies on identifying volatile organic compounds (VOCs) that are linked to the presence of cancer. Although many different technological applications have been developed, this method is still difficult to apply in a clinical setting as patients aren't allowed to smoke or eat before the test, sample analysis can take a long time and there is also a high risk of interference. Because of these reasons, no lung cancer-specific VOCs have yet been identified.
                </p>
                <p>
                This new study aimed to assess whether sniffer dogs could be used to identify a VOC in the breath of patients. The researchers worked with 220 volunteers, including lung cancer patients, chronic obstructive pulmonary disease (COPD) patients and healthy volunteers. They used dogs that had been specifically trained.
                The researchers carried out a number of tests to see if the dogs were able to reliably identify lung cancer compared with healthy volunteers, volunteers with COPD and whether the results were still found with the presence of tobacco. The dogs successfully identified 71 samples with lung cancer out of a possible 100. They also correctly detected 372 samples that did not have lung cancer out of a possible 400.
                The dogs could also detect lung cancer independently from COPD and tobacco smoke. These results confirm the presence of a stable marker for lung cancer that is independent of COPD and also detectable in the presence of tobacco smoke, food odours and drugs.
                </p>
                <p>
                Author of the study, Thorsten Walles from Schillerhoehe Hospital, said: "In the breath of patients with lung cancer, there are likely to be different chemicals to normal breath samples and the dogs' keen sense of smell can detect this difference at an early stage of the disease. Our results confirm the presence of a stable marker for lung cancer. This is a big step forward in the diagnosis of lung cancer, but we still need to precisely identify the compounds observed in the exhaled breath of patients. It is unfortunate that dogs cannot communicate the biochemistry of the scent of cancer!"
                </p>
                <p>
                In the second study it was found that dogs can sniff out bowel cancer in breath and stool samples, with a very high degree of accuracy - even in the early stages of the disease. The findings prompt the authors to suggest that chemical compounds for specific cancers circulate throughout the body, which opens up the prospect of developing tests to pick up the disease before it has had the chance to spread elsewhere. 
                </p>
                <p>
                A specially trained Labrador retriever completed 74 sniff tests, each comprising five breath (100 to 200 ml) or stool samples (50 ml) at a time, only one of which was cancerous, over a period of several months. The samples came from 48 people with confirmed bowel cancer and 258 volunteers with no bowel cancer or who had had cancer in the past. Around half of the volunteer samples came from people with bowel polyps, which although benign, are considered to be a precursor of bowel cancer. And 6% of the breath samples and one in 10 of the stool samples from this group came from those with other gut problems, such as inflammatory bowel disease, ulcers, diverticulitis, and appendicitis. The bowel cancer samples came from patients with varying stages of disease, including early stages of the disease.  
                </p>
                <p>
                The dog successfully identified which samples were cancerous, and which were not, in 33 out of 36 breath tests and in 37 out of 38 stool tests, with the highest detection rates among those samples taken from people with early stage disease. This equates to 95% accuracy, overall, for the breath test and 98% accuracy for the stool test, compared with conventional colonoscopy - a procedure involving a tube with a camera on the end inserted through the back passage. 
                </p>
                <p>Samples from smokers or from those with other types of gut problems, which might be expected to mask or interfere with other smells, did not pose a problem for the dog. This indicates that there are specific discernible odours given off by cancer cells which circulate around the body, say the authors. And it is backed up by other research and anecdotal evidence indicating that dogs can sniff out bladder, skin, lung, breast and ovarian cancers, they add.
                </p>
                <p>
                The authors concede that using dogs to screen for cancers is likely to be impractical and expensive, but a sensor could be developed to detect the specific compounds. The faecal occult blood test, which picks up hidden blood in a stool sample is an effective and non-invasive method of screening for bowel cancer, say the authors, but it is only able to pick up early stage disease in one in 10 cases.
                </p>
                <p>
                "Early detection and early treatment are critical for the successful treatment of cancer and are excellent means for reducing both the economic burden and mortality [of bowel cancer]," comment the authors.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box font-16 text-dark overflow-custom">
            
                <h4 class="mt-0 mb-1">Questions 1 - 5</h4>
                <p class="mb-0">Classify the following statements as referring to the studies</p>
                <p>Select a letter, A, B, or C.</p>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">A. The first study</strong>
                            <strong class="font-weight-bold">B. The second study</strong>
                            <strong class="font-weight-bold">C.	Both Study 1 and 2</strong>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="q1" class="col-form-label">1. Dogs can identify the presence of cancer through the patient’s breath.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q1" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q2" class="col-form-label">2. Research involved both healthy people and people suffering from cancer. </label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q2" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q3" class="col-form-label">3. Both breath tests and stool tests were used.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q3" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q4" class="col-form-label">4. The dogs correctly identified the presence of cancer with 70% accuracy.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q4" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="q5" class="col-form-label">5. Specially trained dogs were used.</label>
                            <div class="d-flex align-items-center mb-2">
                                <select name="q5" class="form-control w-auto ml-2">
                                    <option value="">Select Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 6 – 10</h4>
                <p class="mb-0">Do the following statements agree with the information given in the passage?</p>
                <p class="font-weight-bold">For Questions 6 - 10 select</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">TRUE</strong>
                            <strong class="font-weight-bold">FALSE</strong>
                            <strong class="font-weight-bold">NOT GIVEN</strong>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex flex-column">
                            <p class="mb-0">if the statement agrees with the information</p>
                            <p class="mb-0">if the statement contradicts the information</p>
                            <p class="mb-0">if there is no information on this</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <p class="mb-1">6.	All travellers are happy to have sniffer dogs check their luggage.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q6" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">7.	Bowel cancer is more common in men than it is in women.	</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q7" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">8.	People with lung cancer have certain chemicals in their breath which reveal the presence of cancer.	</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q8" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">9.	It is thought that people suffering from bowel polyps may well develop cancer in the future.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q9" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                        <p class="mb-1">10.	Research has shown that sniffer dogs can also detect other forms of cancer apart from lunch and bowel cancer.</p>
                        <div class="d-flex align-items-center mb-2">
                            <select name="q10" class="form-control w-auto ml-2">
                                <option value="">Select Answer</option>
                                <option value="TRUE">TRUE</option>
                                <option value="FALSE">FALSE</option>
                                <option value="NOT GIVEN">NOT GIVEN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-dark my-2 border border-dark"></div>

                <h4 class="mt-0 mb-1">Questions 11 - 13</h4>
                <p>Choose the correct letter a, b, c, or d.</p>
                
                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">11.</span> Why is it difficult to spot ling cancer in its early stages?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-1" name="q11" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q11-1">a. There are so few trained dogs which can detect the disease early on.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-2" name="q11" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q11-2">b. There are few symptoms of the disease in its early stages.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-3" name="q11" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q11-3">c.	Scientists rely on identifying certain compounds.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q11-4" name="q11" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q11-4">d.	People like to smoke or eat before the test.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">12.</span>Why is the faecal blood test to detect bowel cancer not so reliable?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-1" name="q12" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q12-1">a.	Because it is effective and non-invasive.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-2" name="q12" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q12-2">b.	Because it is expensive to carry out.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-3" name="q12" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q12-3">c.	Because the success rate is only around 10%.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q12-4" name="q12" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q12-4">d. Because blood is often hidden in the stool samples.</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="col-form-label" class="d-flex"><span class="mr-1">13.</span> What are the problems of using dogs to detect cancer in its early stages?</label>
                    <div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-1" name="q13" class="custom-control-input" value="A">
                            <label class="custom-control-label" for="q13-1">a.	The fact that people feel the dogs are intrusive.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-2" name="q13" class="custom-control-input" value="B">
                            <label class="custom-control-label" for="q13-2">b.	The success rate is not very high.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-3" name="q13" class="custom-control-input" value="C">
                            <label class="custom-control-label" for="q13-3">c.	The associated costs may be high.</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="q13-4" name="q13" class="custom-control-input" value="D">
                            <label class="custom-control-label" for="q13-4">d.	The fact that dogs cannot communicate the biochemistry.</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success">Show Answer</button>
            <button type="button" id="reset" class="btn btn-secondary">Reset</button>
            <a href="{{ url('/') }}" type="button" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
        </div>
    </div>
</form>

<!-- Modal Show Score -->
<div class="modal fade" id="modal-score" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-1 bg-primary">
                <h4 class="modal-title text-white" id="myCenterModalLabel">Score result</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h3 id="score" class="text-center"></h3>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
@isset($timer)
    @if($timer == 1)
    <script src="{{ asset('public/js/timer.js') }}"></script>
    @endif
@endisset
<script>
    $('input, select').attr('required', 'required');
    $('#form-exam').on('submit', function(e) {
        let timeSt = "{{ $timer }}";
        e.preventDefault();
        let data = $("#form-exam").serialize();
        $.ajax({
            type: "post",
            url: "{{ route('store.exam-twentytwo') }}",
            data: {_token: "{{ csrf_token() }}", data},
            dataType: "json",
            success: function(data) {
                if(data.message == 'success') {
                    showAnswer(data.results);
                    $('button[type="submit"]').hide();
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
        $('#modal-score').modal('show');
        $('#modal-score').find('#score').text(data.total);

        for(let quiz in data.exam) {

            let select = $(`select[name="${quiz}"]`);
            let radio = $(`input[name="${quiz}"]`);

            if(data.exam[quiz].status == 1) {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-success');
            } else {
                $(`<span class="ml-2 text-success font-weight-bold">${data.exam[quiz].rightAnswer}</span>`).insertAfter(select);
                select.addClass('border border-danger');
            }

            radio.each((idx, item) => {
                if ($(item).is(":checked")) {
                    if($(item).val() == data.exam[quiz].rightAnswer) {
                        $(item).next().addClass('text-success');
                    } else {
                        $(item).next().addClass('text-danger');
                    }
                } else {
                    if($(item).val() == data.exam[quiz].rightAnswer) {
                        $(item).next().addClass('text-success');
                    } 
                }   
            });
        }
    }
</script>
@stop