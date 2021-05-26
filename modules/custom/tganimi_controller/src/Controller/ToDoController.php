<?php

namespace Drupal\tganimi_controller\Controller;

class ToDoController {
    
    public function index() {

        $items = [
            ['name' => 'Email team for updates'],
            ['name' => 'Send out meeting request'],
            ['name' => 'Prepare a deck for next meeting'],
            ['name' => 'Book conference room'],
            ['name' => 'Update project plan'],
            ['name' => 'Answer tech team queries'],
            ['name' => 'Verify project budget'],
        ];

        return [
            '#theme' => 'todo_list',
            '#items' => $items,
            '#title' => 'To Do List'
        ];

    }

}