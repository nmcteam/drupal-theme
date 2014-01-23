<?php
/************************************************************
 * Register theme hooks
 ************************************************************/

/**
 * Example hook declaration. This instructs Drupal to look
 * for the example hook function or theme when rendering
 * site content via its theme layer.
 */
function CUSTOM_theme()
{
    return array(
        'example' => array(
            'variables' => array(
                array(
                    'foo' => 'bar'
                )
            )
        )
    );
}

/************************************************************
 * Implement theme hooks
 ************************************************************/

/**
 * Example hook implementation
 *
 *     <?php
 *     echo theme('example', array('foo' => '123'));
 *
 * This may also be a template `example.tpl.php`. Use template
 * files if the generated HTML markup is non-trivial.
 */
function CUSTOM_example(&$variables)
{
    return '<div>' . $variables['foo'] . '</div>';
}
