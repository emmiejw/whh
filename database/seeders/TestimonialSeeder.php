<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'comment' => "I have been really pleased with all the cleaning that has been done in Mum's house. We currently have Wendy who is very friendly and does everything Mum requires. Ruth is very good at contacting me if there is ever a problem which is very much appreciated.",
                'name' => "Paul Edwards",
                'stars' => "5"
            ],
            [
                'comment' => "Just found Ruth having spent a long time persuading my mother who is now pleased. Recommended her to a friend who was very pleased with her service. Well done Ruth ✔",
                'name' => "Tina Lanning",
                'stars' => "4"
            ],
            [
                'comment' => "Our experience of using the Waterside Home Help service is a really positive one. We have found the staff to be reliable, helpfull, always professional and good timekeepers. In addition we believe the service offered to be very good value for money. I would have no hesitation in reccomending the service.
",
                'name' => "Glenda Read",
                'stars' => "5"
            ],
            [
                'comment' => "I very much value Ruth's help she is very caring n capable.I look forward t her coming t help me as I am disabled n quite isolated at times I would recommend t other clients her skills n caring approach",
                'name' => "Irene Jay",
                'stars' => "5"
            ],
            [
                'comment' => "I have been having Waterside Home Help for a weekly clean of my home 🏘️ I have found them excellent, very reliable, hard working, and punctual . I would highly recommend them",
                'name' => "Marion Buck",
                'stars' => "5"
            ],
            [
                'comment' => "Kelly and Ruth have been fantastic in helping with the lady of the house even when she is hospital they ask for regular update really can't fault and would recommend them",
                'name' => "Tim Bartels",
                'stars' => "5"
            ],
            [
                'comment' => "Ruth is very caring, communicates really well and is extremely respectful.",
                'name' => "Marie Dochniak",
                'stars' => "5"
            ],
            [
                'comment' => "An excellent service from a reliable, friendly team that I sadly miss in my new home. I highly recommend them.",
                'name' => "Maureen Dolding",
                'stars' => "5"
            ],
            [
                'comment' => "Great team of people who perform a wonderful service to father-in-law!",
                'name' => "Lawrence Rideal",
                'stars' => "5"
            ],
            [
                'comment' => "The staff really couldn’t be more kind and attentive to the needs of the clients",
                'name' => "Peter Davis-Parker",
                'stars' => "5"
            ],
            [
                'comment' => "Brilliant, very obliging and always cheerful.",
                'name' => "Lesley Prince",
                'stars' => "5"
            ],
        ]);
    }
}
