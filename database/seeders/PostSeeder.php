<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'Title' => 'Visual Storytelling: Exploring the World of Graphic Design',
                'Description' => 'In this graphic design portfolio post, I present a collection of visually striking and conceptually-driven designs. From captivating branding identities to eye-catching posters and editorial layouts, each project tells a unique visual story. Through thoughtful typography, striking color palettes, and attention to detail, I aim to create designs that communicate messages effectively and leave a lasting impression. Join me in exploring the world of graphic design, where creativity meets functionality and aesthetics merge with purpose.',
                'Status' => '1',
                'Category' => 'Image Editing',
                'image' => '2.jpeg',
            ],
            [
                'Title' => 'Unleashing Creativity: From Imagination to Illustration',
                'Description' => 'In this custom illustration portfolio post, I share a selection of my imaginative and visually striking illustrations. From whimsical characters to intricate fantasy landscapes, each artwork is a result of my passion for storytelling and artistic expression. With a blend of traditional and digital techniques, I bring concepts to life, infusing them with vibrant colors, rich textures, and captivating details. Join me in exploring a world where imagination knows no bounds and where creativity takes flight.',
                'Status' => '1',
                'Category' => 'Custom Illustration',
                'image' => '01.jpg',
            ],
            [
                'Title' => 'Visual Storytelling: Exploring the World of Graphic Design',
                'Description' => 'In this graphic design portfolio post, I present a collection of visually striking and conceptually-driven designs. From captivating branding identities to eye-catching posters and editorial layouts, each project tells a unique visual story. Through thoughtful typography, striking color palettes, and attention to detail, I aim to create designs that communicate messages effectively and leave a lasting impression. Join me in exploring the world of graphic design, where creativity meets functionality and aesthetics merge with purpose.',
                'Status' => '1',
                'Category' => 'Image Editing',
                'image' => '1.png',
            ],
            [
                'Title' => 'Unleashing Creativity: From Imagination to Illustration',
                'Description' => 'In this custom illustration portfolio post, I share a selection of my imaginative and visually striking illustrations. From whimsical characters to intricate fantasy landscapes, each artwork is a result of my passion for storytelling and artistic expression. With a blend of traditional and digital techniques, I bring concepts to life, infusing them with vibrant colors, rich textures, and captivating details. Join me in exploring a world where imagination knows no bounds and where creativity takes flight.',
                'Status' => '1',
                'Category' => 'Custom Illustration',
                'image' => '02.jpg',
            ],
            [
                'Title' => 'Unleashing Creativity: From Imagination to Illustration',
                'Description' => 'In this custom illustration portfolio post, I share a selection of my imaginative and visually striking illustrations. From whimsical characters to intricate fantasy landscapes, each artwork is a result of my passion for storytelling and artistic expression. With a blend of traditional and digital techniques, I bring concepts to life, infusing them with vibrant colors, rich textures, and captivating details. Join me in exploring a world where imagination knows no bounds and where creativity takes flight.',
                'Status' => '1',
                'Category' => 'Custom Illustration',
                'image' => '04.jpg',
            ],
            [
                'Title' => 'Crafting Seamless Experiences: The Art of UI/UX Design',
                'Description' => 'In this UI/UX design portfolio post, I present a range of projects that demonstrate my expertise in creating intuitive and visually appealing digital experiences. Through meticulous research, user-centric design, and seamless interactions, I strive to enhance user engagement and satisfaction. From sleek and minimalist interfaces to dynamic and immersive designs, each project showcases my ability to blend aesthetics with functionality. Join me in exploring the art of UI/UX design and discover how thoughtful and user-centered design can transform digital interactions.',
                'Status' => '1',
                'Category' => 'UI/UX Design',
                'image' => '001.jpg',
            ],
            [
                'Title' => 'Visual Storytelling: Exploring the World of Graphic Design',
                'Description' => 'In this graphic design portfolio post, I present a collection of visually striking and conceptually-driven designs. From captivating branding identities to eye-catching posters and editorial layouts, each project tells a unique visual story. Through thoughtful typography, striking color palettes, and attention to detail, I aim to create designs that communicate messages effectively and leave a lasting impression. Join me in exploring the world of graphic design, where creativity meets functionality and aesthetics merge with purpose.',
                'Status' => '1',
                'Category' => 'Image Editing',
                'image' => 'Pet.png',
            ],
            [
                'Title' => 'Crafting Seamless Experiences: The Art of UI/UX Design',
                'Description' => 'In this UI/UX design portfolio post, I present a range of projects that demonstrate my expertise in creating intuitive and visually appealing digital experiences. Through meticulous research, user-centric design, and seamless interactions, I strive to enhance user engagement and satisfaction. From sleek and minimalist interfaces to dynamic and immersive designs, each project showcases my ability to blend aesthetics with functionality. Join me in exploring the art of UI/UX design and discover how thoughtful and user-centered design can transform digital interactions.',
                'Status' => '1',
                'Category' => 'UI/UX Design',
                'image' => '002.jpg',
            ],
            [
                'Title' => 'Crafting Seamless Experiences: The Art of UI/UX Design',
                'Description' => 'In this UI/UX design portfolio post, I present a range of projects that demonstrate my expertise in creating intuitive and visually appealing digital experiences. Through meticulous research, user-centric design, and seamless interactions, I strive to enhance user engagement and satisfaction. From sleek and minimalist interfaces to dynamic and immersive designs, each project showcases my ability to blend aesthetics with functionality. Join me in exploring the art of UI/UX design and discover how thoughtful and user-centered design can transform digital interactions.',
                'Status' => '1',
                'Category' => 'UI/UX Design',
                'image' => '003.jpg',
            ],
            [
                'Title' => 'Visual Storytelling: Exploring the World of Graphic Design',
                'Description' => 'In this graphic design portfolio post, I present a collection of visually striking and conceptually-driven designs. From captivating branding identities to eye-catching posters and editorial layouts, each project tells a unique visual story. Through thoughtful typography, striking color palettes, and attention to detail, I aim to create designs that communicate messages effectively and leave a lasting impression. Join me in exploring the world of graphic design, where creativity meets functionality and aesthetics merge with purpose.',
                'Status' => '1',
                'Category' => 'Image Editing',
                'image' => '5.jpg',
            ],
            [
                'Title' => 'Unleashing Creativity: From Imagination to Illustration',
                'Description' => 'In this custom illustration portfolio post, I share a selection of my imaginative and visually striking illustrations. From whimsical characters to intricate fantasy landscapes, each artwork is a result of my passion for storytelling and artistic expression. With a blend of traditional and digital techniques, I bring concepts to life, infusing them with vibrant colors, rich textures, and captivating details. Join me in exploring a world where imagination knows no bounds and where creativity takes flight.',
                'Status' => '1',
                'Category' => 'Custom Illustration',
                'image' => '03.jpg',
            ],
            [
                'Title' => 'Crafting Seamless Experiences: The Art of UI/UX Design',
                'Description' => 'In this UI/UX design portfolio post, I present a range of projects that demonstrate my expertise in creating intuitive and visually appealing digital experiences. Through meticulous research, user-centric design, and seamless interactions, I strive to enhance user engagement and satisfaction. From sleek and minimalist interfaces to dynamic and immersive designs, each project showcases my ability to blend aesthetics with functionality. Join me in exploring the art of UI/UX design and discover how thoughtful and user-centered design can transform digital interactions.',
                'Status' => '1',
                'Category' => 'UI/UX Design',
                'image' => '004.jpg',
            ],
        ];

        foreach ($posts as $post) {
            $postId = DB::table('posts')->insertGetId([
                'Title' => $post['Title'],
                'Description' => $post['Description'],
                'Status' => $post['Status'],
                'Category' => $post['Category'],
            ]);

            DB::table('images')->insert([
                'image' => $post['image'],
                'post_id' => $postId,
            ]);
        }
    }
}
