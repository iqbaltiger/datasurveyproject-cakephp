<?php echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  


    $(window).load(function () {


        var SummationArr = 0;
        for (j = 0; j < 4; j++) {

            var SummationArr = SummationArr + (Number($('#' + j + 'EthnicSectionBScore').val()));

        }
        //alert(SummationArr);
        $('#first_sum').text(SummationArr);

        var SummationArr_Second = 0;
        for (j = 4; j < 13; j++) {

            var SummationArr_Second = SummationArr_Second + (Number($('#' + j + 'EthnicSectionBScore').val()));

        }
        //alert(SummationArr);
        $('#second_sum').text(Number(SummationArr_Second));

        var SummationArr_Third = 0;
        for (j = 13; j < 20; j++) {

            var SummationArr_Third = SummationArr_Third + (Number($('#' + j + 'EthnicSectionBScore').val()));

        }
        //alert(SummationArr);
        $('#third_sum').text(Number(SummationArr_Third));

        var GrandTotal = (Number($('#third_sum').text()) + Number($('#second_sum').text()) + Number($('#first_sum').text()));


        $('#gtotal').text(GrandTotal);
    });

    $(function () {

        for (i = 0; i < 40; i++) {
            $('#' + i + 'mytest').hide();

        }




        //  alert(SummationArr);


//        num1 = Number($('#0EthnicSectionBScore').val());
//        num2 = Number($('#1EthnicSectionBScore').val());
//        num3 = Number($('#2EthnicSectionBScore').val());
//        num4 = Number($('#3EthnicSectionBScore').val());
//        
//        Total = num1+num2+num3+num4;
//         $('#first_sum').text(Total);


        $("0EthnicSectionBScore").attr("value", "change value");
        //$('#0EthnicSectionBScore').val()='hihih';
//        for (j = 0; j < 20; j++) {
//
//
//            $('#' + j + 'EthnicSectionBResponse').change(function () {
//
//                var dropdownValue = $('#' + j + 'EthnicSectionBResponse').val();
//
//
//
//            })
//
//
//        }


    })
