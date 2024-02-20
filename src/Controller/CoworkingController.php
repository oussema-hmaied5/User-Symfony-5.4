<?php

namespace App\Controller;

use App\Entity\Coworking;
use App\Form\CoworkingType;
use App\Repository\CoworkingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/coworking')]
class CoworkingController extends AbstractController
{
    #[Route('/', name: 'app_coworking_index', methods: ['GET'])]
    public function index(CoworkingRepository $coworkingRepository): Response
    {
        return $this->render('coworking/index.html.twig', [
            'coworkings' => $coworkingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_coworking_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coworking = new Coworking();
        $form = $this->createForm(CoworkingType::class, $coworking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coworking);
            $entityManager->flush();

            return $this->redirectToRoute('app_coworking_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('coworking/new.html.twig', [
            'coworking' => $coworking,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coworking_show', methods: ['GET'])]
    public function show(Coworking $coworking): Response
    {
        return $this->render('coworking/show.html.twig', [
            'coworking' => $coworking,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coworking_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coworking $coworking, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoworkingType::class, $coworking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_coworking_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('coworking/edit.html.twig', [
            'coworking' => $coworking,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_coworking_delete', methods: ['POST'])]
    public function delete(Request $request, Coworking $coworking, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coworking->getId(), $request->request->get('_token'))) {
            $entityManager->remove($coworking);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coworking_index', [], Response::HTTP_SEE_OTHER);
    }
}
