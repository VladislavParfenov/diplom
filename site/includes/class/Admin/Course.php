<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.04.2017
 * Time: 22:53
 */

namespace Admin;


class Course
{

    public $title = '';
    public function __construct()
    {
        $this->setTitle('Курс');
    }

    public function setTitle($title){
        $this->title = $title;
        return $this;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getContent(){
        $header = $this->getHeader(\Main::$AdminPages->getHeaderData());
        $body = $this->getBody(\Main::$AdminPages->getBodyData());
        $footer = $this->getFooter(\Main::$AdminPages->getFooterData());

        return $header . $body . $footer;
    }
    public function getHeader($args){
        $args['title'] = $this->getTitle();
        return \Main::$Templater->getTemplate('admin/core/header', $args);
    }
    public function getBody($args){
        $course_id = \Main::$Pages->getMethod();
        $course = \Main::$Courses->getCurse($course_id);
        $args['course'] = $course->getCourse();
        $tasks = $course->getCourseTasks();
        /**
         * @var $task \Learn\Task
         */
        foreach ($tasks as $task){
            $args['tasks'][]=$task->getTask();
        }
        return \Main::$Templater->getTemplate('admin/pages/course', $args);
    }
    public function getFooter($args){
        return \Main::$Templater->getTemplate('admin/core/footer', $args);
    }


}