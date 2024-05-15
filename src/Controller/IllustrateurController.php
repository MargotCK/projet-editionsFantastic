<?php

namespace App\Controller;

use App\Entity\Illustrateur;
use App\Form\IllustrateurType;
use App\Repository\IllustrateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/illustrateur')]
class IllustrateurController extends AbstractController
{
    // LA ROUTE AFFICHER
    #[Route('/afficher', name: 'app_illustrateur_index', methods: ['GET'])]
    public function index(IllustrateurRepository $illustrateurRepository): Response
    {
        return $this->render('illustrateur/index.html.twig', [
            'illustrateurs' => $illustrateurRepository->findAll(),
        ]);
    }
    // LA ROUTE AJOUTER
    #[Route('/ajouter', name: 'app_illustrateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $illustrateur = new Illustrateur();
        $form = $this->createForm(IllustrateurType::class, $illustrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($illustrateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_illustrateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('illustrateur/new.html.twig', [
            'illustrateur' => $illustrateur,
            'form' => $form,
        ]);
    }
    // LA FICHE DU FORMULAIRE
    #[Route('/{id}', name: 'app_illustrateur_show', methods: ['GET'])]  
    public function show(Illustrateur $illustrateur): Response
    {
        return $this->render('illustrateur/show.html.twig', [
            'illustrateur' => $illustrateur,
        ]);
    }
    // LA ROUTE MODIFIER
    #[Route('/modifier/{id}', name: 'app_illustrateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Illustrateur $illustrateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(IllustrateurType::class, $illustrateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_illustrateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('illustrateur/edit.html.twig', [
            'illustrateur' => $illustrateur,
            'form' => $form,
        ]);
    }
     // LA ROUTE SUPPRIMER
    #[Route('/{id}', name: 'app_illustrateur_delete', methods: ['POST'])]
    public function delete(Request $request, Illustrateur $illustrateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$illustrateur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($illustrateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_illustrateur_index', [], Response::HTTP_SEE_OTHER);
    }
}
