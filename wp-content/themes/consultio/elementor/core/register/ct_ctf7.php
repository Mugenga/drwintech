<?php

// Register Contact Form 7 Widget
if(class_exists('WPCF7')) {
    $cf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');

    $contact_forms = array();
    if ($cf7) {
        foreach ($cf7 as $cform) {
            $contact_forms[$cform->ID] = $cform->post_title;
        }
    } else {
        $contact_forms[esc_html__('No contact forms found', 'consultio')] = 0;
    }


    ct_add_custom_widget(
        array(
            'name' => 'ct_ctf7',
            'title' => esc_html__('Contact Form 7', 'consultio'),
            'icon' => 'eicon-form-horizontal',
            'categories' => array(Case_Theme_Core::CT_CATEGORY_NAME),
            'scripts' => array(),
            'params' => array(
                'sections' => array(
                    array(
                        'name' => 'source_section',
                        'label' => esc_html__('Source Settings', 'consultio'),
                        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                        'controls' => array(
                            array(
                                'name' => 'ctf7_id',
                                'label' => esc_html__('Select Form', 'consultio'),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'options' => $contact_forms,
                            ),
                            array(
                                'name' => 'style_l1',
                                'label' => esc_html__('Style', 'consultio' ),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'options' => [
                                    'style1' => 'Style 1',
                                    'style2' => 'Style 2',
                                    'style3' => 'Style 3',
                                    'style4' => 'Style 4',
                                    'style5' => 'Style 5',
                                    'style6' => 'Style 6',
                                    'style7' => 'Style 7',
                                    'style8' => 'Style 8',
                                    'style9' => 'Style 9',
                                    'style10' => 'Style 10',
                                ],
                                'default' => 'style1',
                            ),
                            array(
                                'name' => 'title',
                                'label' => esc_html__('Title', 'consultio' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'label_block' => true,
                                'condition' => [
                                    'style_l1' => ['style7', 'style9'],
                                ],
                            ),
                            array(
                                'name' => 'description',
                                'label' => esc_html__('Description', 'consultio' ),
                                'type' => \Elementor\Controls_Manager::TEXTAREA,
                                'rows' => 10,
                                'show_label' => false,
                                'condition' => [
                                    'style_l1' => ['style7', 'style9'],
                                ],
                            ),
                            array(
                                'name' => 'ct_animate',
                                'label' => esc_html__('Case Animate', 'consultio' ),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'options' => consultio_animate(),
                                'default' => '',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        get_template_directory() . '/elementor/core/widgets/'
    );
}