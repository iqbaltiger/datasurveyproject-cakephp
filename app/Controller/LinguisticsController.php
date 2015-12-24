<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('String', 'Utility');

class LinguisticsController extends AppController {

    public $helpers = array('Html', 'Crumb');
    public $uses = array('PersonnelInformation', 'User', 'PhoneticSoundSample', 'FeatureOfVowelSound', 'SemiVowel', 'WfProcess', 'Morphology', 'NumbersGender', 'ComparaisonMarker', 'QuestionType', 'SocioCulture', 'OralLiterature', 'MaterialLanguage',
        'DomainLanguageTongue', 'DifferenceList', 'FeatureOfConsonantSound', 'SentenceType','Story','OfficeUse');
    public $components = array("Paginator", "RequestHandler", "ImageUploader","Session");

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->set('logged_user', $this->Auth->user());
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
        $this->layout = 'linguistics';
    }
    
    
//     public function beforeFilter(){
//		parent::beforeFilter();
//		$user_info = $this->Auth->user();
//		if(strtolower($user_info['Role']['name'])=='admin' || strtolower($user_info['Role']['name'])=='cultural' || $user_info['Role']['access_controller']==$this->params['controller']){
//			$this->Auth->allow();	
//		}else{
//			$this->Session->setFlash(__('You are not Authorized Persion for this Action.'), 'alert_error');
//			$this->redirect($this->referer());
//		}
//		$this->set('logged_user',$user_info);
//        $this->layout = 'cultural';
//		
//	}
    

    public function admin_personnel_information() {

        
        if ($this->request->is(array('post','put'))) {


            $data = $this->request->data;
            
          // pr($data); exit;

            $data['PersonnelInformation']['user_id'] = $this->Auth->user('id');
            if ($this->PersonnelInformation->save($data)) {
                $last_insert_id = $this->PersonnelInformation->getLastInsertID();
                if(empty($last_insert_id)){
                   $last_insert_id =  $this->Session->read('personnel_information_id');
                }

                $this->Session->write('personnel_information_id', $last_insert_id);

                $this->Session->read('personnel_information_id');

                $this->Session->setFlash(__('The personnel information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_officeuse', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The personnel information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        
        else{
                 $id = $this->Session->read('personnel_information_id'); 
                $this->request->data = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
                
              //  pr($this->request->data); exit;
            
        }
      //  $users = $this->PersonnelInformation->User->find('list');
       // $this->set(compact('users'));
        $this->set('title_for_layout', 'Personnel Information');
    }

    public function admin_vowel() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
           

            // $this->addPersonnelId('PhoneticSoundSample');
            //$this->nonemptyElement('PhoneticSoundSample', 'ipa_word');
           // pr($this->request->data); exit;
            if ($this->PhoneticSoundSample->saveMany($this->request->data)) {
                $last_insert_id = $this->PhoneticSoundSample->getLastInsertID();

                $this->Session->setFlash(__('The PhoneticSoundSample information has been saved for vowel. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'consonant', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The PhoneticSoundSample information could not be saved for vowel. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->PhoneticSoundSample->find('all', array('conditions' => array('PhoneticSoundSample.personnel_information_id' => $id, 'PhoneticSoundSample.phonetic_type' => 'vowel')));
        }


        $this->set('title_for_layout', 'VOWEL sound samples');
    }

    public function admin_consonant() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
        if ($this->request->is('post')) {
            
            //pr($this->request->data); exit;
            
            //$this->addPersonnelId('PhoneticSoundSample');
            // $this->nonemptyElement('PhoneticSoundSample', 'ipa_word');
            if ($this->PhoneticSoundSample->saveMany($this->request->data)) {
                $last_insert_id = $this->PhoneticSoundSample->getLastInsertID();
                $this->Session->setFlash(__('The PhoneticSoundSample information has been saved for Consonant. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'vowel_sound_features', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The PhoneticSoundSample information could not be saved for Consonant. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->PhoneticSoundSample->find('all', array('conditions' => array('PhoneticSoundSample.personnel_information_id' => $id, 'PhoneticSoundSample.phonetic_type' => 'consonant')));
        }
        $this->set('title_for_layout', 'CONSONANT sound samples');
    }

    public function admin_vowel_sound_features() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
        if ($this->request->is('post')) {

            //pr($this->request->data); exit;

            if ($this->FeatureOfVowelSound->saveMany($this->request->data)) {
                $last_insert_id = $this->FeatureOfVowelSound->getLastInsertID();

                $this->Session->setFlash(__('The FeatureOfVowelSound information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'manners_constonant_sounds', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The FeatureOfVowelSound information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->FeatureOfVowelSound->find('all', array('conditions' => array('FeatureOfVowelSound.personnel_information_id' => $id)));
            //$this->request->data =  $datas;
        }


        $this->set('title_for_layout', 'Vowel Sound Features');
    }

    public function admin_manners_constonant_sounds() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);


        if ($this->request->is(array('post', 'put'))) {

            // pr($this->request->data); exit;

            if ($this->FeatureOfConsonantSound->save($this->request->data)) {
                $last_insert_id = $this->FeatureOfConsonantSound->getLastInsertID();

                $this->Session->setFlash(__('The FeatureOfVowelSound information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'comparing_language', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The FeatureOfVowelSound information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->FeatureOfConsonantSound->find('first', array('conditions' => array('FeatureOfConsonantSound.personnel_information_id' => $id)));
            // pr($this->request->data); exit;
            //$this->request->data =  $datas;
        }


        $this->set('title_for_layout', 'CONSONANT sound samples');
    }

    public function admin_comparing_language() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
        if ($this->request->is(array('post', 'put'))) {
            //$this->addPersonnelId('SemiVowel');
            //$this->nonemptyElement('SemiVowel', 'ipa_word');
            // pr($this->request->data); exit;

            if ($this->SemiVowel->saveMany($this->request->data)) {
                $last_insert_id = $this->SemiVowel->getLastInsertID();

                $this->Session->setFlash(__('The SemiVowel information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'wfprocess', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SemiVowel information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->SemiVowel->find('all', array('conditions' => array('SemiVowel.personnel_information_id' => $id)));
        }


        $this->set('title_for_layout', 'Comparing Language (Vowel)');
    }

    public function admin_suprasegmentals() {
        $this->set('title_for_layout', 'Comparing Language (Vowel)');
    }

    public function admin_noun_color() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {

            //$this->addPersonnelId('Morphology');
            // $this->nonemptyElement('Morphology', 'target_bangla_script');
            // pr($this->request->data); exit;

            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_nature_religion', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_color')));
        }

        $this->set('title_for_layout', 'Noun Color');
    }

    public function admin_noun_nature_religion() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {

            // $this->addPersonnelId('Morphology');
            //$this->nonemptyElement('Morphology', 'target_bangla_script');
            // pr($this->request->data); exit;

            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_animals', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_religion')));
        }
        $this->set('title_for_layout', 'Noun Nature & Religion');
    }

    public function admin_noun_animals() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_fruits', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'morphology_animals')));
        }
        $this->set('title_for_layout', 'Animals');
    }

    public function admin_noun_fruits() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_body_parts', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_fruits')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_body_parts() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_profession', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_body_parts')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_profession() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_human_relation', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_professions')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_human_relation() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_cultural_terms', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_human_kinship')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_cultural_terms() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_numerics', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_cultural')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_numerics() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_temporal', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_numerics')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_temporal() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_pronoun', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_temporal')));
        }
        $this->set('title_for_layout', 'Noun');
    }

    public function admin_noun_pronoun() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_verb', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'noun_pronoun')));
        }
        $this->set('title_for_layout', 'Pronoun');
    }

    public function admin_noun_verb() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'conjunction', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'morphology_verb')));
        }
        $this->set('title_for_layout', 'Verb');
    }

    public function admin_noun_others() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
