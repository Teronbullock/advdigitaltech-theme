<?php
// register block styles

add_action('init', 'adt_register_block_styles');
function adt_register_block_styles() {
  $block_styles = [
    'core/group' => [
      [
        'name' => 'adt-container',
        'label' => 'ADT Container',
        ''
      ]
    ]
  ];

  // loop through each block style
  foreach( $block_styles as $block_name => $styles ) {
    // loop through each style
    foreach( $styles as $style ) {
      // register each style
      register_block_style(
        $block_name,
        [
          'label' => __( $style['label'], ADT_TEXT_DOMAIN ),
          'name' => $style['name'],
        ]
      );
    }
  }

}