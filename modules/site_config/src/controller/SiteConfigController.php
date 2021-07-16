<?php

namespace Drupal\site_config\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

class SiteConfigController {  
  
    // Retrieve JSON of a node 
    public function content($node) {
        $response = new JsonResponse();
        $config = \Drupal::config('system.site');
        $node = Node::load($node);
        if(!empty($config->get('siteapikey')) && !empty($node)){
            $data = array(
                'date' => time(),
                'site_name' => $config->get('name'),
                'site_email' => $config->get('mail'),
                'API_Key' => $config->get('siteapikey'),
                'node' => array(
                    'title' => $node->get('title')->getValue()[0]['value'],
                    'body' => $node->get('body')->getValue()[0]['value'],
                )
            );
            $response->setData($data);
            return $response;
    }
    else{
            throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
    }
    }
  }



?>