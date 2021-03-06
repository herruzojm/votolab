<?php
namespace Votolab\VotolabBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CandidateFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                'text',
                array(
                    'required' => true,
                    'label' => 'nombre',
                    'trim' => true
                )
            )
            ->add(
                'biography',
                'textarea',
                array(
                    'required' => true,
                    'label' => 'bio',
                    'trim' => true
                )
            )
            ->add(
                'video',
                'text',
                array(
                    'required' => false,
                    'label' => 'video',
                    'trim' => true
                )
            )
            ->add(
                'gender',
                'choice',
                array(
                    'choices' => array('1' => 'Hombre', '0' => 'Mujer'),
                    'label' => 'sexo',
                    'required' => true
                )
            );
    }

    public function getName()
    {
        return 'candidate';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Votolab\VotolabBundle\Form\Model\CandidateFormClass',
            )
        );
    }
}
