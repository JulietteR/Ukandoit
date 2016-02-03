<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\ChallengeType;

class NewChallengeType extends ChallengeType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->remove('creationDate', 'datetime')
            ->remove('creator')
            ->remove('challengers')
            ->add('activity', 'entity', array(
                'class' => 'AppBundle:Activity',
                'property' => 'name'));

    }

}