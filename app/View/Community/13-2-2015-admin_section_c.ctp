<?php

echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function () {

        for (i = 0; i <40; i++) {
            $('#' + i + 'mytest').hide();

        }
//  $('#100mytest').hide();
//    $('#7multiple_check').on('change', function() {
//   
//     alert($(this).val());
//});




    })
</script>

<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Community'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <h4>SECTION – C: KINSHIP AND SOCIAL ORGANIZATION</h4>
                        <h5>C-1: MARRIAGE</h5>

                                            <?php
                                            
                                               $row_list = array(
                                                   'What kind of regulation is used for executing marriage agreements?',
                                                   'Who presides over marriage ceremony or performs marriage rituals? ',
                                                   'What is the composition of domestic organization?',
                                                   'What is the type of post marital residence with kins within first year of marriage?','What is the type of post marital residence with kins after first year of marriage?',
                                                   'What is the way of organizing marriage in the community?','What is the major type of descent?','What is the Largest Patrilineal Kin Group?',
                                                   'What is the Largest Patrilineal Exogamous Group (If Different from previous question)','What is the Largest Matrilineal Kin Group?',
                                                   'What is the Largest Matrilineal Exogamous Group (If Different from previous question)','What is the Largest Kin Group (if not the Patrilineal and Matrilineal ones)',
                                                   'What is the form of cousin marriages (If practiced or allowed) ','What is the subtype of cousin marriages (If practiced or allowed)',
                                                   'Whether cousin marriages are preferred rather than just permitted? ','What are the subtypes of cousin marriages (Preferred rather than just Permitted) '
                                                   
                                               );
                                            
                                              $multiple_check_box = array(
                                                  'Regulates & legitimizes sexual access','Provides means of giving birth to and rearing of children','Division of labor between males and females',
                                                  'Marriage sets up economic exchange between kin groups','Marriage regulates & legitimizes inheritance patterns for children','Marriage establish political alliance/ relationships between groups',
                                                  'Everything mentioned above','Others- (Please specify below)'
                                                  
                                              );
                                              
                                              
                                              $multiple_check_box_a = array(
                                              
                                                               'Bride Price or wealth, to bride’s family','Bride Service, to bride’s family','Token bride price',
                                                               'Gift Exchange, reciprocal','Sister or female relative exchanged for bride','Absence of consideration of exchange',
                                                               'Dowry, to bride from her family','8'=>'Others- (Please specify below)'
                                              ); 
                                               
                                               
