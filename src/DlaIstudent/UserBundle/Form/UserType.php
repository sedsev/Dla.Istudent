<?php

namespace DlaIstudent\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('phoneNumber', 'text')
            ->add('email','text')
            ->add('dateOfBirth', 'date')
            ->add('password', 'password')
            ->add('verifyPassword', 'password')
            ->add('sex', 'text')
            ->add('adress', 'text')
            ->add('placeOfBorn', 'text')
            ->add('image', new ImageType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DlaIstudent\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dlaistudent_userbundle_user';
    }
}
