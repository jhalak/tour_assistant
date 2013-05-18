<?php
/**
 * Application level View Helper
 *
 * This file is application-wide html helper file. You can put all
 *
 */
App::uses('HtmlHelper', 'View/Helper');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class TaHtmlHelper extends HtmlHelper {
  public function tourLink($tid, $title, $url = null, $options = array(), $confirmMessage = false) {
    $url = $this->getTourUrl($tid, $url);
    return $this->link($title, $url, $options, $confirmMessage);
  }
  
  public function getTourUrl($tid, $url) {
    return '/tours/view/' . $tid . '/' . Router::url($url);
  }
  
  public function getAddLink($tid, $title, $url) {
    return $this->themeAddLink($title, $url, $tid);
  }
  
  public function themeAddLink($title, $url, $tid = NULL) {
    $link = '<div class="pull-right">';
    if (empty($tid)) {
      $link .= $this->link('<i class="icon-plus icon-black"></i> '.$title, $url, array('class' => 'btn btn-success', 'escape' => false));
    }else {
      $link .=   $this->tourLink($tid, '<i class="icon-plus icon-black"></i> '.$title, $url, array('class' => 'btn btn-success', 'escape' => false));
    }
    $link .= '</div><br /><br />';
    return $link;
  }

  public function themeLabelValue($label, $value) {
    return '<span class="label label-inverse">' . __($label) . '</span> : ' .
      '<span class="badge badge-info">' . $value . '</span>';
  }

  public function themeBalance($value) {
    if ($value < 0) {
      return '<span class="badge badge-important">-</span> ' .
        '<span class="badge badge-info">' . (number_format(abs($value), 2)) . '</span>';
    }
    return '<span class="badge badge-success">+</span> ' .
        '<span class="badge badge-info">' . (number_format($value, 2)) . '</span>';
  }
}
