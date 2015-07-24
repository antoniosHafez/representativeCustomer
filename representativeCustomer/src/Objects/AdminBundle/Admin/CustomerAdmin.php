<?php

namespace Objects\AdminBundle\Admin;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\Admin;

class CustomerAdmin extends Admin {

    /**
     * this variable holds the route name prefix for this actions
     * @var string
     */
    protected $baseRouteName = 'customer_admin';

    /**
     * this variable holds the url route prefix for this actions
     * @var string
     */
    protected $baseRoutePattern = 'customer';

    public function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('name')
                ->add('nationalID')
                ->add('birthdate')
                ->add('createdAt')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    public function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('name')
                ->add('nationalID')
                ->add('createdAt')
                ->add('birthdate')
        ;
    }

    public function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')
                ->add('nationalID')
                ->add('createdAt', null, array('field_type' => 'date'))
        ;
    }

    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->with('Required fields')
                    ->add('name')
                    ->add('nationalID')
                    ->add('birthdate', 'date')
                    ->add('representative', 'sonata_type_model_list')
                ->end()
        ;
    }

    public function configureRoutes(RouteCollection $collection) {
        //$collection->remove('create')->remove('delete');
    }

}

?>