//                                              $drop_text[0] = array(
//                                                  'Regulates & legitimizes sexual access','Provides means of giving birth to and rearing of children','Division of labor between males and females',
//                                                  'Marriage sets up economic exchange between kin groups','Marriage regulates & legitimizes inheritance patterns for children','Marriage establish political alliance/ relationships between groups',
//                                                  'Everything mentioned above','99'=>'Others- (Please specify below)'
//                                                  
//                                              );
                                              
                                               $drop_text[0] = array(
                                                 'Written form of agreement in standard national court','Written agreement in traditional/ customary ways','Verbal agreement/ commitment with public announcement',
                                                 'Both Written and Verbal agreement with public announcement','99'=>'Others- (Please specify below)'  
                                                  
                                              );
                                            
                                              $drop_text[1] = array(
                                                 'Religious leader or priest within group/ community','Religious leader or priest outside group/ community','Religious leader or priest from specific caste like Brahmins',
                                                  'Father from Church','Village leader but not religious specialist','99'=>'Others- (Please specify below)'
                                                  
                                              );   
                                              

                                              
                                              $drop_text[2] = array(
                                                  'Independent nuclear family, monogamous','Independent nuclear family, occasional polygyny','Preferentially sororal, co-wives in same dwelling',
                                                  'Non-sororal, co-wives in separate dwelling','Non-sororal, co-wives in same dwelling','Minimal (stem) extended families (two related families of procreation without polygamous unions)',
                                                  'Small extended families','Large extended families','99'=>'Others- (Please specify below)' 
                                              );
                                              
                                              $drop_text[3] = array(
                                                  
                                                  'Ambilocal','Nonestablishment of common household (separate stay)','Uxorilocal: with wife’s parents',
                                                  'Virilocal: with husband’s parents','Not different from later years','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[4] = array(
                                                  'Avunculocal','Ambilocal','Optionally uxorilocal or avunculocal: with wife’s relatives','Optionally patrilocal (or virilocal) or avunculocal',
                                                  'Matrilocal','Neolocal','Nonestablishment of common household (separate stay)','Patrilocal','Uxorilocal','Virilocal','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[5] = array(
                                                  'Demes , not segregated into clan barrios','Segmented communities without local exogamy','Agamous communities (no rules about endogamy/exogamy)',
                                                  'Exogamous communities, not clans','Segmented communities, localized clans, local exogamy','Clan communities or segmented into clan barrios','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[6] = array(
                                                  'Patrilineal','Duolateral','Matrilineal','Quasi-lineages','Ambilineal','Bilateral','Mixed','Type unknown',
                                                  '99'=>'Others- (Please specify below)'
                                              );
                                              
                                              $drop_text[7] = array('None','Patrilineal exogamy, but not kin groups','Lineages in a single community','Sibs, i.e., lineages in multiple communities'
                                                  ,'Moieties','99'=>'Others- (Please specify below)');
                                              
                                              $drop_text[8] = array(
                                                  'None','Patrilineal exogamy, but not kin groups','Lineages in a single community','Sibs, i.e., lineages in multiple communities',
                                                  'Phratries, i.e., three or more maximally extended sibs','Moieties','Not different from previous question',
                                                  
                                              );
                                              
                                              $drop_text[9] = array(
                                                  'None','Matrilineal exogamy, but not kin groups','Lineages in a single community','Sibs, i.e., lineages in multiple communities',
                                                  'Phratries, i.e., three or more maximally extended sibs','Moieties','99'=>'Others- (Please specify below)'
                                              );
                                              
                                              $drop_text[10] = array(
                                                  'None','Matrilineal exogamy, but not kin groups','Lineages in a single community','Sibs, i.e., lineages in multiple communities',
                                                  'Phratries, i.e., three or more maximally extended sibs','Moieties','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[11] = array(
                                                  'Bilateral descent','Kindreds: ego-oriented bilateral kin groups','Ambilineal descent: lacking true ramages','Ramages: ancestor oriented ambilineal groups',
                                                  'Exogamous ramages','Quasi-lineages: filiation based, not descent','Unilineal descent groups','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[12] = array(
                                                  
                                                  'Duolateral: either MoBrDa or FaSiDa (C.)','Duolateral: either FaBrDa or FaSiDa (D.)','Duolateral: either MoBrDa or MoSiDa (E.)','Duolateral: either FaBrDa or MoBrDa (F.)',
                                                  'Duolateral: either FaSiDa or MoSiDa (G.)','Matrilateral cross-cousin: MoBrDa only (M.)','Nonlateral all first and second cousins barred (N.)',
                                                  'Nonlateral evidence only for first cousins (O.)','Patrilateral cross-cousin: FaSiDa only (P.)','Quadrilateral: any first cousin allowed (Q.)',
                                                  'Nonlateral: no first cousins, some second cousins (R.)','Nonlateral: no first cousins, all second cousins (S.)','Trilateral: any first cousin not ortho / lineage mate (T.)',
                                                  '99'=>'Others- (Please specify below)'
                                              );
                                              
                                              $drop_text[13] = array(
                                                  'All four cousins (Q.)','Three of four cousins (T.)','Two of four cousins (D., E.)','One of four cousins (C., M., P.)',
                                                  'No first cousins, all second cousins (S.)','First and some second cousins excluded (R.)','No first, unknown for second (O.)',
                                                  'No first or second cousins (N.)','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[14] = array(
                                                  'Duolateral, symmetrical preference (Cc)','Duolateral, matrilateral preference (Cm)','Duolateral, patrilateral preference (Cp)','Duolateral, with maternal cousins only, MoBrDa (Em)',
                                                  'Matrilateral cross-cousin with MoBrDa only (Mm)','Patrilateral cross-cousin with FaSiDa only (Pp)','Quadrilateral, FaSiDa preferred (Qa)',
                                                  'Quadrilateral, symmetrical preference (Qc)','Quadrilateral, matrilateral preference (Qm)','Nonlateral, only some second cousins permitted (Rr)',
                                                  'Nonlateral, all second cousins permitted (Ss)','Trilateral with bilateral preference (Tc)','Trilateral with matrilateral preference (Tm)','Trilateral with patrilateral preference (Tp)',
                                                  'No preferred cousin marriages','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                              $drop_text[15] = array(
                                                  'Symmetrical preference (Cc, Qc, Tc)','MoBrDa preferred (Cm, Em, Qm, Tm)','FaSiDa preferred (Cp, Pp, Qp, Tp)',
                                                  'FaBrDa preferred (Qa)','A second-cousin preferred (Rr, Ss)','No preferred cousin marriage','99'=>'Others- (Please specify below)'
                                                  
                                              );
                                              
                                            ?>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                
                                <tr>
                                    <td>301M</td>
                                    <td>What do people of the community understand by the function of marriage</td>
                                    <td>
                                        <?php 
                                        foreach($multiple_check_box as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                  'name'=>$key.'multiple_check',
                                                   'value'=>$value, 
                                                  'after' => '<label>'.$value.'</lablel>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                        
                                         <?php echo $this -> Form -> input('100SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>'100mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>
                                    
                                </tr>
                                

                                <?php for($i=0;$i<2;$i++): ?>
                                <tr>
                                    <td><?php echo $i+301+1; ?></td>
                                    <td><?php echo $row_list[$i]; ?></td>
                                    <td><?php  echo $this ->Form ->input($i.'.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text[$i], 'class' => 'form-control', 'label' => false)); ?>

                                        <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>
<!--                                    <p id="<?php echo $i.'mytest'?>">test</p>-->
                                </tr> 
                            <script>
                                  $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                  
                                ?>
                            
                             <tr>
                                    <td>304M</td>
                                    <td>What are the modes of exchanges (of goods and services) in marriage?</td>
                                    <td>
                                        <?php 
                                        foreach($multiple_check_box_a as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                    'name'=>$key.'multiple_check',
                                                  'after' => '<label>'.$value.'</lablel>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                    </td>
                                    
                                </tr>
                                
                                
                                  <?php for($i=2;$i<count($row_list);$i++): ?>
                                <tr>
                                    <td><?php echo $i+303; ?></td>
                                    <td><?php echo $row_list[$i]; ?></td>
                                    <td><?php  echo $this ->Form ->input($i.'.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text[$i], 'class' => 'form-control', 'label' => false)); ?>

                                        <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>
<!--                                    <p id="<?php echo $i.'mytest'?>">test</p>-->
                                </tr> 
                            <script>
                                  $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                  
                                ?>

                            </tbody>
                        </table>

                        <h4>C-2: NORMS RELATED TO EXCEPTION AND FLEXIBILITY OF MARRIAGE RULES </h4>
                         <?php
                            $row_list_C2 = array(
                               '20'=>'Can men in your community marry more than once in presence of first wife?','What are the conditions for allowing men to marry more than once in presence of first wife?',
                                'Is it necessary to obtain the permission from the first wife for second marriage?','Can women in your community remarry if divorced/ separated/ widowed?',
                                'What are the Norms of Premarital Sexual Behavior of Boys?','What are the Norms of Premarital Sexual Behavior of Girls?',
                                'What are the Norms of Postmarital Sexual Behavior of men? ','What are the Norms of Postmarital Sexual Behavior of women? ',
                                'What are the consequences of Marriage outside the indigenous/ ethnic group for males? ','What are the consequences of Marriage outside the indigenous/ ethnic group for females?'
                                
                            );
                            
                            $drop_text_c2[20] = array(
                                'Yes, Always','Yes, Sometimes in under certain conditions ','No or Never','99'=>'Others- (Please specify below)'
                                
                            );
                            
                             $multiple_checkbox_c = array(
                                 'Sickness of present wife','Infertility of wife','To get son','To establish alliance with another group/ clan','99'=>'Others- (Please specify below)'
                             );
                             
                             $drop_text_c2[22] = array(
                                 'Yes, Compulsory (Cannot marry without permission)','Optional or not Compulsory','Not at all, no need to ask for permission','99'=>'Others- (Please specify below)'
                                 
                             );
                            
                             $drop_text_c2[23] = array(
                                 'Yes, Always','Yes, Sometimes','No or Never','99'=>'Others- (Please specify below)'
                                 
                             );
                             
                             $drop_text_c2[24] = array(
                                 'Early marriage of females (at or before puberty) ','Insistence on virginity ','Prohibited but not infrequent','Allowed, censured only if results in pregnancy',
                                 'Trial marriage, promiscuous relations prohibited','Freely permitted, even if results in pregnancy','Patrilineal (sons)','99'=>'Others- (Please specify below)'
                             );
                             
                             $drop_text_c2[25] = array(
                                 
                                 'Early marriage of females (at or before puberty)','Insistence on virginity','Prohibited but not infrequent',
                                 'Allowed, censured only if results in pregnancy','Trial marriage, promiscuous relations prohibited','Freely permitted, even if results in pregnancy',
                                 'Prohibited & have to undergo trial in village or community court','99'=>'Others- (Please specify below)'
                             );
                             
                             $drop_text_c2[26] = array(
                                 'Insistence on purity of monogamous sexuality','Prohibited but not very infrequent','Prohibited but ignored or not addressed',
                                 'Prohibited & results in marriage dissolution','Prohibited & have to undergo trial in village or community court','Prohibited & expelled from community if found guilty',
                                 'Permitted under certain conditions','99'=>'Others- (Please specify below)'
                             );
                             
                             $drop_text_c2[27] = array(
                                 'Insistence on purity of monogamous sexuality','Prohibited but ignored or not addressed','Prohibited & results in marriage dissolution',
                                 'Prohibited & have to undergo trial in village or community court','Prohibited & expelled from community if found guilty','Permitted under certain conditions',
                                 'Permitted under certain conditions','99'=>'Others- (Please specify below)'
                             );
                             
                             $multiple_check_box_d = array(
                                 'Considered defilement of womb','Offspring are not accepted as to be own ethnic group member','Prohibited but ignored or not addressed',
                                 'Prohibited but accepted if done','Prohibited & have to undergo trial in village or community court','Prohibited & have to perform certain rituals and sacrifices',
                                 'Prohibited & expelled from community/ ethnic group','Permitted under certain conditions','99'=>'Others- (Please specify below)'
                             );
                             
                             $multiple_check_box_e = array(
                                 'Considered defilement of womb','Offspring are not accepted as to be own ethnic group member','Prohibited but ignored or not addressed',
                                 'Prohibited but accepted if done','Prohibited & have to undergo trial in village or community court','Prohibited & have to perform certain rituals and sacrifices',
                                 'Prohibited & expelled from community/ ethnic group','Permitted under certain conditions','99'=>'Others- (Please specify below)'
                                 
                             );
                         ?>  

                        <table class="table table-bordered table-striped">
                            <tbody>

                                 <?php for($i=20;$i<21;$i++): ?>
                                <tr>
                                    <td><?php echo $i+299; ?></td>
                                    <td><?php echo $row_list_C2[$i]; ?></td>
                                    <td>
                                        <?php  echo $this ->Form ->input($i.'.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text_c2[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    
                                    </td>
                                </tr> 
                                
                                <script>
                                  $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                
                                ?>
                            
                               <tr>
                                    <td>320M</td>
                                    <td>What are the conditions for allowing men to marry more than once in presence of first wife?</td>
                                    <td>
                                        <?php 
                                        foreach($multiple_checkbox_c as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                    'name'=>$key.'multiple_check',
                                                  'after' => '<label>'.$value.'</lablel>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                    </td>
                                    
                                </tr>
                               
                            
                            
                                
                                <?php 
                               
                             
                                for($i=22;$i<18+count($row_list_C2);$i++): ?>
                                <tr>
                                    <td><?php echo $i+299; ?></td>
                                    <td><?php echo $row_list_C2[$i]; ?></td>
                                    <td>
                                        <?php  echo $this ->Form ->input($i.'.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text_c2[$i], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php echo $this -> Form -> input($i.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$i.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    
                                    </td>
                                </tr> 
                                
                                 <script>
                                  $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $i; ?>+'SectionQuestionAnswerCulturalAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $i; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $i; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                
                                
                                <?php
                                  
                                   endfor;
                                  
                                ?>
                            
                            <tr>
                                    <td>327M</td>
                                    <td>What are the consequences of Marriage outside the indigenous/ ethnic group for males?</td>
                                    <td>
                                        <?php 
                                        foreach($multiple_check_box_d as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                    'name'=>$key.'multiple_check',
                                                  'after' => '<label>'.$value.'</lablel>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                    </td>
                                    
                                </tr>
                                
                                
                                <tr>
                                    <td>328M</td>
                                    <td>What are the conditions for allowing men to marry more than once in presence of first wife?</td>
                                    <td>
                                        <?php 
                                        foreach($multiple_check_box_e as $key=>$value):
                                        echo $this->form->input('checkbox', 
                                                array(
                                                  'label'=>false, 
                                                  'type'=>'checkbox',
                                                  'id'=>$key.'multiple_check',  
                                                    'name'=>$key.'multiple_check',
                                                  'after' => '<label>'.$value.'</lablel>', 
                                                  'div' => true
                                             )); 
                                        endforeach;
                                        ?>
                                    </td>
                                    
                                </tr>
                            
                            
                            
                            

                            </tbody>
                        </table>

                        <h4>C- 3: RULES OF INHERITANCE</h4>

                        <?php
                        
                          $row_list_C3 = array(
                              
                              '30'=>'What is the Inheritance Rule for Real Property (Land)?','What is the Inheritance Distribution for Real Property (Land)?',
                              'What is the Inheritance Rule for Movable Property?','What is the Inheritance Distribution for Movable Property?'
                          );
                          
                          $drop_text_c3[30] = array(
                              
                              'Absence of individual property rights or rules (O.)','Matrilineal (sister’s sons) (M.)','Other matrilineal heirs (e.g., younger brothers) (N.)',
                              'Children, with daughters receiving less (D.)','Children, equally for both sexes (C.)','Other patrilineal heirs (e.g., younger brothers) (Q.)',
                              'Patrilineal (sons) (P.)','99'=>'Others- (Please specify below)'
                          );
                          
                           $drop_text_c3[31] = array(
                               'Equal or relatively equal (.e)','Exclusively or predominantly to the one adjudged best qualified (.q)','Ultimogeniture (to the junior individual) (.u)',
                               'Primogeniture (to the senior individual) (.p)','Absence of inheritance of real property (O.)',
                               '99'=>'Others- (Please specify below)'
                           );
                           
                           $drop_text_c3[32] = array(
                               'Absence of individual property rights or rules (O.)','Matrilineal (sister’s sons) (M.)','Other matrilineal heirs (e.g., younger brothers) (N.)',
                               'Children, with daughters receiving less (D.)','Children, equally for both sexes (C.)','Other patrilineal heirs (e.g., younger brothers) (Q.)',
                               'Patrilineal (sons) (P.)','99'=>'Others- (Please specify below)'
                               
                           );
                           
                            $drop_text_c3[33] = array(
                                'Equal or relatively equal (.e)','Exclusively or predominantly to the one adjudged best qualified (.q)','Ultimogeniture (to the junior individual (.u)',
                                'Primogeniture (to the senior individual) (.p)','Absence of inheritance of real property (O.)','99'=>'Others- (Please specify below)'
                            );
                        ?>

                        <table class="table table-bordered table-striped">
                            <tbody>

                                <?php for($j=30;$j<30+count($row_list_C3);$j++): ?>
                                <tr>
                                    <td><?php echo $j+329; ?>M</td>
                                    <td><?php echo $row_list_C3[$j]; ?></td>
                                    <td><?php  echo $this ->Form ->input($j.'.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text_c3[$j], 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>
                                        <?php 
                                       
                                        echo $this -> Form -> input($j.'.SectionQuestionAnswerCultural.answer', array('type' => 'text','id'=>$j.'mytest','class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </td>

                                    
                                    </td>
                                </tr> 
                                
                                 <script>
                                  $('#'+<?php echo $j; ?>+'SectionQuestionAnswerCulturalAnswer').change(function () {
            
                                            var selectboxValue = $('#'+<?php echo $j; ?>+'SectionQuestionAnswerCulturalAnswer').val();
                                            if (selectboxValue == 99) {
                                                $('#'+<?php echo $j; ?>+'mytest').show();
                                            }
                                            
                                            else{
                                                
                                                 $('#'+<?php echo $j; ?>+'mytest').hide();
                                            }
        })
                            </script>
                                <?php
                                  
                                   endfor;
                                  
                                ?>

                            </tbody>
                        </table>


                        <h4>C- 4: KINSHIP TERMINOLOGY</h4>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td width="6%" valign="top"><p><strong>333</strong><strong> </strong></p></td>
                                <td width="93%" colspan="3" valign="top"><p>Describe the kinship    terms (terms of reference) in native language?</p></td>
                            </tr>
                            <tr>
                                <td width="6%" rowspan="45" valign="top"><p>&nbsp;</p></td>
                                <td width="23%" rowspan="4" valign="top"><p>Third Generation </p></td>
                                <td width="34%"><p>Ego's    Father's Father </p></td>
                                <td width="34%"><form id="form1" name="form1" method="post" action="">

      <?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?>
                                    </form>      <p align="center">&nbsp;</p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Mother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Father </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Mother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="23%" rowspan="18" valign="top"><p>Second Generation </p></td>
                                <td width="34%"><p>Ego's    Father </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Elder Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Elder Brother's Wife </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Younger Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Younger Brother's Wife </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Elder Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Elder Sister's Husband </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Younger Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Younger Sister's Husband </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Elder Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Elder Brother's Wife </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Younger Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Younger Brother's Wife </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Elder Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Elder Sister's Husband </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Younger Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Younger Sister's Husband </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="23%" rowspan="13" valign="top"><p>Own Generation </p></td>
                                <td width="34%"><p>EGO </p></td>
                                <td width="34%"><p align="center">-X- </p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Elder Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Younger Brother </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Elder Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Younger Sister </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Sister's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Sister's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Brother's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Father's Brother's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Sister's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Sister's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Brother's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Mother's Brother's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="23%" rowspan="10" valign="top"><p>Third Generation </p></td>
                                <td width="34%" valign="top"><p>Ego's    Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Sister's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Sister's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Brother's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Brother's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Cousin Sister's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%" valign="top"><p>Ego's    Cousin Sister's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Cousin Brother's Son </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="34%"><p>Ego's    Cousin Brother's Daughter </p></td>
                                <td width="34%"><p align="center"><?php echo $this -> Form -> input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px'));?></p></td>
                            </tr>
                            <tr>
                                <td width="6%" rowspan="10"><p><strong>334</strong><strong> </strong></p></td>
                                <td width="23%" rowspan="10" colspan="2"><p>What is the type of    kinship terms for cousins? </p></td>

    <?php $drop_text4 = array(
        
           'Crow (C)','Descriptive (D)','Eskimo (E)','Hawaiian (H)','Iroquois (I)','Omaha (O)','Sudanese (S)','Mixed (Z)','99'=>'Others- (Please specify below)'
        
        
    ); ?>
                                <td width="63%">
        <?php  echo $this ->Form ->input('1.SectionQuestionAnswerCultural.answer', array('options' =>$drop_text4, 'class' => 'form-control', 'empty' => '(choose one)', 'label' => false)); ?>

                                </td>
                            </tr>

                        </table>

                    </div>  
                </div>
            </div>

        </div>
    </div>
</div>