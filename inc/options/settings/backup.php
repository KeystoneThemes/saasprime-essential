<?php 

   // backup option
   CSF::createSection( 'saasprime_settings', array(
           
    'title'  => esc_html__( 'Backup Options', 'saasprime-essential' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Backup Options','saasprime-essential'),
          ),
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Your All Options', 'saasprime-essential' ),
            'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'saasprime-essential' ),
        ),
    ),
) );