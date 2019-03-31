<?php

namespace Drupal\key_node\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Returns JSON responses for Page Node with specified API-Key.
 */
class KeyNodeController extends ControllerBase {

  /**
   * Displays node details in JSON format.
   *
   * @param string $api_key
   *   Site API Key string.
   * @param \Drupal\node\NodeInterface $node
   *   Node entity object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The JSON response.
   *
   * @throws: \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
   *   If Node Type and Site API Key are invalid.
   */
  public function jsonContent($api_key, NodeInterface $node) {
    $type = $node->getType();

    // Get configured Site API Key.
    $site_api_key = \Drupal::config('system.site')->get('siteapikey');

    // Validate allowed Node Type and Site API Key.
    if ($type != 'page' || $api_key !== $site_api_key) {
      throw new AccessDeniedHttpException();
    }

    $content = [
      'id' => $node->id(),
      'type' => $type,
      'title' => $node->label(),
      'body' => $node->get('body')->value,
    ];

    return new JsonResponse($content);
  }

}
