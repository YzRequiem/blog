<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->passwordHasher = $userPasswordHasherInterface;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user ->setEmail("toto@toto.fr");
        $user ->setPsedo("toto");
        $hash = $this->passwordHasher->hashPassword($user,"toto");
        $user->setPassword($hash);
        $manager->persist($user);
        
        $cat = new Categorie();
        $cat -> setNom("Nouvelles technologies");
        $manager->persist($cat);

        $article = new Article();
        $article -> setTitre("les ordinateurs");
        $article -> setContenu("Ceci est le contenu de l'article en texte au moins Ceci est le contenu de l'article en texte au moins Ceci est le contenu de l'article en texte au moins ");
        $article -> setDatePublication(new \DateTime());
        $article -> setImageSrc("toto.jpg");
        $article -> setNombreVues(0);
        $article -> setCategorie($cat);
        $article -> setUser($user);

        $manager-> persist($article);

        $commentaire = new Commentaire();
        $commentaire -> setDate(new \DateTime());
        $commentaire -> setContenu("mauvais article c'est pas bien");
        $commentaire -> setPublie(false);
        $commentaire -> setArticle($article);
        $commentaire -> setUser($user);

        $manager->persist($commentaire);

        $commentaire2 = new Commentaire();
        $commentaire2 -> setDate(new \DateTime());
        $commentaire2 -> setContenu("Trop bien merci beaucoup");
        $commentaire2 -> setPublie(false);
        $commentaire2 -> setArticle($article);
        $commentaire2 -> setUser($user);

        $manager->persist($commentaire2);
        
            // for($j=1; $j<=5; $j++){
            // $commentaireX5 = new Commentaire();
            // $commentaireX5 -> setDate(new \DateTime());
            // $commentaireX5 -> setContenu("Trop bien merci beaucou");
            // $commentaireX5 -> setPublie(false);
            // $commentaireX5 -> setArticle($article);
            // $manager->persist($commentaireX5);
        
            // }

        $manager->flush();


    }
}
