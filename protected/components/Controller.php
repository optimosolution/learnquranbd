<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    public $userData;

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = 'application.views.layouts.column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
                'actions' => array('login'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function init() {
        $this->statistics();
    }

    public function checkAccess($controller, $action) {
        $val = Yii::app()->db->createCommand()
                ->select('access')
                ->from('{{acl}}')
                ->where('LOWER(controller)="' . $controller . '" AND LOWER(actions)="' . $action . '" AND group_id=' . Yii::app()->user->group . ' AND controller_type=0')
                ->queryScalar();
        if (empty($val)) {
            $val = 1;
        } else {
            $val = $val;
        }
        return $val;
    }

    public function statistics() {
        $model = new Visitor;
        $model->user_type = 0;
        $model->user_id = Yii::app()->user->id;
        $model->user_name = Yii::app()->user->name;
        $model->server_time = new CDbExpression('NOW()');
        $model->page_title = $this->pageTitle;
        $model->page_link = Yii::app()->request->url;
        $model->browser = Yii::app()->browser->getBrowser();
        $model->visitor_ip = $_SERVER['REMOTE_ADDR'];
        $model->save();
    }

    public function firstNwords($str, $n) {
        return preg_replace('/((\b\w+\b.*?){' . $n . '}).*$/s', '$1', $str);
    }

    public function strip_html_tags($string) {

        $string = str_replace("\r", ' ', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace("\t", ' ', $string);
        $pattern = '/<[^>]*>/';
        $string = preg_replace($pattern, ' ', $string);
        $string = trim(preg_replace('/ {2,}/', ' ', $string));

        return $string;
    }

    public function text_cut($text, $length = 200, $dots = true) {
        $text = trim(preg_replace('#[\s\n\r\t]{2,}#', ' ', $text));
        $text_temp = $text;
        while (substr($text, $length, 1) != " ") {
            $length++;
            if ($length > strlen($text)) {
                break;
            }
        }
        //$text = substr($text, 0, $length);
        $text = mb_substr($text, 0, $length, 'UTF-8');
        return $text . ( ( $dots == true && $text != '' && strlen($text_temp) > $length ) ? '...' : '');
    }

    public function get_newses($cat_id) {
        $rValue = Yii::app()->db->createCommand()
                ->select('id, title')
                ->from('{{content}}')
                ->where('state=1 AND catid=' . $cat_id)
                ->order('created DESC, id DESC')
                ->limit(5)
                ->queryAll();
        foreach ($rValue as $key => $values) {
            echo '<p><i class="fa fa-caret-right"></i> ';
            echo CHtml::link($values["title"], array('content/view', 'id' => $values["id"]), array());
            echo '</p>';
        }
    }

    public function get_testimonial_home() {
        $rValue = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{testimonial}}')
                ->order('rand()')
                //->limit(2)
                ->queryAll();
        $i = 1;
        foreach ($rValue as $key => $values) {
            if ($i == 1) {
                echo '<div class="item active">';
            } else {
                echo '<div class="item">';
            }
            echo '<blockquote class="quote">';
            echo '<p><i class="fa fa-quote-left"></i> ' . $values["testimonial"] . '</p>';
            echo '</blockquote>';
            echo '<div class="row">';
            echo '<p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">' . $values["full_name"] . '</span><br /><span class="title">' . $values["identity"] . '</span></p>';
            echo '</div>';
            echo '</div>';
            $i++;
        }
    }

    public function get_sub_menu($cat_id) {
        $rValue = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{content_category}}')
                ->where('published=1 AND parent_id=' . $cat_id)
                ->order('title')
                ->queryAll();
        foreach ($rValue as $key => $values) {
            echo '<li>' . CHtml::link($values["title"], array('content/index', 'id' => $values["id"]), array('style' => 'font-size:16px;')) . '</li>';
        }
    }

}
