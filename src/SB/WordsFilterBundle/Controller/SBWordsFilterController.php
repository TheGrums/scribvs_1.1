<?php
namespace SB\WordsFilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SBWordsFilterController extends Controller
{
    public function indexAction(){
      return "hello";
    }
    public function filter($string)
    {
        return preg_replace("/(FUCK)/i", "***", $string);
    }
}
