<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $taskRepo = $this->getDoctrine()->getRepository(Task::class);

        $openTasks = $taskRepo->findBy(['status' => 'Open']);
        $inProgressTasks = $taskRepo->findBy(['status' => 'in Progress']);
        $finishedTasks = $taskRepo->findBy(['status' => 'Finished']);

        return $this->render('Task\index.html.twig', ['openTasks'=>$openTasks,
                                                             'inProgressTasks' => $inProgressTasks,
                                                            'finishedTasks' => $finishedTasks]);

    }

    /**
     * @param Request $request
     * @Route("/create", name="create")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            if($task->getTitle() == null || $task->getStatus() == null){
                return $this->redirectToRoute('create');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            return $this->redirectToRoute('index');
        }

        return $this->render("Task\create.html.twig", ['form'=>$form->createView()]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, Request $request)
    {
       $taskRepo = $this->getDoctrine()->getRepository(Task::class);
       $task = $taskRepo->find($id);

       if ($task == null) {
           return $this->redirectToRoute('index');
       }

       $form = $this->createForm(TaskType::class, $task);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {

           $em = $this->getDoctrine()->getManager();
           $em->merge($task);
           $em->flush();

            return $this->redirectToRoute('index');
       }



        return $this->render('Task\edit.html.twig', ['form'=>$form->createView(), 'task'=>$task]);

    }
}
