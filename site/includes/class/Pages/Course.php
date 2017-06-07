<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.04.2017
 * Time: 22:02
 */

namespace Pages;


class Course
{

    public function getContent(){
        $course_id = \Main::$Pages->getMethod();

        $course = \Main::$Courses->getCurse($course_id);
        $course_info = $course->getCourse();
        $tasks = $course->getCourseTasks();
        /**
         * @var $task \Learn\Task
         */
        foreach ($tasks as $task){
            $all_tasks[] = $task->getTask();
        }

        $args = [
            'course_name' => $course_info['name'],
            'tasks' => $all_tasks
        ];
        return \Main::$Templater->getTemplate('site/pages/course', $args);
    }

}