<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'Title' => 'Image Editing',
                'Description' => 'Our professional image editing services can transform your photos and make them look stunning. Whether you need retouching, color correction, background removal, or any other enhancement, our skilled team will deliver high-quality results.

With our image retouching service, we can eliminate imperfections, smooth out skin tones, and enhance the overall appearance of your photos. Our experienced editors pay attention to detail, ensuring that the final result looks natural and professional.

Color correction is another aspect we specialize in. We can adjust the colors, tones, and contrast of your images to create a visually appealing look. Whether you want vibrant and dynamic colors or a more subdued and moody atmosphere, we can achieve the desired effect.',
                'Price' => '39.99',
                'images' => ['2.jpeg','sve1.png'],
            ],
            [
                'Title' => 'Custom Illustraion',
                'Description' => 'Our custom illustration services offer a creative and artistic approach to transform your ideas into visually captivating designs. Whether you need illustrations for a book, website, marketing materials, or any other project, our skilled team of illustrators will deliver high-quality results.

With our custom illustration service, we can bring your concepts to life with precision and attention to detail. Our experienced illustrators work closely with you to understand your vision and create illustrations that perfectly match your requirements. From character designs to intricate landscapes, we can create stunning visuals that engage your audience.

We specialize in a variety of illustration styles, including traditional, digital, and mixed media. Whether you prefer a classic and timeless look or a modern and vibrant style, we can adapt our techniques to suit your needs. Our illustrators have expertise in shading, color palettes, and composition, ensuring that each illustration is visually appealing and harmonious.

Our custom illustrations can be tailored to match the tone and theme of your project. Whether you are aiming for a whimsical and playful atmosphere or a sophisticated and elegant aesthetic, our illustrators will carefully select the appropriate techniques and elements to create the desired effect.

    Partnering with us means receiving personalized attention and a collaborative approach. We value your input and strive to exceed your expectations throughout the creative process. With our custom illustration services, you can elevate your project with unique and eye-catching visuals that leave a lasting impression.',
                'Price' => '39.99',
                'images' => ['Treca.jpg','sve2.png'],
            ],
            [
                'Title' => 'UI/UX Design',
                'Description' => 'Our UI/UX design services offer a seamless and user-centric approach to create visually stunning and intuitive digital experiences. Whether you need a website, mobile app, or software interface, our skilled team of designers will deliver high-quality results that engage and delight your users.

With our UI/UX design service, we prioritize the needs and preferences of your target audience. We conduct thorough research and user testing to understand their behaviors, expectations, and pain points. This allows us to create designs that are not only visually appealing but also highly functional and user-friendly.

Our experienced designers specialize in creating clean, modern, and aesthetically pleasing interfaces. We pay meticulous attention to typography, color schemes, iconography, and overall layout to ensure a harmonious and visually cohesive design. By incorporating the latest design trends and best practices, we deliver designs that are both contemporary and timeless.

We believe that a great user experience is the key to success in the digital realm. Our designers are adept at creating intuitive and interactive interfaces that guide users seamlessly through the flow of your product. From clear navigation structures to intuitive interactions and visual cues, we focus on enhancing usability and ensuring a smooth user journey.

Collaboration is at the core of our UI/UX design process. We work closely with you to understand your business goals, brand identity, and project requirements. By incorporating your feedback and ideas throughout the design process, we ensure that the final product aligns perfectly with your vision and objectives.',
                'Price' => '39.99',
                'images' => ['dobra.jpg','sve3.png'],
            ],
        ];
        foreach ($services as $service) {
            $serviceId = DB::table('services')->insertGetId([
                'Title' => $service['Title'],
                'Price' => $service['Price'],
                'Description' => $service['Description'],
            ]);

            // Assuming $service['images'] is an array containing image paths or URLs
            foreach ($service['images'] as $image) {
                DB::table('images')->insert([
                    'image' => $image,
                    'service_id' => $serviceId,
                ]);
            }
        }

    }
}
