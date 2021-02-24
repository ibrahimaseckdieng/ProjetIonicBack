<?php

namespace App\DataFixtures;

use App\Entity\Profils;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    // ...
    public function load(ObjectManager $manager)
    {
        $user = new Profils();
        $user->setLibelle('Admin_Systeme');
        $manager->persist($user);
        $manager->flush();

        $user = new Profils();
        $user->setLibelle('Caissier');
        $manager->persist($user);
        $manager->flush();

        $user = new Profils();
        $user->setLibelle('Admin_Agence');
        $manager->persist($user);
        $manager->flush();
    }
}
