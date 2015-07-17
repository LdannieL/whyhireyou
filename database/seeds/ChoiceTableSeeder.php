<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ChoiceTableSeeder extends Seeder {

    public function run()
    {
        App\Models\Choice::create(array(
            'statement_id' => '1',
            'statement_number' => '1',
            'text' => 'I am someone who enjoys thinking big-picture.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '1',
            'statement_number' => '1',
            'text' => 'I am a naturally creative person.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '1',
            'statement_number' => '1',
            'text' => 'I enjoy hearing other people’s thoughts on important things.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '2',
            'statement_number' => '2',
            'text' => 'I am motivated to participate in important causes.',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '2',
            'statement_number' => '2',
            'text' => 'I feel strongly about the importance of setting goals.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '2',
            'statement_number' => '2',
            'text' => 'I am often passionate about new ideas.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '3',
            'statement_number' => '3',
            'text' => 'I am energized by social activity.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '3',
            'statement_number' => '3',
            'text' => 'I enjoy the company of people who want to make a difference',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '3',
            'statement_number' => '3',
            'text' => 'I enjoy creative brainstorming.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '4',
            'statement_number' => '4',
            'text' => 'I am a highly dependable person.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '4',
            'statement_number' => '4',
            'text' => 'I am a natural born leader.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '4',
            'statement_number' => '4',
            'text' => 'I have a strong sense of personal style.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '5',
            'statement_number' => '5',
            'text' => 'I feel good when I am able to contribute in a group environment.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '5',
            'statement_number' => '5',
            'text' => 'I delight in the chance to inspire others to grow.',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '5',
            'statement_number' => '5',
            'text' => 'I enjoy making progress in whatever I am doing.',
            'profile' => 'PR',
            'value' => '1'
        ));   

        App\Models\Choice::create(array(
            'statement_id' => '6',
            'statement_number' => '6',
            'text' => 'I tend see possibilities that others don’t.',
            'profile' => 'VI',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '6',
            'statement_number' => '6',
            'text' => 'I am drawn to colors and pictures.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '6',
            'statement_number' => '6',
            'text' => 'I often look for ways to support the people around me.',
            'profile' => 'CO',
            'value' => '1'
        ));   

        App\Models\Choice::create(array(
            'statement_id' => '7',
            'statement_number' => '7',
            'text' => 'I am not afraid to help others embrace change.',
            'profile' => 'CM',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '7',
            'statement_number' => '7',
            'text' => 'I am often counted on to be reliable and get things done.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '7',
            'statement_number' => '7',
            'text' => 'I am confident and can generally persuade others.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '8',
            'statement_number' => '8',
            'text' => 'I am generally a trustworthy person.',
            'profile' => 'CO',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '8',
            'statement_number' => '8',
            'text' => 'I am often complimented for being unique.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '8',
            'statement_number' => '8',
            'text' => 'I tend to be admired for my intellect.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '9',
            'statement_number' => '9',
            'text' => 'I believe that change is necessary in the world.',
            'profile' => 'CM',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '9',
            'statement_number' => '9',
            'text' => 'I follow through on my commitments.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '9',
            'statement_number' => '9',
            'text' => 'I value relationships with others.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '10',
            'statement_number' => '10',
            'text' => 'I celebrate the artistic contributions of others.',
            'profile' => 'IN',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '10',
            'statement_number' => '10',
            'text' => 'I encourage other people to think about things differently.',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '10',
            'statement_number' => '10',
            'text' => 'I believe that people can often overcome obstacles.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '11',
            'statement_number' => '11',
            'text' => 'I want to be liked and appreciated by others.',
            'profile' => 'CO',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '11',
            'statement_number' => '11',
            'text' => 'I appreciate beautiful design.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '11',
            'statement_number' => '11',
            'text' => 'I believe that meaningful world change is possible.',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '12',
            'statement_number' => '12',
            'text' => 'I am an analytical and observant person.',
            'profile' => 'PR',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '12',
            'statement_number' => '12',
            'text' => 'I enjoy being competitive.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '12',
            'statement_number' => '12',
            'text' => 'I am often praised for my creativity.',
            'profile' => 'IN',
            'value' => '1'
        ));

       App\Models\Choice::create(array(
            'statement_id' => '13',
            'statement_number' => '13',
            'text' => 'I often challenge other people with new ideas.',
            'profile' => 'VI',
            'value' => '1'
        ));  

        App\Models\Choice::create(array(
            'statement_id' => '13',
            'statement_number' => '13',
            'text' => 'I celebrate positive change.',
            'profile' => 'CM',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '13',
            'statement_number' => '13',
            'text' => 'I believe there is no such thing as a bad question.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '14',
            'statement_number' => '14',
            'text' => 'I am generally results-oriented.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '14',
            'statement_number' => '14',
            'text' => 'I love sketching out concepts.',
            'profile' => 'IN',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '14',
            'statement_number' => '14',
            'text' => 'I often come up with fresh and exciting ideas.',
            'profile' => 'VI',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '15',
            'statement_number' => '15',
            'text' => 'I work hard to build relationships with people.',
            'profile' => 'CO',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '15',
            'statement_number' => '15',
            'text' => 'I am generally more logical than emotional.',
            'profile' => 'PR',
            'value' => '1'
        ));

        App\Models\Choice::create(array(
            'statement_id' => '15',
            'statement_number' => '15',
            'text' => 'I believe that the impossible can be possible.',
            'profile' => 'CM',
            'value' => '1'
        ));
    }

}