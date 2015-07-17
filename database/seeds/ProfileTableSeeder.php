<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProfileTableSeeder extends Seeder {

    public function run()
    {
        App\Models\Profile::create(array(
            'style' => 'Visionary',
            'description' => 'You are a talented person with big ideas that challenge others to imagine the possibilities. People are drawn to you because of your fresh thinking and ability to inspire. While you know there are obstacles, you are successful because you focus on what you can control.',
            'skills' => 'Big Picture Thinker, Competitive, Communicator, Passionate, Persuasive.',
            'quote' => '“You don’t choose your passions, your passions choose you.” – Jeff Bezos',
            'profile' => 'VI'
        ));

        App\Models\Profile::create(array(
            'style' => 'Change Maker',
            'description' => 'You are a talented person who is committed to transformation. When you look at the world you are motivated by the possibilities and are personally committed to “be the change you want to see.” You are not deterred when others may not immediately jump on board. Instead you work with like-minded, influential people to focus on small wins first.',
            'skills' => 'Influential, Motivator, Diligent, Empathetic, Adaptable.',
            'quote' => '“We cannot change what we are not aware of, and once we are aware, we cannot help but change.” – Sheryl Sandberg',
            'profile' => 'CM'
        ));

        App\Models\Profile::create(array(
            'style' => 'Innovator',
            'description' => 'You are a highly creative person who is generous with their time, talent and contributions.  People look to you to help them express ideas because they know you have a knack for adding unique color and flair to everything you do.',
            'skills' => 'Expressive, Creative, Open, Inventive, Observer.',
            'quote' => '“You have many years ahead of you to create the dreams that we can’t even imagine dreaming.” – Steven Spielberg',
            'profile' => 'IN'
        ));

        App\Models\Profile::create(array(
            'style' => 'Producer',
            'description' => 'You are a detailed-oriented individual who sets goals and focuses on getting things done.  Your talent is very valuable because when things need to happen, you have the initiative and the intelligence to get results.',
            'skills' => 'Focused, Organized, Dependable, Logical, Committed.',
            'quote' => '“Always work hard on something uncomfortably exciting” – Larry Page',
            'profile' => 'PR'
        ));

        App\Models\Profile::create(array(
            'style' => 'Collaborator',
            'description' => 'You are people-oriented and you use this talent to build strong relationships.  You bring out the best in others because the people who work with you, feel that their feedback is valued.  In turn you are a key contributor of ideas and a support system to ensure the team functions at its best.',
            'skills' => 'Social, Optimistic, Listener, Flexible, Encourager.',
            'quote' => '"Talent wins games, but teamwork and intelligence win championships." – Michael Jordan',
            'profile' => 'CO'
        ));
    }
}