<?php

/**
 * @file
 * Definition of \Drupal\ckcodesnippet\Plugin\CKEditorPlugin\CodeSnippet.
 */

namespace Drupal\ckcodesnippet\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CodeSnippet" plugin.
 *
 * @CKEditorPlugin(
 *   id = "codesnippet",
 *   label = @Translation("CodeSnippet")
 * )
 */
class CodeSnippet extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return array(
      'ckcodesnippet/ckeditor_config',
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'ckcodesnippet') . '/js/plugins/codesnippet/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  function getButtons() {
    return array(
      'CodeSnippet' => array(
        'label' => t('CodeSnippet'),
        'image' => drupal_get_path('module', 'ckcodesnippet') . '/js/plugins/codesnippet/icons/codesnippet.png',
      )
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}
