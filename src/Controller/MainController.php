<?php

namespace App\Controller;

use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        
        return $this->render('main/index.html.twig', [
            "articles" => $articles
        ]);
    }

    #[Route('/articles/{id}', name: 'app_articles')]
    public function getArticlesById( $id, ArticleRepository $articleRepository, Request $request, UserRepository $userRepository, ManagerRegistry $managerRegistry)
    {   
        $articles = $articleRepository->find($id);
        
        $commentaireForm = $this->createForm(CommentaireType::class);

        $commentaireForm ->handleRequest($request);
        if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
            $commentaire = $commentaireForm->getData();
            $commentaire->setDate(new \DateTime());
            $commentaire->setArticle($articles);
            $commentaire->setPublie(false);
            $user = $userRepository-> find(3) ;
            $commentaire->setUser($user);
            $entityManager = $managerRegistry->getManager();
            $entityManager ->persist($commentaire);
            $entityManager ->flush();

            // dd($commentaire);

            $this->redirectToRoute('/main');
        }

        return $this->render('main/articles.html.twig', [
            "articles" => $articles,
            "commForm" => $commentaireForm->createView()
        ]);
    }
}
