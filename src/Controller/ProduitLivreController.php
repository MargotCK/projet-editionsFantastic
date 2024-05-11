<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\ArticleType;
use App\Repository\LivreRepository;
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
    #[Route('afficher/produit/livre', name: 'afficherLivreName')]

    
    public function afficherLivre(LivreRepository $livreRepository): Response
    {   //requête SELECT * FROM livre;
        $livres = $livreRepository->findAll();
        //dd($livres);
        return $this->render('produit_livre/afficherLivre.html.twig',[
            'livres'=> $livres
            
        ]);
    }

    #[Route('/ajouter/produit/livre', name:'ajouterLivreName')]

    public function ajouterLivre(): Response 
    {
        $livre= new Livre();
        //dd($livre);

        $form = $this->createForm(ArticleType::class, $livre);
        //dd($form);

        return $this->render('produit_livre/ajouterLivre.html.twig',[
            'formLivre' => $form->createView()
            
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
