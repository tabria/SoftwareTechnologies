<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $result = $this->doCalculation($calculator);
            $result = $this->doEqualConversion($calculator, $result);

            return $this->render('calculator/index.html.twig',
                ['result'=>$result, 'calculator' =>$calculator, 'form' =>$form->createView()]);
        }

        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);

    }

    public function doCalculation(calculator $calculator)
    {
        $calculatorService = new \CalculatorBundle\Service\Calculator();

        $leftOperand = $calculator->getLeftOperand();
        $rightOperand = $calculator->getRightOperand();
        $operator = $calculator->getOperator();


        $result = 0;

        switch($operator){
            case '+':
                $result = $calculatorService->sum($leftOperand, $rightOperand);
                break;
            case '-':
                $result = $calculatorService->subtract($leftOperand, $rightOperand);
                break;
            case '*':
                $result = $calculatorService->multiply($leftOperand, $rightOperand);
                break;
            case '/':
                $result = $calculatorService->divide($leftOperand, $rightOperand);
                break;
            case '^':
                $result = $calculatorService->xPower($leftOperand, $rightOperand);
                break;
            case '%':
                $result = $calculatorService->modulo($leftOperand, $rightOperand);
                break;
        }

        return $result;
    }

    public function doEqualConversion(calculator $calculator, $result)
    {
        $calculatorService = new \CalculatorBundle\Service\Calculator();
        $equalOperator = $calculator->getEqualOperator();
        switch($equalOperator){
            case '=b':
                $result = $calculatorService->binaryResult($result);
                break;
            case '=o':
                $result = $calculatorService->octalResult($result);
                break;
            case '=h':
                $result = $calculatorService->hexaResult($result);
                break;
        }

        return $result;
    }
}
