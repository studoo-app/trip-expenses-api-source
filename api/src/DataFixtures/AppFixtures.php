<?php

namespace App\DataFixtures;

use App\Entity\Trip;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private readonly UserPasswordHasherInterface $hasher,
    )
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $this->loadUsers($manager);
        $this->loadTrips($manager,$faker);
    }

    private function loadUsers(ObjectManager $manager): void
    {
        $users = [
            ["email" => "michel@mail.dev","password"=>"password"],
            ["email" => "lea@mail.dev","password"=>"password"]
        ];

        foreach ($users as $user) {
            $u = new User();
            $u->setEmail($user['email']);
            $u->setPassword($this->hasher->hashPassword($u, $user['password']));
            $manager->persist($u);
        }

        $manager->flush();
    }

    private function loadTrips(ObjectManager $manager,Generator $faker): void
    {
        $users = $manager->getRepository(User::class)->findAll();

        for($i=0;$i<5;$i++){
            $trip = new Trip();
            $trip->setDepartureDate($faker->dateTimeBetween('-1 month'));
            $trip->setDestination($faker->city);
            $trip->setUser($faker->randomElement($users));
            $manager->persist($trip);
        }

        $manager->flush();
    }
}
