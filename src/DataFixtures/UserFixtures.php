<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker\Factory;
use Faker\Generator;

class UserFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    private Generator $faker;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
        $this->faker = Factory::create("en_EN");
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('rami.aouinti@gmail.com');
        $user->setPassword($this->encoder->encodePassword($user, 'password'));
        $manager->persist($user);

        for( $i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email);
            $user->setRoles(['USER']);
            $password = $this->encoder->encodePassword($user, 'password');
            $user->setPassword($password);

            $manager->persist($user);
        }
        $manager->flush();
    }
}