//       $this->addPersonnelId('Morphology');
        if ($this->request->is('post')) {
//             pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'numbers_genders', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find(
                    'all', array(
                'conditions' => array(
                    'Morphology.personnel_information_id'=>$id,
                    'Morphology.morphology_type' => array('verbal_adjective', 'qunatifiers', 'demonstrative_articles', 'reduplicated_word_list')
                ),
                'order' => 'Morphology.id ASC'
                    )
            );
        }
        $this->set('title_for_layout', 'Admin Noun Others');
    }

    public function admin_others() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
           
            

            $oral_literature = $this->request->data['Oral_Marker'];
            $material_language = $this->request->data['Material_Marker'];

            //pr($oral_literature); exit;

            if ($this->OralLiterature->saveMany($oral_literature)) {
                $last_insert_id = $this->OralLiterature->getLastInsertID();
            }

            if ($this->MaterialLanguage->saveMany($material_language)) {
                $last_insert_id = $this->MaterialLanguage->getLastInsertID();
            }

            unset($this->request->data['Oral_Marker']);
            unset($this->request->data['Material_Marker']);
            //pr($this->request->data); exit;
            if ($this->SocioCulture->saveMany($this->request->data)) {
                $last_insert_id = $this->SocioCulture->getLastInsertID();

                $this->Session->setFlash(__('The SocioCulture information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'socio_section_b', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SocioCulture information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $SocioCulture = $this->SocioCulture->find(
                    'all', array(
                'conditions' => array(
                    'SocioCulture.personnel_information_id' => $id,
                ),
                'order' => 'SocioCulture.id ASC'
                    )
            );

            $MaterialLanguage = $this->MaterialLanguage->find(
                    'all', array(
                'conditions' => array(
                    'MaterialLanguage.personnel_information_id' => $id,
                ),
                'order' => 'MaterialLanguage.id ASC'
                    )
            );

            $OralLiterature = $this->OralLiterature->find(
                    'all', array(
                'conditions' => array(
                    'OralLiterature.personnel_information_id' => $id,
                ),
                'order' => 'OralLiterature.id ASC'
                    )
            );

            $this->request->data = $SocioCulture;
            $this->request->data['Oral_Marker'] = $OralLiterature;
            $this->request->data['Material_Marker'] = $MaterialLanguage;
        }


        $this->set('title_for_layout', 'Socio Culture');
    }

    public function admin_numbers_genders() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        // $this->set('personalInfo', $personalInfo);
        // pr($this->request->data);exit;
        if ($this->request->is(array('post', 'put'))) {


            //  $this->addPersonnelId('NumbersGender');
            //$this->nonemptyElement('ComparaisonMarker', 'english_equivalent');
            // 
            $number_data['NumbersGender'] = $this->request->data['NumbersGender'];
            $market = $this->request->data['Market'];
            $Number_Marker = $this->request->data['Number_Marker'];

            $reduplication = $this->request->data['reduplication'];

            /* pr($number_data);
              pr($market);
              pr($Number_Marker);
              exit; */

            if ($this->ComparaisonMarker->saveMany($reduplication)) {
                $last_insert_id = $this->ComparaisonMarker->getLastInsertID();
            }

            if ($this->ComparaisonMarker->saveMany($market)) {
                $last_insert_id = $this->ComparaisonMarker->getLastInsertID();
            }

            if ($this->ComparaisonMarker->saveMany($Number_Marker)) {
                $last_insert_id = $this->ComparaisonMarker->getLastInsertID();
            }




            if ($this->NumbersGender->save($number_data)) {

                $last_insert_id = $this->NumbersGender->getLastInsertID();

                $this->Session->setFlash(__('The NumbersGender information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'word_order', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The NumbersGender information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {

            $getReduplicationMarker = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id, 'ComparaisonMarker.table_attribute_type' => array('reduplication_marker'))));
            $marker = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id, 'ComparaisonMarker.table_attribute_type' => array('gender_marker'))));
            $number_marker = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id, 'ComparaisonMarker.table_attribute_type' => array('number_marker'))));
            $numberGender = $this->NumbersGender->find('first', array('conditions' => array('NumbersGender.personnel_information_id' => $id)));

            $this->request->data['reduplication'] = $getReduplicationMarker;

            if (!empty($numberGender)) {
                $this->request->data['NumbersGender'] = $numberGender['NumbersGender'];
            }



            $this->request->data['Market'] = $marker;
            $this->request->data['Number_Marker'] = $number_marker;
        }


        $this->set('title_for_layout', 'Numbers & Genders');
    }

    public function admin_word_order() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {

           //  pr($this->request->data); exit;
            //$this->addPersonnelId('ComparaisonMarker');
            // $this->nonemptyElement('ComparaisonMarker', 'bangla_equivalent');


            if ($this->ComparaisonMarker->saveMany($this->request->data)) {
                $last_insert_id = $this->ComparaisonMarker->getLastInsertID();

                $this->Session->setFlash(__('The ComparaisonMarker information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'sentence_type', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The ComparaisonMarker information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {

            $this->request->data = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id, 'ComparaisonMarker.table_attribute_type' => array('word_order_marker'))));
            //$this->request->data = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id)));
            // pr($this->request->data);exit;
        }

        $this->set('title_for_layout', 'Word Order');
    }

    public function admin_sentence_type() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->SentenceType->saveMany($this->request->data)) {
                $last_insert_id = $this->SentenceType->getLastInsertID();

                $this->Session->setFlash(__('The SentenceType information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'question_type', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SentenceType information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->SentenceType->find('all', array('conditions' => array('SentenceType.personnel_information_id' => $id)));


        }


        $this->set('title_for_layout', 'Sentence Type');
    }

    public function admin_question_type() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is(array('post','put'))) {
          // pr($this->request->data);exit;
            
            $number_marker = $this->request->data['Number_Marker'];
            
           //pr($number_marker); exit;
             $question_type = $this->request->data;

            if ($this->ComparaisonMarker->saveMany($number_marker)) {
                $last_insert_id = $this->ComparaisonMarker->getLastInsertID();
            }
            if ($this->QuestionType->save($question_type)) {
                $last_insert_id = $this->QuestionType->getLastInsertID();
                $this->Session->setFlash(__('The QuestionType information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'question_type', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The QuestionType information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {

            $number_marker = $this->ComparaisonMarker->find('all', array('conditions' => array('ComparaisonMarker.personnel_information_id' => $id, 'ComparaisonMarker.table_attribute_type' => array('location_marker'))));

            $this->request->data = $this->QuestionType->find('first', array('conditions' => array('QuestionType.personnel_information_id' => $id)));
            
            $this->request->data['Number_Marker'] = $number_marker;
            
           // pr($this->request->data);exit;
        }
        $this->set('title_for_layout', 'Question');
    }

    public function admin_wfprocess() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            //$this->addPersonnelId('WfProcess');
            //$this->nonemptyElement('WfProcess', 'ipa_word');
            // pr($this->request->data); exit;

            if ($this->WfProcess->saveMany($this->request->data)) {
                $last_insert_id = $this->WfProcess->getLastInsertID();

                $this->Session->setFlash(__('The SemiVowel information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_color', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SemiVowel information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->WfProcess->find('all', array('conditions' => array('WfProcess.personnel_information_id' => $id)));
        }


        $this->set('title_for_layout', 'WFProcess');
    }

    public function admin_conjunction() {
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            // pr($this->request->data); exit;
            if ($this->Morphology->saveMany($this->request->data)) {
                $last_insert_id = $this->Morphology->getLastInsertID();

                $this->Session->setFlash(__('The Morphology information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'noun_others', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Morphology information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Morphology->find('all', array('conditions' => array('Morphology.personnel_information_id' => $id, 'Morphology.morphology_type' => 'morphology_conjunction')));
        }
        $this->set('title_for_layout', 'Conjunction');
    }

    public function admin_socio_culture() {
        
    }

    public function admin_socio_section_b() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {

            //pr($this->request->data); exit;
            $domainTableData = $this->request->data['Domain_Marker'];
//            $material_language = $this->request->data['Material_Marker'];
//            
//          
            if ($this->DomainLanguageTongue->saveMany($domainTableData)) {
                $last_insert_id = $this->DomainLanguageTongue->getLastInsertID();
            }
//            
//             if ($this->MaterialLanguage->saveMany($material_language)) {
//                $last_insert_id = $this->MaterialLanguage->getLastInsertID();
//            }
//
//            unset($this->request->data['Oral_Marker']);
            unset($this->request->data['Domain_Marker']);

            if ($this->SocioCulture->saveMany($this->request->data)) {
                $last_insert_id = $this->SocioCulture->getLastInsertID();

                $this->Session->setFlash(__('The SocioCulture information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'socio_section_c', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SocioCulture information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $SocioCulture = $this->SocioCulture->find(
                    'all', array(
                'conditions' => array(
                    'SocioCulture.personnel_information_id' => $id,
                    'SocioCulture.question_no >=' => 9, 'SocioCulture.question_no <=' => 17
                ),
                'order' => 'SocioCulture.id ASC'
                    )
            );

            $domainList = $this->DomainLanguageTongue->find(
                    'all', array(
                'conditions' => array(
                    'DomainLanguageTongue.personnel_information_id' => $id,
                ),
                'order' => 'DomainLanguageTongue.id ASC'
                    )
            );
//            
//            $OralLiterature = $this->OralLiterature->find(
//                    'all', array(
//                'conditions' => array(
//                    'OralLiterature.personnel_information_id'=>$id,
//                ),
//                'order' => 'OralLiterature.id ASC'
//                )
//            );
            $this->request->data = $SocioCulture;
            $this->request->data['Domain_Marker'] = $domainList;

            //pr($this->request->data);exit;
//            $this->request->data['Material_Marker'] = $MaterialLanguage;
        }


        $this->set('title_for_layout', 'Socio Culture');
    }

    public function admin_personnellist() {

         $this->Session->delete('personnel_information_id');
        $this->PersonnelInformation->recursive = 0;
        $this->set('PersonnelInformations', $this->Paginator->paginate());
        $this->set('title_for_layout', 'Admin Personnel List');
    }

    public function admin_socio_section_c() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {



            if ($this->SocioCulture->saveMany($this->request->data)) {
                $last_insert_id = $this->SocioCulture->getLastInsertID();

                $this->Session->setFlash(__('The SocioCulture information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'socio_section_d', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SocioCulture information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->SocioCulture->find('all', array('conditions' => array('SocioCulture.personnel_information_id' => $id, 'SocioCulture.question_no >=' => 18, 'SocioCulture.question_no <=' => 27)));

            //pr($this->request->data);exit;
        }


        $this->set('title_for_layout', 'Socio Culture');
    }

    public function admin_socio_section_d() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {

            $differenceTableData = $this->request->data['Difference_Marker'];

            // pr($differenceTableData); exit;

            if ($this->DifferenceList->saveMany($differenceTableData)) {
                $last_insert_id = $this->DifferenceList->getLastInsertID();
            }

            unset($this->request->data['Difference_Marker']);
            
           // pr($this->request->data); exit;
            if ($this->SocioCulture->saveMany($this->request->data)) {
                $last_insert_id = $this->SocioCulture->getLastInsertID();

                $this->Session->setFlash(__('The SocioCulture information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'socio_section_e', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SocioCulture information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $SocioCulture = $this->SocioCulture->find(
                    'all', array(
                'conditions' => array(
                    'SocioCulture.personnel_information_id' => $id,
                    'SocioCulture.question_no >=' => 28, 'SocioCulture.question_no <=' => 36
                ),
                'order' => 'SocioCulture.id ASC'
                    )
            );

            $differenceList = $this->DifferenceList->find(
                    'all', array(
                'conditions' => array(
                    'DifferenceList.personnel_information_id' => $id,
                ),
                'order' => 'DifferenceList.id ASC'
                    )
            );
//pr($SocioCulture);
            $this->request->data = $SocioCulture;
            $this->request->data['Difference_Marker'] = $differenceList;

            // pr($this->request->data);exit;
        }


        $this->set('title_for_layout', 'Socio Culture');
    }

    public function admin_socio_section_e() {

        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);

        if ($this->request->is('post')) {
            if ($this->SocioCulture->saveMany($this->request->data)) {
                $last_insert_id = $this->SocioCulture->getLastInsertID();

                $this->Session->setFlash(__('The SocioCulture information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'section_storytext', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The SocioCulture information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->SocioCulture->find('all', array('conditions' => array('SocioCulture.personnel_information_id' => $id, 'SocioCulture.question_no >=' => 37, 'SocioCulture.question_no <=' => 52)));

            //pr($this->request->data);exit;
        }


        $this->set('title_for_layout', 'Socio Culture');
    }

    public function admin_session_create($id = null) {

        $this->Session->write('personnel_information_id', $id);

        return $this->redirect(
                        array('controller' => 'linguistics', 'action' => 'vowel')
        );

        //$this->layout=FALSE;
    }
    
    
    public function admin_section_storytext() {
        
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
        $this->set('personalInfo', $personalInfo);
          if ($this->request->is(array('post','put'))) {
              
             // pr($this->request->data); exit;
            if ($this->Story->save($this->request->data)) {
                $last_insert_id = $this->Story->getLastInsertID();

                $this->Session->setFlash(__('The Story information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'numbers_genders', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The Story information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->Story->find('first', array('conditions' => array('Story.personnel_information_id' => $id)));

            //pr($this->request->data);exit;
        }
        
        
         $this->set('title_for_layout', 'Story Text');
    }
    
    public function admin_section_officeuse() {
        
        $id = $this->Session->read('personnel_information_id');
        $this->set('id', $id);
        $personalInfo = $this->PersonnelInformation->find('first', array('conditions' => array('PersonnelInformation.id' => $id)));
      
        $this->set('personalInfo', $personalInfo);
          if ($this->request->is(array('post','put'))) {
              
              //pr($this->request->data); exit;
            if ($this->OfficeUse->save($this->request->data)) {
                $last_insert_id = $this->OfficeUse->getLastInsertID();

                $this->Session->setFlash(__('The OfficeUse information has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'vowel', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The OfficeUse information could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $this->request->data = $this->OfficeUse->find('first', array('conditions' => array('OfficeUse.personnel_information_id' => $id)));

            //pr($this->request->data);exit;
        }
        
        
        $this->set('title_for_layout', 'Office Use');
        
    }
    

}

?>
