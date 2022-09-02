<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create();
        $this->createPrimary();
    }

    public function create()
    {
        $subjects = [
            [
              'name' => 'English Language & Literature',
              'learner' => 25000,
              'teacher_guide' => 20000
            ],
            [
                'name' => 'Mathematics',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Biology',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Physics',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Chemistry',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Geography',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'History & Political Education',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Physical Education',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Technology and Design',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],[
                'name' => 'Performing Arts',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],[
                'name' => 'Nutrition and Food Technology',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],[
                'name' => 'Art and Design',
                'learner' => 25000,
                'teacher_guide' => 20000
            ]
        ];

        $classes = [
            'senior_one' => 'Senior One',
            'senior_two' => 'Senior Two',
//            'upper_primary' => 'Upper Primary'
        ];

        $types = [
            'learner' => "Learner's Book",
            'teacher_guide' => "Teacher's Guide"
        ];

        $books = [];
        foreach ($subjects as $subject) {

            foreach ($types as $type => $key) {
                $books[] = [
                    'name' => $key.'-'.$subject['name'],
                    'type' => $type,
                    'subject' => $subject['name'],
                    'cost' => $subject[$type]
                ];
            }
        }

        $class_books = [];

        foreach ($books as $book)
        {
            foreach ($classes as $item => $key) {
                $class_books[] = [
                    'name' => $book['name'].'-'.$key,
                    'type' => $book['type'],
                    'subject' => $book['subject'],
                    'class' => $item,
                    'cost' => $book['cost']
                ];
            }
        }

        foreach ($class_books as $class_book) {
            Book::firstOrCreate($class_book);
        }
    }
    public function createPrimary()
    {
        $subjects = [
            [
              'name' => 'Integrated Science',
              'learner' => 25000,
              'teacher_guide' => 20000
            ],
            [
                'name' => 'Social Studies',
                'learner' => 25000,
                'teacher_guide' => 20000
            ],
            [
                'name' => 'Mathematics',
                'learner' => 25000,
                'teacher_guide' => 20000
            ]
        ];

        $classes = [
            'p5' => 'P5',
            'p6' => 'P6',
            'p7' => 'P7',
        ];

        $types = [
            'learner' => "Learner's Book",
            'teacher_guide' => "Teacher's Guide"
        ];

        $books = [];
        foreach ($subjects as $subject) {

            foreach ($types as $type => $key) {
                $books[] = [
                    'name' => $key.'-'.$subject['name'],
                    'type' => $type,
                    'subject' => $subject['name'],
                    'cost' => $subject[$type]
                ];
            }
        }

        $class_books = [];

        foreach ($books as $book)
        {
            foreach ($classes as $item => $key) {
                $class_books[] = [
                    'name' => $book['name'].'-'.$key,
                    'type' => $book['type'],
                    'subject' => $book['subject'],
                    'class' => $item,
                    'cost' => $book['cost']
                ];
            }
        }

        foreach ($class_books as $class_book) {
            Book::firstOrCreate($class_book);
       }
    }
}
