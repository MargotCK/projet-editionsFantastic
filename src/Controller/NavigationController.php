<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    #les routes des boutons connexion et inscriptions#
    #[Route('/connexion', name: 'connexionName')]
    public function connexion(): Response
    {
        return $this->render('navigation/connexion.html.twig', []);
    }

    #[Route('/inscription', name:'inscriptionName')]
    public function inscription(): Response
    {
        return $this->render('navigation/inscription.html.twig',[]);
    }

    #les routes de la barre des menus#
    #[Route('/', name: 'homeName')]
    public function index(): Response
    {
        return $this->render('navigation/index.html.twig', []);
    }

    #[Route('/allbooks', name:'allBooksName')]
    public function allBooks(): Response
    {
        return $this->render('navigation/allBooks.html.twig',[]);
    }

    #[Route('/world', name:'worldName')]
    public function world(): Response
    {
        return $this->render('navigation/world.html.twig', []);
    }

    #[Route('/artists', name:'artistsName')]
    public function artists(): Response
    {
        return $this->render('navigation/artists.html.twig',[]);
    }

    #[Route('/advices', name:'advicesName')]
    public function advices(): Response
    {
        return $this->render('navigation/advices.html.twig',[]);
    }

    #les routes du filtre de l'entité "livres"#
    #[Route('/age', name:'ageName')]
    public function age(): Response
    {
        return $this->render('navigation/age.html.twig',[]);
    }

    #[Route('/collection', name:'collectionName')]
    public function collection(): Response
    {
        return $this->render('navigation/collection.html.twig',[]);
    }

    #[Route('/theme', name:'themeName')]
    public function theme(): Response
    {
        return $this->render('navigation/theme.html.twig',[]);

    }
    #[Route('/genre', name:'genreName')]
    public function genre():Response
    {
        return $this->render('navigation/genre.html.twig',[]);
    }

    #[Route('/authors', name:'authorsName')]
    public function authors(): Response
    {
        return $this->render('navigation/authors.html.twig',[]);
    }

    #[Route('/illustrators', name:'illustratorsName')]
    public function illustrators(): Response
    {
        return $this->render('navigation/illustrators.html.twig',[]);
    }
        #les routes du footer#
    #[Route('/cvg',name:'cvgName')]
    public function cvg(): Response
    {
        return $this->render('footer/cvg.html.twig',[]);
    }

    #[Route('/mailTo',name:'mailToName')]
    public function mailTo (): Response
    {
        return $this->render('/navigation/mailTo.html.twig',[]);
    }

    #[Route('/mentionsLg',name:'mentionsLg')]
    public function mentionsLg(): Response
    {
    return $this->render('/navigation/mentionslg.html.twig',[]);
    }
}






