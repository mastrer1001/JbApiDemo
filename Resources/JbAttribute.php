<?php


class JbAttribute extends Plugin
{
    public function install(InstallContext $context)
    {
        $service = $this->container->get('shopware_attribute.crud_service');
        $service->update('s_order_attributes', 'jb_ExampleAttribute', 'string', [
            'label' => 'Example',
            'displayInBackend' => true
        ]);
        //add attribute 'Example' to order details
    }
}