</script>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('ETHNIC IDENTIFICATION'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION- B: ETHNIC GROUP IDENTIFICATION</h4>
                        <h5><b>B- 02: INTERNAL ASPECTS OF ETHNIC IDENTITY(জাতিসত্তার পরিচিতির অদৃশ্য নিয়ামক সমূহ নির্ণয়)</b></h5>
                        <p><strong>নির্দেশনা </strong><strong>:</strong><strong> </strong>এটি কোন পরীক্ষা নয় ; এটি আপনাদের মতামতের উপর একটি জরিপ । <strong>এখানে</strong><strong> </strong><strong>সঠিক</strong><strong> </strong><strong>বা</strong><strong> </strong><strong>ভূল</strong><strong> </strong><strong>উত্তর</strong><strong> </strong><strong>বলে</strong><strong> </strong><strong>কিছু</strong><strong> </strong><strong>নেই </strong><strong>।</strong> অনুগ্রহ করে নিচের প্রতিটি বাক্য/ বিবৃতি মনযোগদিয়ে পড়ন/ শুনুন এবং আপনার মতামতটি সঠিকভাবে প্রতিফলিত হয় এমন উত্তরটি নির্বাচন করুন । অনুগ্রহ করে, যথাসম্ভব সততার সহিত আপনার মতামত প্রদান করুন । </p>
                        <h5>&nbsp;</h5>


                        <?php echo $this->Form->create('EthnicSectionB', array('class' => '')); ?>                         


                        <?php
                        $prevailing_type_part_one = array(
                            'আমি ছোটবেলা থেকেই আমার জাতিসত্তার উৎপত্তি, ইতিহাস, ঐতিহ্য ও প্রথা সম্পর্কে জানি । (I had been learning, since my childhood, about the origin, history, traditions, and customs of my own ethnic group.)',
                            'স্থানীয় এলাকার অন্যান্য জাতি গোষ্ঠীর সদস্যদের মাঝে আমাদের স্বতন্ত্র জাতি ত্তার পরিচিতির স্বীকৃতি রয়েছে।(We are recognized as a separate ethnic identity by the local people of other ethnic group.)',
                            'অত্র জেলা ও উপজেলার সরকারি কর্মকর্তাদের মাঝে আমাদের স্বতন্ত্র জাতিসত্তার পরিচিতির স্বীকৃতি রয়েছে ।We are recognized as a separate ethnic identity by the local administration (Zilla and Upazilla government officials).',
                            'ব্রিটিশ বিরোধী আন্দোলন, ১৯৪৭ এর দেশ বিভাগ অথবা ১৯৭১সালের মুক্তিযুদ্ধে আমার জাতি গোষ্ঠীর সদস্যদের অবদান ও ত্যাগ সম্পর্কে আমি অবগত।(I know the contribution and sacrifice of the people of my ethnic group during the anti-British Movements, the Partition of 1947 or the Liberation War of 1971.)'
                        );

                        $drop_text = array(
                            '2' => 'সম্পূর্ণ ভাবে সহমত/ সম্মত(Strongly Agree)',
                            '1' => 'সহমত/ সম্মত(Agree)',
                            '0' => 'নিরপেক্ষ মতামত(Neutral)',
                            '-1' => 'ভিন্নমত/ অসম্মত(Disagree)',
                            '-2' => 'সম্পূর্ণ ভাবে ভিন্নমত(Strongly Disagree)'
                        );

//                        $drop_text = array(
//                            '01' => 'সম্পূর্ণ ভাবে সহমত/ সম্মত(Strongly Agree)',
//                            '02' => 'সহমত/ সম্মত(Agree)',
//                            '03' => 'নিরপেক্ষ মতামত(Neutral)',
//                            '04' => 'ভিন্নমত/ অসম্মত(Disagree)',
//                            '05' => 'সম্পূর্ণ ভাবে ভিন্নমত(Strongly Disagree)'
//                        );


                        $prevailing_type_part_moral = array(
                            'আমার জাতি সত্তা ও সাংস্কৃতির পরিচিতির জন্য আমি ভাল বোধ করি।(I feel happy about my cultural or ethnic identity.)',
                            'আমার জাতি সত্তার পরিচিতি নিয়ে আমি গর্ব অনুভব করি।(I feel proud of my ethnic identity.)',
                            'আমি যদি বাঙ্গালি হতাম, তাহলে বাঙ্গলিরা আমাদের সাথে বর্তমানে যে ধরনের আচরণ করছে তার চেয়ে ভিন্নধরনের আচরণ/ ব্যবহার করতাম ।(If I had born as a member of Bangali ethnic group, I would have done things differently than they are presently doing.)',
                            'জাতি সত্তার পরিচিতির আমার অস্তিত্ব/ আত্ম পরিচিতির জন্য গুরুত্বপূর্ণ।(My ethnic identity is an important reflection of who I am.)',
                            'যখন কেউ আমার জাতি গোষ্ঠীকে সমালোচনা করে, তখন আমি ব্যক্তি গত ভাবে অপমানিত বোধ করি । (When someone criticizes my ethnic group, it feels like a personal insult.)',
                            'আমার জাতি গোষ্ঠীর সাথে আমার গভীর একাত্মতা/ সম্পৃক্ততা রয়েছে ।(I have a strong belongingness to my own ethnic group.)',
                            'আমার জাতি গোষ্ঠীর শিশুদের অবশ্যই আমাদের মাতৃভাষা জানতে হবে।(The children of my ethnic group must learn our mother toungue.)',
                            'আমার জাতি গোষ্ঠীর সদস্যদের নিজ জাতি সত্তার মধ্যেই বিবাহ করা উচিৎ।(A member of my ethnic group should marry within the ethnic group.)',
                            'আমি প্রয়োজনে সর্বদা নিজ জাতি গোষ্ঠীর সদস্যদের নিকট সাহায্য বা পরামর্শ প্রত্যাশা করি।(I always seek support/ help from another member of my ethnic group when I am in need.)'
                        );

                        $prevailing_type_part_affective = array(
                            'অন্য জাতি গোষ্ঠীর সদস্যদের তুলনায় আমি নিজ জাতি গোষ্ঠীর সদস্যদের সাথে বেশি সময় কাটা্ই/ অতিবাহিত করি ।(I spend more time with people from ethnic groups other than my own.)',
                            'আমি মাতৃভাষায়তেই কথা বলতে আমি স্বাচ্ছন্দ্য বোধ করি।(I enjoy speaking my mother tongue.)',
                            'অন্য জাতি গোষ্ঠীর তুলনায় আমার মতামত নিজ জাতি গোষ্ঠীর সদস্যরা গুরুত্ব দিয়ে বিবেচনা করে।(My opinion is properly respected in my ethnic group rather than in other ethnic group.)',
                            'আমি যেসব সামাজিক সংগঠন বা দলের সক্রিয় সদস্য তাতে বেশিরভাগ সদস্যই যেগুলোর বেশিরভাগ সদস্যই আমার জাতিগোষ্ঠীর মানুষ নিয়ে গঠিত।(I am active in organizations/ social groups that include mostly members of my own ethnic group.)',
                            'আমার জাতি গোষ্ঠীর সদস্যদের মাঝে থাকতে আমি আমি নিশ্চিন্ত ও স্বাচ্ছন্দ্য বোধ করি ।(I feel secured and at ease being around people from my own ethnic group.) ',
                            'চার পাশের অন্যান্য বৃহত্তর জাতি গোষ্ঠীর মাঝে বসবাসের ফলে ক্ষুদ্র জাতি গোষ্ঠীর সদস্য হিসেবে আমি মাঝে মাঝে মানসিক-চাপ অনুভব করি ।(I often feel suppressed in presence of the majority ethnic groups in the neighborhood/ surroundings.)',
                            'অন্যান্য জন গোষ্ঠীর সাথে আদান প্রদান, যোগাযোগ ও মেলামেশার সময় মাঝে মাঝে তাদের প্রতি আমার নেতিবাচক/ ক্ষোভের অনুভূতি হয়েছে ।(I often experienced negative feelings towards the other group when we interact.)'
                        );
                        ?> 

                        <?php //echo $this->Form->create('CommSectionAConstruction'); ?>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sr.No.</th>
                                <th>Major Aspects</th>
                                <th>Statement</th>
                                <th width='300'>Response</th>
                                <th>Score</th>
                            </tr>

                            <?php
                            $sn = 0;
                            for ($i = 0; $i < count($prevailing_type_part_one); $i++):
                                $sn = $i + 1;
                                ?>

                                <?php
                                if (!empty($this->request->data[$i]['EthnicSectionB']['id'])) {
                                    echo $this->Form->input($i . '.EthnicSectionB.id', array('type' => 'hidden'));
                                }
                                ?>  



                                <tr>
                                    <?php if ($i == 0): ?>
                                        <td rowspan="4">211</td>
                                        <td rowspan="4">Cognitive(Self-images and own group's  images)</td>
                                    <?php endif; ?>
                                    <td>
                                        <?php echo $this->Form->input($i . '.EthnicSectionB.ethnic_interview_id', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $ethnic_interview_id)); ?>

                                        <?php echo $this->Form->input($i . '.EthnicSectionB.serial_no', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $sn)); ?><?php echo $sn . ' .  ' . $prevailing_type_part_one[$i]; ?></td>
                                    <td> <?php echo $this->Form->input($i . '.EthnicSectionB.response', array('type' => 'select', 'options' => $drop_text, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                                    <td><div id="score">

                                            <?php echo $this->Form->input($i . '.EthnicSectionB.score', array('type' => 'text', 'readonly' => true, 'class' => 'form-control', 'label' => false, 'value' => null)); ?>
                                        </div></td>
                                </tr>

                                <script>


                                    $('#' +<?php echo $i; ?> + 'EthnicSectionBResponse').change(function () {

                                        var dropdownValue = $('#' +<?php echo $i; ?> + 'EthnicSectionBResponse').val();

                                        $('#' +<?php echo $i; ?> + 'EthnicSectionBScore').attr("value", dropdownValue);


                                        Sum = 0;
                                        for (k = 0; k < 4; k++)
                                        {

                                            Sum = Sum + Number($('#' + k + 'EthnicSectionBScore').val());
                                        }
                                        $('#first_sum').text(Sum);

                                        var GrandTotal = (Number($('#third_sum').text()) + Number($('#second_sum').text()) + Number($('#first_sum').text()));


                                        $('#gtotal').text(GrandTotal);

                                    })



                                </script>



                            <?php endfor; ?>

                            <tr><td><td><td colspan="1" class="text-right">Score of Subsection∑(1 + 2 + 3 + 4) =</td>
                                <td id="first_sum">



                                </td>
                            </tr>  

                            <?php
                            $sn_2 = 7;
                            for ($p = 0; $p < count($prevailing_type_part_moral); $p++):
                                $sn_2 = $p + 4;
                                ?>

                                <?php
                                if (!empty($this->request->data[$sn_2]['EthnicSectionB']['id'])) {
                                    echo $this->Form->input($sn_2 . '.EthnicSectionB.id', array('type' => 'hidden'));
                                }
                                ?>     

                                <tr>
                                    <?php if ($p == 0): ?>
                                        <td rowspan="9">212</td>
                                        <td rowspan="9">Moral(Feelings of obligationsand expectations)</td>
                                    <?php endif; ?>
                                    <td>
                                        <?php echo $this->Form->input($sn_2 . '.EthnicSectionB.ethnic_interview_id', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $ethnic_interview_id)); ?>
                                        <?php echo $this->Form->input($sn_2 . '.EthnicSectionB.serial_no', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $sn_2)); ?><?php echo $sn_2 . ' .  ' . $prevailing_type_part_moral[$p]; ?></td>
                                    <td> <?php echo $this->Form->input($sn_2 . '.EthnicSectionB.response', array('type' => 'select', 'options' => $drop_text, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                                    <td><?php echo $this->Form->input($sn_2 . '.EthnicSectionB.score', array('type' => 'text', 'readonly' => true, 'class' => 'form-control', 'label' => false, 'value' => null)); ?></td>
                                </tr>

                                <script>

                                    $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBResponse').change(function () {

                                        var dropdownValue = $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBResponse').val();

                                        $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBScore').attr("value", dropdownValue);


                                        Second_Sum = 0;
                                        for (k = 4; k < 13; k++)
                                        {

                                            Second_Sum = Second_Sum + Number($('#' + k + 'EthnicSectionBScore').val());
                                        }
                                        $('#second_sum').text(Second_Sum);

                                        var GrandTotal = (Number($('#third_sum').text()) + Number($('#second_sum').text()) + Number($('#first_sum').text()));


                                        $('#gtotal').text(GrandTotal);


                                    })



                                </script>

                            <?php endfor; ?>						

                            <tr><td><td><td colspan="1" class="text-right">Score of Subsection ∑(5 + 6 + 7 + 8 + … + 13) =</td>
                                <td id="second_sum"></td></tr>
                            <?php
                            $sn_2 = 7;
                            for ($q = 0; $q < count($prevailing_type_part_affective); $q++):
                                $sn_2 = $q + 13;
                                ?>

                                <?php
                                if (!empty($this->request->data[$sn_2]['EthnicSectionB']['id'])) {
                                    echo $this->Form->input($sn_2 . '.EthnicSectionB.id', array('type' => 'hidden'));
                                }
                                ?>   
                                <tr>
                                    <?php if ($q == 0): ?>
                                        <td rowspan="7">213</td>
                                        <td rowspan="7">Moral(Feelings of obligationsand expectations)</td>
                                    <?php endif; ?>
                                    <td>
                                        <?php echo $this->Form->input($sn_2 . '.EthnicSectionB.ethnic_interview_id', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $ethnic_interview_id)); ?>
                                        <?php echo $this->Form->input($sn_2 . '.EthnicSectionB.serial_no', array('type' => 'hidden', 'class' => 'form-control', 'label' => false, 'value' => $sn_2)); ?><?php echo $sn_2 . ' .  ' . $prevailing_type_part_affective[$q]; ?></td>
                                    <td><?php echo $this->Form->input($sn_2 . '.EthnicSectionB.response', array('type' => 'select', 'options' => $drop_text, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?></td>
                                    <td><?php echo $this->Form->input($sn_2 . '.EthnicSectionB.score', array('type' => 'text', 'readonly' => true, 'class' => 'form-control', 'label' => false, 'value' => null)); ?></td>
                                </tr>

                                <script>

                                    $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBResponse').change(function () {

                                        var dropdownValue = $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBResponse').val();

                                        $('#' +<?php echo $sn_2; ?> + 'EthnicSectionBScore').attr("value", dropdownValue);

                                        Third_Sum = 0;
                                        for (k = 13; k < 20; k++)
                                        {

                                            Third_Sum = Third_Sum + Number($('#' + k + 'EthnicSectionBScore').val());
                                        }
                                        $('#third_sum').text(Third_Sum);

                                        var GrandTotal = (Number($('#third_sum').text()) + Number($('#second_sum').text()) + Number($('#first_sum').text()));


                                        $('#gtotal').text(GrandTotal);

                                    })



                                </script>

                            <?php endfor; ?>						
                            <tr><td><td><td colspan="1" class="text-right">Score of Subsection∑(14 + 15 + 16 + 17 + … + 20) =</td>
                                <td id="third_sum"></td></tr>
                            <tr><td>214</td><td colspan="2" class="text-right"><b>TOTAL SCORE OF SECTION B- 02 =</b></td>
                                <td id="gtotal">

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <center> <button class="btn btn-info">Submit</button></center>
                            <?php echo $this->Form->end(); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    