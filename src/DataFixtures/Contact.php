<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $contacts = [
            new \App\Entity\Contact('Galvani', 'Guillaume', 'guillaume.galvani@epsi.fr', false),
            new \App\Entity\Contact('Norris', 'Chuck', 'chucknorris@gmail.com', true),
        ];

        foreach ($contacts as $contact) {
            $manager->persist($contact);
        }
        $manager->flush();
    }
}