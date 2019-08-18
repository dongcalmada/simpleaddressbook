<?php
// mapping of contacts table to the application

$main_table_definition = array(
    'id' => array(
        'form_label'    => 'ID',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '100',
        'table_head'    => 'ID',
        'table_align'   => 'left',
        'required'      => 1
        ),
    'firstname' => array(
        'form_label'    => 'Firstname',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '500',
        'table_head'    => 'Firstname',
        'table_align'   => 'left',
        'required'      => 1
        ),
    'lastname' => array(
        'form_label'    => 'Lastname',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '500',
        'table_head'    => 'Lastname',
        'table_align'   => 'left',
        'required'      => 1
        ),
    'address' => array(
        'form_label'    => 'Address',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '700',
        'table_head'    => 'Address',
        'table_align'   => 'left',
        'required'      => 1
        ),
    'city' => array(
        'form_label'    => 'City',
        'form_type'     => 'select',
        'select_source' => array(
                            'Makati City',
                            'Malabon City','Manila','Marikina City',
                            'Pasay City','Marikina City','Quezon City',
                            'Pasig City'),
        'form_col_size' => '200',
        'table_head'    => 'City',
        'table_align'   => 'left',
        'required'      => 1
        ),
    'email' => array(
        'form_label'    => 'Email Address',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '200',
        'table_head'    => 'Email Address',
        'table_align'   => 'left',
        'required'      => 0
        ),
    'mobile' => array(
        'form_label'    => 'Mobile Number',
        'form_type'     => 'input_text',
        'select_source' => array(),
        'form_col_size' => '200',
        'table_head'    => 'Mobile Number',
        'table_align'   => 'left',
        'required'      => 0
        ),
    'birthday' => array(
        'form_label'    => 'Birthdate',
        'form_type'     => 'date',
        'select_source' => array(),
        'form_col_size' => '300',
        'table_head'    => null,
        'table_align'   => null,
        'required'      => 0
        ),
    'notes' => array(
        'form_label'    => 'Notes',
        'form_type'     => 'textarea',
        'select_source' => array(),
        'form_col_size' => '900',
        'table_head'    => null,
        'table_align'   => null,
        'required'      => 0
        )
);