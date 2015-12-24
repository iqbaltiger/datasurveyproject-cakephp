<?php echo $this->Html->script('jquery.min'); ?>
<script>
    //j = jQuery.noConflict();  
    $(function() {

        $('#description_produced_crops_1').hide();
        $('#SectionGADescriptionProducedCrops').on('change', function() {
            var selectboxValue = $('#SectionGADescriptionProducedCrops').val();
            if (selectboxValue == 99) {
                $('#description_produced_crops_1').show();

            }
            else {

                $('#description_produced_crops_1').hide();

            }
        });
    })
</script>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Cultural'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <?php echo $this->Form->create('SectionGA', array('class' => '')) ?>
                        <h4>SECTION- G: INCOME SOURCES (FOR LAST 01 YEAR)</h4>
                        <h5>G- 1: Survey of the agricultural income of the household</h5>
                        <h5>
                            Type of Land Use and Production (What kind of crops do you cultivate in which type of land?)  
                        </h5>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th colspan="3">  Do members of this household cultivate any land? </th>
                                    <th><strong>Yes</strong></th>
                                    <th colspan="2">No</th>
                                </tr>
                                <tr>
                                    <th rowspan="2"><p align="center">Type  of Land </p></th>
                                <th rowspan="2"><strong>Amount  of Owned Land (In Decimal) </strong></th>
                                <th rowspan="2"><strong>Amount  of Land under Cultivation (In Decimal)</strong></th>
                                <th colspan="3"><strong>Main  crop cultivated in last 12 months<em> (Hint: Description of produced crops) </em></strong></th>
                                </tr>
                                <tr>
                                    <th>Main  Crop </th>
                                    <th>Second  main crop</th>
                                    <th>Other Crops</th>
                                </tr>
                                <tr>
                                    <td><b>Type of Land Use</b></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <!----Type of row Start---->

                                <?php $section_ga_list_upperPart = array('1. Agricultural land', '2. Domestic land (Homestead and yard)', '3. Horticultural land near the household', '4. Herding pasture', '5. Agricultural forest', '6. Fallow land', '7. Other Khas land (C.P.R- Common property)'); ?>

                                <?php for ($i = 0; $i < count($section_ga_list_upperPart); $i++): ?>
                                    <?php
                                    if (!empty($this->data['Section_GA_Upper_Marker'][$i]['SectionGA']['id'])) {
                                        echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.id', array('type' => 'hidden'));
                                    }
                                    ?>
                                    <tr>
                                        <?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.type_of_land', array('type' => 'hidden', 'value' => $section_ga_list_upperPart[$i])); ?><?php echo $section_ga_list_upperPart[$i]; ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_owned_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_land_cultivation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.main_crop', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.second_main_crop', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.other_crops', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                    </tr>

                                <?php endfor; ?>



                                <!-----Total----->

                                <tr>
                                    <td><b>Total owned land(1+2+3+4+5+6+7)</b></td>  
                                    <td colspan="5"></td>
                                </tr>


                                <?php
                                $type_of_land_2 = array(
                                    '7' => 'Land given for sharecropping (Including 1-6)', 'Land taken for sharecropping (Excluding 1-6)', 'Land mortgaged (Including 1-6)', 'Land taken on mortgage (Including 1-6)',
                                    'Land leased (Including 1-6)', 'Land taken on lease (Excluding 1-6)'
                                );



                                for ($i = 7; $i < count($section_ga_list_upperPart) + count($type_of_land_2); $i++):
                                    ?>
                                    <tr>
                                    <?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.type_of_land', array('type' => 'hidden', 'value' => $type_of_land_2[$i])); ?><?php echo $type_of_land_2[$i]; ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_owned_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.amount_land_cultivation', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.main_crop', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.second_main_crop', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        <td><?php echo $this->Form->input('Section_GA_Upper_Marker.' . $i . '.SectionGA.other_crops', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                    </tr>

<?php endfor; ?>

                                <tr>
                                    <td><b>Structure of Farm

                                            [Total land under cultivation</b> = [Total land under cultivation = {(1+3+4+ 

                                        5+6+7+10+12+14) - (9+11+13)}](To be decided 

                                        based on discussion)</td>  
                                    <td colspan="5"></td>
                                </tr>
<?php
$options = array(
    '01' => 'Aush', '02' => 'Aman', '03' => 'Boro', '04' => 'Wheat', '05' => 'Jute',
    '06' => 'Mustard', '07' => 'Vegetables', '99' => 'Others (Please specify) _______________'
);
?>

                                <tr>
                                    <td><b>Description of Produced Crops</b></td>  
                                    <td colspan="5">
<?php echo $this->Form->input('description_produced_crops', array('type' => 'select', 'class' => 'form-control', 'options' => $options, 'empty' => 'Please Select One')); ?>  
                                        <?php echo $this->Form->input('14.SectionQuestionAnswerCultural.answer9', array('type' => 'text', 'placeholder' => 'Plesse write here:', 'id' => 'description_produced_crops_1', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>  

                                    </td>
                                </tr>


                            </table>
                        </div>    

                        <h5>702.What was the total amount of crop production in the last 12 months and the estimated sale price of the crops?</h5>

                        <div class="table-responsive">

<?php
$crop_production_headTitle = array(
    'Produced crops (Code Table)', 'Amount of Land(In Decimal)', 'Amount of Total Production(5+6)', 'Production Unit', 'Own Use (Including Gifts)',
    'Total sale(Including Exchange)', 'Sale Price of Production Unit', 'TotalSale Price (3 X 7)'
);


$crop_production_RowTitle = array(
    '0' => 'Aus', 'Aman', 'Boro', 'Wheat', 'Mustard', 'Others__', 'Others__'
);
?> <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                            <?php for ($i = 0; $i < count($crop_production_headTitle); $i++): ?>

                                            <th>
                                <?php echo $crop_production_headTitle[$i]; ?>  
                                            </th>


<?php endfor; ?>  
                                    </tr>

                                </thead>

                                <tbody>

<?php
for ($i = 0; $i < count($crop_production_RowTitle); $i++):
    ?>



                                        <!--Row Start--->
    <?php
    if (!empty($this->data['Total_Production_Marker'][$i]['TotalProductionG']['id'])) {
        echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.id', array('type' => 'hidden'));
    }
    ?>    
                                        <tr>
    <?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.interview_id', array('type' => 'hidden', 'value' => $interview_id)); ?>
                                            <td><?php echo ($i + 1) . '. ' . $crop_production_RowTitle[$i]; ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.produced_crops_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.amount_of_land', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.amount_total_production', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.production_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.own_use', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.total_sale', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.sale_price', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('Total_Production_Marker.' . $i . '.TotalProductionG.total_sale_price', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr>

                                        <?php endfor; ?>

                                </tbody>
                            </table>   

                        </div>

                        <h5><b>703.What was your total production cost in the last 12 months? (Include all the crops listed in the previous table)</b></h5>

                        <div class="table-responsive">

                                    <?php
                                    $table_row_head = array('Areas of production expenditure', 'Amount', 'Unit', 'Sale price per unit', 'Total purchase value (2X4)', 'Sources of Agricultural Inputs');

                                    $table_col_title = array(
                                        'Seed',
                                        'Fertilizer',
                                        'Irrigation',
                                        'Organic fertilizer',
                                        'Insecticide',
                                        'Rented machinery (Tractor)',
                                        'Employing agricultural labour',
                                        'Transportation and marketing',
                                        'Other expenses (Please mention)',
                                        'Other expenses (Please mention) '
                                    );

                                    $sources_of_agricultural_inputs = array(
                                        '01' => '',
                                        '02' => ''
                                    );
                                    ?>





                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                            <?php for ($i = 0; $i < count($table_row_head); $i++): ?>

                                            <th>

                                <?php echo $table_row_head[$i]; ?>  
                                            </th>


<?php endfor; ?>
                                    </tr>


<?php for ($j = 0; $j < count($table_col_title); $j++): ?>

                                        <tr>
                                            <td>
    <?php echo $table_col_title[$j]; ?>  

                                            </td> 
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.areas_production_expenditure', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.amount', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.sale_price_per_unit', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.total_purchase_value', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('703_G_Marker.' . $j . '.TotalProductionCost703G.source_agricultural_input', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr>

                                    <?php endfor; ?>
                                </thead>
                            </table> 
                        </div> 

                        <h5><b>G- 2:Survey of Income earned in exchange of labour</b></h5>

                        <h5><b>Survey of the daily wages/ earnings of household members in the last 12 months(In case of difference, include the same member more than once)</b></h5>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="6">How many members of this household earned wages in exchange of labour? </th>
                                        <th colspan="3">No. of person (Write ‘0’ if none and pass onto the next chapter) </th>


                                    </tr>

                                </thead>

                                <tbody>

<?php for ($j = 1; $j < 9; $j++): ?>
                                        <tr>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 

                                        </tr>
<?php endfor; ?>

                                </tbody>



                            </table>                                    



                        </div>

                        <h5><b>G- 3:Survey of animal husbandry of the household in the last 3 months </b></h5>
                        <h5><b>Present number and description of adult animals domesticated by this household</b></h5>

                        <div class="table-responsive">

<?php
$domesticated_animals = array(
    'Description of Animals', 'Primary number', 'Sold and exchanged', 'Gift and own use', 'Lost and deceased', 'Purchased and gained through gift', 'Reproduction', 'Total number=
(2-3-4-5+6+7)', 'Value of standard unit', 'Total present value (8X9)'
);


$description_of_animals = array(
    'Cow', 'Buffalo', 'Goat', 'Sheep', 'Pig', 'Duck', 'Chicken', 'Pigeon', 'Others'
);
?> 

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="8">Do members of this household have domesticated animals? </th>
                                        <th><strong>Yes</strong></th>
                                        <th>No</th>
                                    </tr>

                                    <tr>
                            <?php for ($k = 0; $k < count($domesticated_animals); $k++): ?>
                                            <th>
                                <?php echo $domesticated_animals[$k]; ?> 

                                            </th>  

                            <?php endfor; ?>
                                    </tr>

                                </thead>
                                <tbody>

<?php for ($l = 0; $l < count($description_of_animals); $l++): ?>


                                        <tr>
                                            <td>

    <?php echo $description_of_animals[$l]; ?> 

                                            </td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>

                                        </tr>
                                    <?php endfor; ?>

                                </tbody>



                            </table>
                        </div>    

                        <h5><b>706.Description of goods or products produced from livestock of this household? (In last three months)</b></h5>

                        <div class="table-responsive">

<?php
$description_goods_head = array(
    'Type of production', 'Amount of product or item(4+5)', 'Unit of production', 'Gift giving and own use',
    'Sold and exchanged', 'Price per unit', 'Total existing price (2 X 6)'
);

$description_good_cols_title = array(
    'Meat', 'Milk', 'Butter', 'Cheese', 'Ghee', 'Egg', 'Skin', 'Organic fertilizer', 'Others______'
);
?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
<?php for ($k = 0; $k < count($description_goods_head); $k++): ?>

                                            <th><?php echo $description_goods_head[$k]; ?></th>

<?php endfor; ?>  
                                    </tr>

                                <tbody>
                            <?php for ($i = 0; $i < count($description_good_cols_title); $i++): ?> 
                                        <tr>

                                            <td><?php echo $description_good_cols_title[$i]; ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr> 
                            <?php endfor; ?>         
                                </tbody>

                                </thead>

                                <tbody>





                                </tbody>
                            </table>  

                        </div>  

                        <h5><b>707.What was your total expenditure for animal husbandry? (In last three months)</b></h5>

                        <div class="table-responsive">

<?php
$animal_husbandry_headTitle = array(
    'Areas of expenditure', 'Unit', 'Amount', 'Purchase value of standard unit', 'Total purchase value(3X4)'
);

$animal_husbandry_col_list = array(
    'Livestock feed', 'Price for using pasture (If any)', 'Vaccination, medicine and miscellaneous expenses ', 'Construction and maintenance of animal housing', 'Labour employment if necessary', 'Others__________', 'Others__________'
);
?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
<?php for ($i = 0; $i < count($animal_husbandry_headTitle); $i++): ?>

                                            <th>
    <?php echo $animal_husbandry_headTitle[$i]; ?>  

                                            </th>
<?php endfor; ?>
                                    </tr>


                                </thead>

                                <tbody>

                            <?php for ($j = 0; $j < count($animal_husbandry_col_list); $j++): ?>
                                        <tr>
                                            <td>
                                <?php echo $animal_husbandry_col_list[$j]; ?> 

                                            </td>  
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td> 
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                            <td><?php echo $this->Form->input('collector_name', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                        </tr>

                            <?php endfor; ?>

                                </tbody>
                            </table>  

                        </div>  

                        <h4>G- 4:Fishing and Pisciculture</h4>
                        <h5>708. Amount of Fish caught from different sources (River, Bil, Haor)(In the last 1 month)</h5>

                        <div class="table-responsive">

                                        <?php
                                        $pishing_pisicirculture_head_title = array(
                                            'Type of Fish', 'Place of collection', 'Total collection (5+6)', 'Gift giving and own use', 'Sale and exchange',
                                            'Price per kg', 'Total price (4X7)', 'Expenses**', 'Total earning (8-9)'
                                        );

                                        $pishing_pisicirculture_col_title = array(
                                            'Bhetki', 'Paissa/ Faissa', 'Tengra', 'Shrimp', 'Coral', 'Kaing', 'Rupchanda', 'Crab',
                                            'Rui', 'Katla', 'Boal', 'Kali Baush', 'Chitol', 'Aiyr', 'Foli', 'Ilish', 'Pabda', 'Poa',
                                            'Ritha', 'Others ______', 'Others ______'
                                        );
                                        ?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
<?php for ($i = 0; $i < count($pishing_pisicirculture_head_title); $i++): ?>
                                            <th>

                                        <?php echo $pishing_pisicirculture_head_title[$i]; ?>  

                                            </th>

<?php endfor; ?>
                                    </tr>



                                </thead>

                                <tbody>

                            <?php for ($j = 0; $j < count($pishing_pisicirculture_col_title); $j++): ?>

                                        <tr>
                                            <td>

                                <?php
                                echo $pishing_pisicirculture_col_title[$j];


                                for ($l = 1; $l < count($pishing_pisicirculture_head_title); $l++):
                                    $a = $pishing_pisicirculture_head_title[$l];

                                    $field_name = str_replace(' ', '_', $a);

                                    echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';

                                endfor;
                                ?>
                                            </td>  




                                        </tr>

                                        <?php endfor; ?>


                                </tbody>
                            </table>  

                        </div>  

                        <h5>Amount of Fish caught from pond/ land/ farm (In the last month)</h5>

                        <div class="table-responsive">

<?php
$fish_caught_headTitle = array(
    'Type of Fish', 'Place of collection', 'Total collection (4+5)', 'Gift giving and own use', 'Sale and exchange',
    'Price per kg', 'Total price (3X6)', 'Expenses**', 'Total earning (7-8)'
);

$fish_caught_colTitle = array(
    'Rui', 'Pangas', 'Silvercarp/ Grasscarp', 'Crab', 'Puti', 'Shing/Magur', 'Koi', 'Baim',
    'Baila', 'Tengra', 'Shorputi', 'Taki', 'Shol', 'Gojar', 'Katla', 'Nilotica', 'Telapia', 'Mrigel', 'Kachki',
    'Others ______', 'Others ______', 'Others ______', 'Others ______', 'Others ______'
);
?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="7">Did members of the household catch fish from pond/ land/ farm in the last month?</th>
                                        <th>Yes</th>
                                        <th>No</th>

                                    </tr>
                                    <tr>
<?php for ($k = 0; $k < count($fish_caught_headTitle); $k++): ?>

                                            <th><?php echo $fish_caught_headTitle[$k]; ?></th>

<?php endfor; ?>

                                    </tr>

                                </thead>

                                <tbody>

<?php for ($l = 0; $l < count($fish_caught_colTitle); $l++): ?> 

                                        <tr>

                                            <td>
                                <?php echo $fish_caught_colTitle[$l]; ?> 

                                            </td> 



                                <?php
                                for ($k = 1; $k < count($fish_caught_headTitle); $k++):

                                    $a = $fish_caught_colTitle[$l];

                                    $field_name = str_replace(' ', '_', $a);

                                    echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';

                                endfor;
                                ?>


                                        </tr>

<?php endfor; ?>

                                </tbody>
                            </table>  

                        </div>  


                        <h4>Hunting and Trapping (In the last month)</h4>

                        <div class="table-responsive">

                                        <?php
                                        $hunting_trapping_headTitle = array(
                                            'Type of Game', 'Place of hunting/ trapping', 'Total collection (4+5)', 'Gift giving and own use', 'Sale and exchange',
                                            'Price per kg', 'Total price (3X6)', 'Expenses**', 'Total earning (7-8)'
                                        );

                                        $hunting_trapping_cols = array(
                                            'Fowl', 'Rabbit', 'Wild boar', 'Snakes', 'Birds', 'Rats', 'Gaur/Goyal', 'Others ______', 'Others ______', 'Others ______', 'Others ______', 'Others ______'
                                        );
                                        ?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="3">Do you do hunting?</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>

                                    <tr>
                                        <?php for ($k = 0; $k < count($hunting_trapping_headTitle); $k++): ?>

                                            <th><?php echo $hunting_trapping_headTitle[$k]; ?></th>

                                        <?php endfor; ?>

                                    </tr>


                                </thead>

                                <tbody>

<?php for ($m = 0; $m < count($hunting_trapping_cols); $m++): ?> 

                                        <tr>

                                            <td>
    <?php echo $hunting_trapping_cols[$m]; ?> 

                                            </td> 

    <?php
    for ($k = 1; $k < count($hunting_trapping_headTitle); $k++):

        $a = $hunting_trapping_headTitle[$k];

        $field_name = str_replace(' ', '_', $a);

        echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';

    endfor;
    ?>




                                        </tr>

                            <?php endfor; ?>

                                </tbody>
                            </table>  

                        </div>  



                        <h5>G- 5: Survey of business earnings of the household in the last month </h5>
                        <h5>(If members of households are involved in different business activities, a specific column has to be filled in by each business)</h5>

                        <div class="table-responsive">

                                        <?php
                                        $survey_businessTitle = array(
                                            'Description', 'Primary business', 'Secondary business'
                                        );


                                        $what_type = array(
                                            'What types of businesses the members are involved in?', 'Total earning (Total sale)'
                                        );

                                        $expenditure_list = array(
                                            'Purchase of goods', 'Own labour (Equivalent of market value)', 'Recruiting employees', 'Cost of transportation and marketing',
                                            'Value of capital', 'Other expenses', 'Gross earning {2- (3+4+5+6+7+8)}', 'Value of existing investment'
                                        );
                                        ?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th>Are any member/ or members of the household involved in any business activity?</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>
                                    <tr>
                                        <?php
                                        for ($k = 0; $k < count($survey_businessTitle); $k++):

                                            echo '<th>' . $survey_businessTitle[$k] . '</th>';

                                        endfor;
                                        ?>
                                    <tr>



                                </thead>

                                <tbody>

                                    <?php for ($i = 0; $i < count($what_type); $i++): ?>
                                        <tr>
                                            <td><?php echo $what_type[$i]; ?></td> 
    <?php
    for ($j = 1; $j < count($survey_businessTitle); $j++):

        $a = $survey_businessTitle[$j];

        $field_name = str_replace(' ', '_', $a);

        echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';
        ?>

    <?php endfor; ?>

                                        </tr>

                            <?php endfor; ?>

                                    <tr>

                                        <td colspan="3">Expenditure </td>  
                                    </tr>

                            <?php for ($i = 0; $i < count($expenditure_list); $i++): ?>
                                        <tr>
                                            <td><?php echo $expenditure_list[$i]; ?></td> 
                                <?php
                                for ($j = 1; $j < count($survey_businessTitle); $j++):

                                    $a = $survey_businessTitle[$j];

                                    $field_name = str_replace(' ', '_', $a);

                                    echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';
                                    ?>

                                <?php endfor; ?>

                                        </tr>

<?php endfor; ?>

                                </tbody>
                            </table>  

                        </div>  

                        <h4>G-6: Survey of the miscellaneous earnings of the household from forest produces in the last month (In the last month)</h4>

                        <div class="table-responsive"> 

                                        <?php
                                        $miscellaneous_eangs_thead = array(
                                            'Type of produces', 'Total collection', 'Unit', 'Gift giving and own',
                                            'Sale and exchang', 'Price per unit', 'Total price', 'Expenses**', 'Net earning'
                                        );

                                        $miscellaneous_eangs_tbody = array(
                                            'Honey', 'Golpata', 'Fish', 'Crab', 'Others __________', 'Others __________', 'Others __________'
                                        );
                                        ?>

                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                                        <th colspan="7"> What kind of forest produces (except those already mentioned) did the members collect in the last month? </th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>

                                    <tr>
                                        <?php for ($i = 0; $i < count($miscellaneous_eangs_thead); $i++): ?> 

                                            <th><?php echo $miscellaneous_eangs_thead[$i]; ?></th>

                                        <?php endfor; ?> 
                                    </tr>

                                </thead>

                                <tbody>

<?php for ($j = 0; $j < count($miscellaneous_eangs_tbody); $j++): ?>
                                        <tr>
    <?php for ($k = 0; $k < count($miscellaneous_eangs_thead); $k++): ?>  
        <?php
        $a = $miscellaneous_eangs_thead[$k];

        $field_name = str_replace(' ', '_', $a);

        echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';
    endfor;
    ?>
                                        <?php endfor; ?>
                                    </tr>


                                </tbody>
                            </table>  

                        </div>  

                        <h4>G-7: Survey of other collective earnings of the household (In the last 6 months)</h4>
                        <h5>712. Was there any other source of income of the household members except those already mentioned?</h5>

                        <div class="table-responsive">

<?php
$table_head = array('Sources of Income', 'Amount of total income');

$table_cols = array('Money sent from abroad', 'Aid from Governmental and non-Governmental organization', 'Gifts or help from relatives and friends', 'Pension', 'Rent from house or land', 'Others (Please specify) ______________');
?>
                            <table class="table table-bordered table-striped">
                                <thead>

                                    <tr>
                            <?php for ($i = 0; $i < count($table_head); $i++): ?>

                                            <th><?php echo $table_head[$i]; ?></th> 
                            <?php endfor; ?>   
                                    </tr>



                                </thead>

                                <tbody>
                            <?php for ($i = 0; $i < count($table_cols); $i++): ?>

                                        <tr>
                                            <td><?php echo $table_cols[$i]; ?></td>
                                <?php for ($k = 1; $k < count($table_head); $k++): ?>  
                                    <?php
                                    $a = $table_head[$k];

                                    $field_name = str_replace(' ', '_', $a);

                                    echo '<td>' . $this->Form->input($field_name, array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')) . '</td>';
                                endfor;
                                ?>
                                        </tr>

<?php endfor; ?>
                                </tbody>
                            </table>  

                        </div> 


                        <button class="btn btn-info">Submit</button>
<?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>