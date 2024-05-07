<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitLivreController extends AbstractController
{

    #les routes du CRUD produitLivre#

    #[Route('afficher/produit/livre', name: 'afficherLivreName')]
    public function afficherLivre(): Response
    {
        return $this->render('produit_livre/afficherLivre.html.twig',[
            
        ]);
    }

    #[Route('/ajouter/produit/livre', name:'ajouterLivreName')]
    public function ajouterLivre(): Response 
    {
        return $this->render('produit_livre/ajouterLivre.html.twig',[

        ]);
    }

    #[Route('/modifier/produit/livre', name:'modifierLivreName')]
    public function modifierLivre(): Response
    {
        return $this->render('produit_livre/modifierLivre.html.twig', [

        ]);
    }

    #[Route('/supprimer/produit/livre',name:'supprimerLivreName')]
    public function supprimerLivre():Response
    {
        return $this->render('produit_livre/supprimerLivre.html.twig',[

        ]);
    }



}
