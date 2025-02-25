<?php

namespace SuperbRecentPosts\Widget;

use SuperbRecentPosts\Widget\WidgetConstant;
use SuperbRecentPosts\Widget\WidgetField;
use SuperbRecentPosts\Widget\FieldSeparator;

if (! defined('WPINC')) {
    die;
}

class WidgetAdmin
{
    private $Widget;
    private $Instance;

    public function __construct($widget, $instance)
    {
        $this->Widget = $widget;
        $this->Instance = $instance;
        $this->BuildWidget();
    }

    private function BuildWidget()
    {
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::TITLE, __('Title', 'superb-recent-posts-with-thumbnail-images'), "text", "widefat");
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::NUMBER_OF_POSTS, __("Number of posts to show", 'superb-recent-posts-with-thumbnail-images'), "number", "tiny-text");
        new FieldSeparator();
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::DISPLAY_DATE, __("Display Date", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::DISPLAY_THUMBNAILS, __("Display Thumbnails", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::ALIGN_THUMBNAILS, __("Align Thumbnails", 'superb-recent-posts-with-thumbnail-images'), "select", "small-input", array("Left", "Right"));
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::ALIGN_TEXT, __("Align Text", 'superb-recent-posts-with-thumbnail-images'), "select", "small-input", array("Left", "Right"));
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::EXCLUDE_CURRENT, __("Exclude Current Post", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        new FieldSeparator();
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::SHOW_HOMEPAGE, __("Show Widget on Homepage", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::SHOW_BLOGPAGE, __("Show Widget on Blog Page", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        new WidgetField($this->Widget, $this->Instance, WidgetConstant::SHOW_PAGESPOSTS, __("Show Widget on Pages & Posts", 'superb-recent-posts-with-thumbnail-images'), "checkbox");
        WidgetField::BuildLink();
    }
}
