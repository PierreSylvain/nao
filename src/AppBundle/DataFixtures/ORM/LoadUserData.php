<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Sylvain
 * Date: 30-07-17
 * Time: 22:04
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;


class LoadUserData implements FixtureInterface, ContainerAwareInterface
{

    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        // bin/console doctrine:fixtures:load
        // Add admin
        $user = new User();
        $user->setName('Bobby');
        $user->setEmail('admin@test.com');
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
        $user->setRole('ROLE_ADMIN');
        $user->setInactive(false);
        $user->setNewsletter(false);$user->setImagePath('bobby.jpg');
        $manager->persist($user);
        $manager->flush();

        // Add editor
        $user = new User();
        $user->setName('Charlotte');
        $user->setEmail('natur@test.com');
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
        $user->setRole('ROLE_NATURALIST');
        $user->setInactive(false);
        $user->setNewsletter(false);$user->setImagePath('charlotte.jpg');
        $user->setNewsletter(false);

        $manager->persist($user);
        $manager->flush();

        // Add contributor
        $user = new User();
        $user->setName('Johnny');
        $user->setEmail('obs@test.com');
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
        $user->setRole('ROLE_OBSERVER');
        $user->setInactive(false);
        $user->setNewsletter(false);$user->setImagePath('johnny.jpg');
        $user->setNewsletter(false);


        $manager->persist($user);
        $manager->flush();

        for($i = 0 ; $i < 20 ; $i++ ) {
            // Add admin
            $user = new User();
            $user->setName('Administrateur_'.$i);
            $user->setEmail('admin'.$i.'@test.com');
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
            $user->setRole('ROLE_ADMIN');
            $user->setInactive(true);
            $user->setNewsletter(false);
            $user->setNewsletter(false);$user->setImagePath('avatar-default.png');
            $manager->persist($user);
            $manager->flush();

            // Add editor
            $user = new User();
            $user->setName('Naturaliste_'.$i);
            $user->setEmail('natur'.$i.'@test.com');
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
            $user->setRole('ROLE_NATURALIST');
            $user->setNewsletter(false);$user->setImagePath('avatar-default.png');
            $user->setInactive(true);
            $user->setNewsletter(false);

            $manager->persist($user);
            $manager->flush();

            // Add contributor
            $user = new User();
            $user->setName('Observateur_'.$i);
            $user->setEmail('obs'.$i.'@test.com');
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $user->setPassword($encoder->encodePassword('test', $user->getSalt()));
            $user->setRole('ROLE_OBSERVER');
            $user->setInactive(true);
            $user->setNewsletter(false);$user->setImagePath('avatar-default.png');
            $user->setNewsletter(false);


            $manager->persist($user);
            $manager->flush();
        }
    }
}