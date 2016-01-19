<?php

/**
 * @file template.php
 */

/* disable advanced search */
function engineering_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_form' && arg(0) == 'search') {
    $form['advanced']['#access'] = FALSE;
  }
}