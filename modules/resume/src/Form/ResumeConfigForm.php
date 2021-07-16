<?php

namespace Drupal\ResumeConfig\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;


// class ResumeConfigForm extends ConfigFormBase {
//     protected function getEditableConfigNames(){
//         return [
//             'resume.settings',
//         ];
//     }

//     public function getFormId(){
//         return "resume_config_form";
//     }

//     public function buildForm(array $form, FormStateInterface $form_state) {
        
//         $config = $this->config('resume.settings');
//         $form['resume_type'] = array(
//             "#type" => 'Textarea',
//             '#title' => 'Upload Resume',
//             '#default_value' => $config->get('resume.resume_type')
//         );
//         return $form;
//     }
//     // public function submitForm(array $form, FormStateInterface $form_state){
//     //     $config = $this->config('resume.settings');
//     //     $config->set('resume.resume_type', $form_state->getValue('resume_type'));    
//     //     $config->save();
//     //     return parent::submitForm($form, $form_state);
//     // }
// }

?>