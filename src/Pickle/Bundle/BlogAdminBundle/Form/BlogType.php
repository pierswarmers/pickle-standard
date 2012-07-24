<?php

namespace Pickle\Bundle\BlogAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Pickle\Bundle\BlogBundle\Entity\Blog;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('excerpt')
            ->add('status')
            ->add('status', 'choice',
                array(
                    'label' => 'Published status set to',
                    'choices' => array(
                        Blog::STATUS_PUBLISHED => Blog::STATUS_PUBLISHED,
                        Blog::STATUS_REVIEW    => Blog::STATUS_REVIEW,
                        Blog::STATUS_DRAFT     => Blog::STATUS_DRAFT
                    )
                )
            )
            ->add('author')
            ->add('commentStatus', 'choice',
                array(
                    'label' => 'Activate comments for',
                    'choices' => array(
                        Blog::COMMENT_STATUS_ALL   => Blog::COMMENT_STATUS_ALL,
                        Blog::COMMENT_STATUS_USERS => Blog::COMMENT_STATUS_USERS,
                        Blog::COMMENT_STATUS_NONE  => Blog::COMMENT_STATUS_NONE
                    )
                )
            )
            ->add('createdAt', 'datetime', array('label' => 'Created at'))

//            ->add('guid')
//            ->add('updatedAt')
//            ->add('contentFilter')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pickle\Bundle\BlogBundle\Entity\Blog'
        ));
    }

    public function getName()
    {
        return 'pickle_bundle_blogbundle_blogtype';
    }
}
