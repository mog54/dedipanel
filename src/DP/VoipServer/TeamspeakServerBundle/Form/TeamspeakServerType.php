<?php

namespace DP\VoipServer\TeamspeakServerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TeamspeakServerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('machine', 'entity', array(
                'label' => 'game.selectMachine', 'class' => 'DPMachineBundle:Machine'
            ))
            ->add('query_port', 'number', array(
                'label' => 'voip.query_port',
            ))
        ;
    }

    public function getName()
    {
        return 'dedipanel_teamspeak';
    }
}
