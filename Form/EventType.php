<?php

namespace IDCI\Bundle\SimpleScheduleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use IDCI\Bundle\SimpleScheduleBundle\Entity\Status;

class EventType extends LocationAwareCalendarEntityType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('isTransparent')
            ->add('endAt')
        ;
    }

    public function getEntityDiscr()
    {
        return Status::EVENT;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IDCI\Bundle\SimpleScheduleBundle\Entity\Event'
        ));
    }

    public function getName()
    {
        return 'idci_simpleschedule_event_type';
    }
}
