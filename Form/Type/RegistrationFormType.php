<?php

namespace Vetalt\ReferralBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('firstname');
        $builder->add('lastname');
    }

    public function getName() {
        return 'vetalt_referral_registration';
    }

}
