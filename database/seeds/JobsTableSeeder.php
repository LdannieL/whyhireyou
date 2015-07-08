<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;

class JobsTableSeeder extends Seeder {

    public function run()
    {
        App\Models\Job::create(array(
            'category_id' => '1',
            'user_id' => '1',
            'type_id' => '1',
            'company_name' => 'FutureComp',
            'title' => 'CEO',
            'description' => 'The New York Global Technical Support Centre offers many opportunities for specialization and advancement – our professionals receive world-class training in order to stay on top of emerging technologies. Team members can pursue training in new products to expand their skills and plan the advancement of their careers. \n\n\n\nMicrosoft support facilities are equipped with high speed IT infrastructure which supports our operations seamlessly across international boundaries and enables collaboration with engineers across Europe and the world.\n\n\n\nOur Values :\n\nAs a company, and as individuals, we value integrity, honesty, openness, personal excellence, constructive self-criticism, continual self-improvement, and mutual respect. We are committed to our customers and partners and have a passion for technology. We take on big challenges, and pride ourselves on seeing them through. We hold ourselves accountable to our customers, shareholders, partners, and employees by honouring our commitments, providing results, and striving for the highest quality.',
            'city' => 'New York',
            'state' => 'New York',
            'contact_email' => 'boss@gmail.com'

        ));

        App\Models\Job::create(array(
            'category_id' => '2',
            'user_id' => '3',
            'type_id' => '2',
            'company_name' => 'PastComp',
            'title' => 'worker',
            'description' => 'The New York Global Technical Support Centre offers many opportunities for specialization and advancement – our professionals receive world-class training in order to stay on top of emerging technologies. Team members can pursue training in new products to expand their skills and plan the advancement of their careers. \n\n\n\nMicrosoft support facilities are equipped with high speed IT infrastructure which supports our operations seamlessly across international boundaries and enables collaboration with engineers across Europe and the world.\n\n\n\nOur Values :\n\nAs a company, and as individuals, we value integrity, honesty, openness, personal excellence, constructive self-criticism, continual self-improvement, and mutual respect. We are committed to our customers and partners and have a passion for technology. We take on big challenges, and pride ourselves on seeing them through. We hold ourselves accountable to our customers, shareholders, partners, and employees by honouring our commitments, providing results, and striving for the highest quality.',
            'city' => 'Boston',
            'state' => 'Massachusetts',
            'contact_email' => 'past@gmail.com'

        ));

        App\Models\Job::create(array(
            'category_id' => '1',
            'user_id' => '3',
            'type_id' => '3',
            'company_name' => 'Kennedy Space Center',
            'title' => 'astronaut',
            'description' => 'The criteria for what constitutes human spaceflight vary. The Fédération Aéronautique Internationale (FAI) Sporting Code for astronautics recognizes only flights that exceed an altitude of 100 kilometers (62 mi).[3] In the United States, professional, military, and commercial astronauts who travel above an altitude of 50 miles (80 km)[4] are awarded astronaut wings.\r\n\r\nAs of 8 June 2013, a total of 532 people from 36 countries have reached 100 km (62 mi) or more in altitude, of which 529 reached low Earth orbit or beyond.[5][6] Of these, 24 people have traveled beyond Low Earth orbit, to either lunar or trans-lunar orbit or to the surface of the moon; three of the 24 did so twice: Jim Lovell, John Young and Eugene Cernan.[7] The three astronauts who have not reached low Earth orbit are spaceplane pilots Joe Walker, Mike Melvill, and Brian Binnie.\r\n\r\nAs of 20 June 2011, under the U.S. definition 538 people qualify as having reached space, above 50 miles (80 km) altitude. Of eight X-15 pilots who exceeded 50 miles (80 km) in altitude, only one exceeded 100 kilometers (about 62 miles).[8] Space travelers have spent over 41,790 man-days (114.5 man-years) in space, including over 100 astronaut-days of spacewalks.[8][9] As of 2008, the man with the longest cumulative time in space is Sergei K. Krikalev, who has spent 803 days, 9 hours and 39 minutes, or 2.2 years, in space.[10][11] Peggy A. Whitson holds the record for the most time in space by a woman, 377 days.[12]',
            'city' => 'Port Saint John',
            'state' => 'Florida',
            'contact_email' => 'astro@gmail.com'

        ));

        App\Models\Job::create(array(
            'category_id' => '1',
            'user_id' => '3',
            'type_id' => '1',
            'company_name' => 'SuperComputer',
            'title' => 'C/C++ Software Developer',
            'description' => '-> Using the latest technologies in color imaging and digital printing and high-speed, multi-functional printing equipment.\r\n-> Apply the latest technologies in an energetic, team-based culture, using state-of-the-art tools and equipment.\r\n-> Work in modern labs and in a development environment designed especially for Software professionals!\r\n\r\nBe an active member of a high-energy software development team! This team designs, develops and maintains software applications for complex, high-performance printing and document processing and finishing environments, designed for Linux operating systems, using C/C++ programming languages.\r\n\r\nRequirements:\r\n\r\n*University Degree - Computer Science or related;\r\n*Good C/C++ programming skills;\r\n*Familiar with applications designed for Linux environment (make, gcc, shell);\r\n*Process/Threads synchronization and Network programming experience is a plus;\r\n*Good written and spoken English skills;\r\n*Strong team orientation.',
            'city' => 'Chicago',
            'state' => 'Illinois',
            'contact_email' => 'supercomp@gmail.com'

        ));

        App\Models\Job::create(array(
            'category_id' => '3',
            'user_id' => '4',
            'type_id' => '1',
            'company_name' => 'AlexOnMars',
            'title' => 'Mars Colonist',
            'description' => 'Permanent Settlement\n\nThe most complex, expensive, and risky part of a mission to Mars is the return trip. It requires developing bigger rockets that need a larger landing systems and launch capability on Mars. Permanent settlement is not easy but it is far less complex and requires much less infrastructure sent to Mars than return missions. Mars One has already started contracting established aerospace companies to work on the required systems. All systems require design, construction, and testing, but no scientific breakthroughs are required to send humans to Mars and to sustain life there.\n\nMission Design\n\nA habitable settlement will await the first crew before they depart Earth. The hardware needed will be sent to Mars in the years ahead of the humans. This unmanned mission is currently scheduled for 2024.',
            'city' => 'Chicago',
            'state' => 'Illinois',
            'contact_email' => 'test2@gmail.com'
        ));

        App\Models\Job::create(array(
            'category_id' => '4',
            'user_id' => '3',
            'type_id' => '3',
            'company_name' => 'test 1',
            'title' => 'test 1',
            'description' => 'test 1',
            'city' => 'Belgrade',
            'state' => 'Serbia',
            'contact_email' => 'john@doe.com'
        ));

        App\Models\Job::create(array(
            'category_id' => '4',
            'user_id' => '5',
            'type_id' => '3',
            'company_name' => 'test 2',
            'title' => 'test 2',
            'description' => 'test 2',
            'city' => 'Belgrade',
            'state' => 'Serbia',
            'contact_email' => 'jane@doe.com'
        ));
    }

}