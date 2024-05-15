<?php

namespace App\Controller;


use App\Entity\Livre;
use App\Form\ArticleType;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitLivreController extends AbstractController
{

    #les routes du CRUD produitLivre#

    /**
     * cette route va récupérer tous les livres enbdd autrement dit on va faire une requ^te SQl de sélection.CHAQUE route du CRUD emmène à une requ^te, la route afficher -> select, la route ajouter ->insert into , la rout modifier ->update et le route supprimer->delete
     *  
     * le contenu de le route afficher
     * 
     * 
     * */

    #[Route('/produit/livre')]
    // ROUTE AFFICHER
    #[Route('/afficher', name: 'afficherLivreName')]

    
    public function afficherLivre(LivreRepository $livreRepository): Response
    {   //requête SELECT * FROM livre;
        $livres = $livreRepository->findAll();
        //dd($livres);
        return $this->render('produit_livre/afficherLivre.html.twig',[
            'livres'=> $livres
            
        ]);
    }


    // ROUTE AJOUTER
    #[Route('/ajouter', name:'ajouterLivreName')]

    public function ajouterLivre(Request $request, EntityManagerInterface $em): Response 
    {
        $livre = new Livre();
        //dd($livre);

        $form = $this->createForm(ArticleType::class, $livre);

        //Traietement du formulaire
        $form->handleRequest($request);

        //Insertion d'une contrainte
        if($form->isSubmitted() && $form->isValid()){

            $em->persist($livre); // Insertion de quel objet
            $em->flush(); // éxécution

            return $this->redirectToRoute('afficherLivreName');
        }

        return $this->render('produit_livre/ajouterLivre.html.twig',[
            'formLivre' => $form->createView() // Création du code HTML du formulaire
            
        ]);
    }
        

     //COLONNE FICHE DU TABLEAU GESTION DES PRODUITS
    #[Route('/fiche/{id}', name:'ficheName')]

    public function ficheLivre(Livre $livre): Response
    {
        return $this->render('produit_livre/ficheLivre.html.twig',[
            'livre' => $livre
        ]);
    }


    // ROUTE MODIFIER
    #[Route('/modifier/{id}', name:'modifierLivreName')]

    public function modifierLivre(Livre $livre, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleType::class, $livre);

        $form->handleRequest($request);

        if($form->isSubmitted() AND $form->isValid()){
            $em->flush();
            return $this->redirectToRoute('afficherLivreName');
        }
        return $this->render('produit_livre/modifierLivre.html.twig', [
            'livre'=> $livre,
            'formLivre' => $form->createView()
        ]);
    }

      // ROUTE SUPPRIMER
    #[Route('/{id}',name:'supprimerLivreName')]

    public function supprimerLivre(Livre $livre, EntityManagerInterface $em):Response
    {
        $em->remove($livre);
        $em->flush();
        return $this->redirectToRoute('afficherLivreName');
    }



}
