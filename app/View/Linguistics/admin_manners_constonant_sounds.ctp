<style type="text/css">

    .left_side{float: left;}

    .right_side{float: right;}

</style>
<div class="row">
    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
        <p>4. What are the places and manners of the constonant sounds ? Provide detail chart with relevant examples from answers of Question 02. </p>
        <?php echo $this->Form->create('FeatureOfConsonantSound',array('class'=>'')) ?>
         <?php
             if(!empty($this->data['FeatureOfConsonantSound']['id'])){
                                                        echo $this->Form->input('FeatureOfConsonantSound.id',array('type'=>'hidden')); 
                                                    }
                                                ?>
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php echo __('Features Of Consonant Sounds'); ?></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
                        <div class="col-lg-6 col-md-6">
                                                <p><span class="text-green"><b>Personnel Name: </b></span><b><?php echo $personalInfo['PersonnelInformation']['first_name'].' '.$personalInfo['PersonnelInformation']['last_name'];  ?></b></p>

                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <p><span class="text-green"><b>Personnel Id: </b></span><b><?php echo $personalInfo['PersonnelInformation']['id'];  ?></b></p>

                                            </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td><strong>Manner</strong></td>
                                <td colspan="2"><strong>Labial</strong></td>
                                <td colspan="2"><strong>Labio-dental</strong></td>
                                <td colspan="2"><strong>Dental</strong></td>
                                <td colspan="2"><strong>Alveolar</strong></td>
                                <td colspan="2"><p><strong>Alaveo-</strong></p>
                                    <p><strong>palatal</strong></p></td>
                                <td><strong>Platal</strong></td>
                                <td colspan="2"><strong>Velar</strong></td>
                                <td colspan="2"><strong>Glottal</strong></td>
                            </tr>
                            <tr>
                                <td><p><strong>Plosive/Stop</strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td>p</td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_p', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>t
                                    <label for="textfield3"></label></td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_t', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><label for="textfield5">k</label></td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_k', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td>b</td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_b', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>d</td>
                                <td><label for="textfield4"></label>
                                    <?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_d', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>&nbsp;</td>
                                <td><label for="textfield6">g</label></td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.polsive_g', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td><p><strong>Nasal</strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><label for="textfield3"></label></td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td>m</td>
                                <td><?php echo $this -> Form -> input('FeatureOfConsonantSound.nasal_m', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>n</td>
                                <td><label for="textfield4"></label>
                                    <?php echo $this->Form->input('FeatureOfConsonantSound.nasal_n', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>ŋ</td>
                                <td colspan="2"><label for="textfield6"></label>
                                    <?php echo $this->Form->input('FeatureOfConsonantSound.nasal_last', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td><p><strong><em>Fricative</em></strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td>f</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_f', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>Θ</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_f_next', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td><label for="textfield3">s</label></td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_s', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>ʃ</p></td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_integration', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td>h</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_h', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td colspan="2">&nbsp;</td>
                                <td>v</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiced_v', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>ð</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiced_sigma', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>z</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiced_sigma_z', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>ʒ</td>
                                <td><label for="textfield4">
                                        <?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiced_last', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                    </label></td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield6"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td><p><strong><em>Affricate</em></strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td>ʧ</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiceless_tf', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td>ʤ</td>
                                <td><label for="textfield4">
                                        <?php echo $this->Form->input('FeatureOfConsonantSound.fricative_voiced_dz', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                    </label></td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield6"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td><p><strong><em>Approximant</em></strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td><p>&nbsp;</p></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td>w</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.approximant_w', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td>r</td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.approximant_r', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>j</td>
                                <td colspan="2"><label for="textfield6">
                                        <?php echo $this->Form->input('FeatureOfConsonantSound.approximant_j', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                    </label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td><p><strong><em>Lateral</em></strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td><p>&nbsp;</p></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td><p>l</p></td>
                                <td><?php echo $this->Form->input('FeatureOfConsonantSound.lateral_l', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>j</td>
                                <td colspan="2"><label for="textfield6">
                                        <?php echo $this->Form->input('FeatureOfConsonantSound.lateral_j', array('type' => 'text', 'class' => 'form-control', 'label' => false, 'style' => 'margin-top:3px')); ?>
                                    </label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td><p><strong><em>Retroflex</em></strong></p>
                                    <p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiceless</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td colspan="2">&nbsp;</td>
                                <td><p>&nbsp;</p></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2"><label for="textfield5"></label></td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>voiced</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2"><p>&nbsp;</p></td>
                                <td><p>&nbsp;</p></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <?php echo $this->Form->input('FeatureOfConsonantSound.personnel_information_id', array('type' => 'hidden', 'label' => false, 'div' => false,'value'=>$id)); ?>

                        </table>
                        <br/>
                        <center> <button class="btn btn-info">Next>></button></center>
                        <p>&nbsp;</p>
                       </hr>

						<?php echo $this->Form->end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>