<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class currencyController extends AbstractActionController
{
    public function currencyAction()
    {
        
        
        return new ViewModel((array("titulo"=>"Entregue dos parametros para multiplicar")));
    }
    
    public function currencyresAction()
    {
        $primero=$_POST['primero'];
        $segundo=$_POST['segundo'];
        $tercero = $primero * $segundo ;
   return new ViewModel(array('datos'=>$tercero,"titulo"=>"resultado"));
    }
}