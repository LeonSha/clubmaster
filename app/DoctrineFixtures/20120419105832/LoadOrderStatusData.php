<?php

namespace Club\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadOrderStatusData implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $status = new \Club\ShopBundle\Entity\OrderStatus();
    $status->setStatusName('Pending');
    $status->setPaid(0);
    $status->setDelivered(0);
    $status->setCancelled(0);
    $status->setPriority(1);
    $manager->persist($status);

    $status = new \Club\ShopBundle\Entity\OrderStatus();
    $status->setStatusName('Processing');
    $status->setPaid(0);
    $status->setDelivered(0);
    $status->setCancelled(0);
    $status->setPriority(2);
    $manager->persist($status);

    $status = new \Club\ShopBundle\Entity\OrderStatus();
    $status->setStatusName('Paid');
    $status->setPaid(1);
    $status->setDelivered(0);
    $status->setCancelled(0);
    $status->setPriority(3);
    $manager->persist($status);

    $status = new \Club\ShopBundle\Entity\OrderStatus();
    $status->setStatusName('Delivered');
    $status->setPaid(0);
    $status->setDelivered(1);
    $status->setCancelled(0);
    $status->setPriority(4);
    $manager->persist($status);

    $status = new \Club\ShopBundle\Entity\OrderStatus();
    $status->setStatusName('Cancelled');
    $status->setPaid(0);
    $status->setDelivered(0);
    $status->setCancelled(1);
    $status->setPriority(5);
    $manager->persist($status);

    $manager->flush();
  }
}