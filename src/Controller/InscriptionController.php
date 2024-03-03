<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/inscription')]
class InscriptionController extends AbstractController
{

    #[Route('/', name: 'app_user_inscription', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,
                        UserPasswordHasherInterface $userPasswordHasher, MailerService $mailerService): Response
    {
        if($this->getUser()){
            return  $this->redirectToRoute('app_home');
        }

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_ETUDIANT']);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user, $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            $to = $user->getEmail();
            $subject = 'Votre inscription ..';
            $text = 'votre texte ici ..';

            $mailerService->sendEmail($to, $subject, $text);

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/inscription.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }



}
