<?php

namespace Drupal\academy\Controller;

class AcademyController
{
    public function hello()
    {
        return array(
            '#title' => 'Mon module',
            '#markup' => 'Ceci est mon module'
        );
    }
    
}