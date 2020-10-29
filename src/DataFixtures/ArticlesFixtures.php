<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Faker\Factory::create('fr_FR');

        // Création de 3 Catégories
        for ($i=1; $i <= 3; $i++) { 
            $category = new Category();
            $category->setTitle($faker->sentence())
                     ->setDescription($faker->paragraph());

            $manager->persist($category);
            
            // Création de 5 à 8 Articles
            for ($j=1; $j <= mt_rand(5,8); $j++) { 
                $article = new Article();

                $content = '<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';

                $article->setTitle($faker->sentence())
                        ->setContent($content)
                        ->setImage($faker->imageUrl($width = 500, $height = 400))
                        ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                        ->setCategory($category);
    
                $manager->persist($article);

                // On ajoute entre 4 et 10 commentaires par articles
                for ($k=1; $k <= mt_rand(4,10) ; $k++) { 
                    $comment = new Comment;

                    $content = '<p>'.join($faker->paragraphs(5), '</p><p>').'</p>';

                    $now = new DateTime();
                    $interval = $now->diff($article->getCreatedAt());
                    $days = $interval->days;
                    $min='-'.$days.' days';

                    $comment->setAuthor($faker->name())
                            ->setContent($content)
                            ->setCreatedAt($faker->dateTimeBetween($min))
                            ->setArticle($article);

                    $manager->persist($comment);
                }
            }
        }

        $manager->flush();
    }
}
