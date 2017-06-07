<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.04.2017
 * Time: 15:50
 */

namespace Admin;


class Courses
{

    public function getContent(){
        $header = $this->getHeader(\Main::$AdminPages->getHeaderData());
        $body = $this->getBody(\Main::$AdminPages->getBodyData());
        return $header . $body;
    }

    public function getHeader($args){
        $args['title'] = "Курсы";
        return \Main::$Templater->getTemplate('admin/core/header', $args);
    }
    private function getBody($args)
    {
        $courses = \Main::$Courses->getCourses();
        $info = [];
        /**
         * @var $cours \Learn\Course
         */
        foreach ($courses as $cours){
            $args['courses'][] = $cours->getCourse();
        }
        return \Main::$Templater->getTemplate('admin/pages/courses', $args);
    }
}