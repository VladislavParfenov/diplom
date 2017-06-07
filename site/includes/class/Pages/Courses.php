<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.04.2017
 * Time: 17:23
 */

namespace Pages;


class Courses
{
    public function __construct()
    {

    }

    public function getContent(){
        $args = [];
        $courses = \Main::$Courses->getCourses();
        /**
         * @var $cours \Learn\Course
         */
        foreach ($courses as $cours){
            $args['courses'][$cours->getId()] = $cours->getCourse();
        }

        return \Main::$Templater->getTemplate('site/pages/courses', $args);
    }

}