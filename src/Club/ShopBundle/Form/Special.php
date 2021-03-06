<?php

namespace Club\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Special extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('product');
    $builder->add('price');
    $builder->add('start_date', 'jquery_date', array(
        'widget' => 'single_text'
    ));
    $builder->add('expire_date', 'jquery_date', array(
        'widget' => 'single_text'
    ));
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Club\ShopBundle\Entity\Special'
    ));
  }

  public function getName()
  {
    return 'special';
  }
}
