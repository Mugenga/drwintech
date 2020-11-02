<?php

class CT_CtNewsletter_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_newsletter';
    protected $title = 'Newsletter';
    protected $icon = 'eicon-envelope';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Color Settings","tab":"style","controls":[{"name":"button_label","label":"Button Text","type":"text","label_block":true},{"name":"email_label","label":"Email Placeholder","type":"text","label_block":true},{"name":"style","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2","style3":"Style 3","style4":"Style 4"},"default":"style1"},{"name":"input_color","label":"Input Color","type":"color","condition":{"style":"style1"},"selectors":{"{{WRAPPER}} .ct-newsletter1.style1 .tnp-field-email .tnp-email":"color: {{VALUE}};"}},{"name":"input_bg_color","label":"Input Background Color","type":"color","condition":{"style":"style1"},"selectors":{"{{WRAPPER}} .ct-newsletter1.style1 .tnp-field-email .tnp-email":"background-color: {{VALUE}};"}},{"name":"button_color1","label":"Button Color 1","type":"color","condition":{"style":["style1","style3"]}},{"name":"button_color2","label":"Button Color 2","type":"color","condition":{"style":["style1","style3"]}},{"name":"color_gradient_type","label":"Gradient Type","type":"select","options":{"horizontal":"Horizontal","vertical":"Vertical"},"default":"horizontal","condition":{"style":["style1","style3"]}}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}