<?php
$default_settings = [
    'list' => '',
    'style' => 'style1',
    'column' => '',
    'ct_animate' => '',
];
$settings = array_merge($default_settings, $settings);
extract($settings);
?>
<?php if(isset($list) && !empty($list) && count($list)): ?>
    <div class="ct-list <?php echo esc_attr($style.' '.$column); ?>">
        <?php
        	foreach ($list as $key => $ct_list): ?>
            <div class="ct-list-item <?php echo esc_attr($ct_animate); ?>">
            	<div class="ct-list-icon"><i class="fac fac-check-circle"></i></div>
            	<div class="ct-list-meta">
	            	<div class="ct-list-desc">
	            		<?php echo ct_print_html($ct_list['content'])?>
	            	</div>
	            </div>
           </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
