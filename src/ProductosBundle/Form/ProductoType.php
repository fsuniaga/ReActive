<?php

namespace ProductosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class ProductoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('tipo','choice', array('choices' => array('PERECEDERO' => 'Perecedero', 'NOPERECEDERO' => 'No Perecedero'), 'placeholder' => 'Seleccione un tipo'))
            ->add('codigo', 'choice', array('choices' => array('CUMPLE' => 'Cumple', 'NOCUMPLE' => 'No Cumple', 'NOAPLICA' => 'No Aplica'), 'placeholder' => 'Seleccione una opcion'))
            ->add('fechavencimiento')
            ->add('observacioncodigo')
            ->add('cantidad')
            ->add('save', 'submit', array('label' => 'Crear Producto'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProductosBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'producto';
    }
}
