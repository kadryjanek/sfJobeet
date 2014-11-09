<?php

namespace Bootcamp\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Bootcamp\JobeetBundle\Entity\Job;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categories')
            ->add('companyName')
            ->add('type', 'choice', [
                'choices'   => [
                    Job::TYPE_FREELANCE => "Freelancer",
                    Job::TYPE_FULL_TIME => "Etat"
                ]
            ])
            ->add('imageName', 'file')
            ->add('url', 'url')
            ->add('position')
            ->add('location')
            ->add('description', 'textarea')
            ->add('howToApply', 'choice', [
                'choices'   => [
                    Job::HOW_TO_APPLY_BY_EMAIL  => "Poprzez e-mail",
                    Job::HOW_TO_APPLY_BY_SMS    => "Poprzez SMS",
                    Job::HOW_TO_APPLY_BY_POST   => "Poczta"
                ]
            ])
            ->add('email', 'email')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bootcamp\JobeetBundle\Entity\Job'
        ));
    }

    public function getName()
    {
        return 'bootcamp_jobeetbundle_job';
    }
}
