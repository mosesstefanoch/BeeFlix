<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id'=> 1,
                'title'=>'Was it Love',
                'photo'=>'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQhpcbiWFjnrTsSNmur3q0gQWnEU5upjS9qmUxf_3PQM65V03km',
                'description'=>'No Ae-Jung (Song Ji-Hyo) is a single mother and works as a producer for a movie company. She has not had a boyfriend in the past 14 years, but 4 men appear in front of her. Oh Dae-O (Son Ho-Jun) is a mysterious best-selling novel writer. Ryu Jin (Song Jong-Ho) is a popular actor. Koo Pa-Do (Kim Min-Jun) was once a gangster, but he is now the CEO of Nine Capital financial company. Oh Yeon-Woo (Koo Ja-Sung) is a PE teacher at a school.',
                'rating'=> 5
            ],
            [
                'genre_id'=> 1,
                'title'=>'Touch Your Heart',
                'photo'=>'https://d3rwyinxzcqr6y.cloudfront.net/Assets/87/783/L_p0105878387.jpg',
                'description'=>'Oh Yoon-Seo is a popular actress. She is famous for her beautiful appearance, but her acting is bad. She gets involved in a scandal with the son from a chaebol family. Her acting career declines precipitously. Oh Yoon-Seo hears that a famous screenwriter wants her to play the lead female role for a drama series. The character works as a secretary for a lawyer. To gain experience for the role, Oh Yoon-Seo is required to work as a lawyer`s secretary for a few months. Meanwhile, Kwon Jung-Rok is an attorney for a law firm. He is arrogant and cold-hearted. One day, his boss asks Kwon Jung-Rok to let actress Oh Yoon-Seo work as his secretary for 3 months. He is not happy about the situation, but he has to accept.',
                'rating'=> 4
            ],
            [
                'genre_id'=> 1,
                'title'=>'I`m not a Robot',
                'photo'=>'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSfXVdw3sLFViC_2zLUcBuwp_GtI54kKxzd61Hy8TlwMoGrSBwT',
                'description'=>'Min-Kyu (Yoo Seung-Ho) is the largest shareholder of a finance company. He is handsome and intelligent, but he lives in seclusion due to his allergy of people. Meanwhile, Ji-A (Chae Soo-Bin) is an aspiring entrepreneur and works as a personal shopper. She receives a phone call from her ex-boyfriend Baek-Gyun (Uhm Ki-Joon). Her ex-boyfriend is a world renown developer of android robots. His latest creation is the android Aji 3, which he built with the same physical appearance as Ji-A, but an accident has broken Aji 3. Making matters worse, he has received an order for Aji 3 from Min-Kyu with the promise of more investment money if he`s satisfied. Being in such a predicament, Baek-Gyun offers money to Ji-A if she will go to Min-Kyu`s home and pretend to be Aji 3. Ji-A is in need of money and accepts the offer.',
                'rating'=> 4
            ],
            [
                'genre_id'=> 2,
                'title'=>'Spongebob Squarepants',
                'photo'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaSHQS__L0Q9SyMec_Eu8nEnAWJjIuCjbJiD_kA50WNLgRpe4y',
                'description'=>'SpongeBob is a good-natured, naive, and enthusiastic sea sponge. He resides in the undersea city of Bikini Bottom with other anthropomorphic aquatic creatures. He works as a fry cook at a local fast food restaurant, the Krusty Krab, to which he is obsessively attached, showing devotion to it above other restaurants.',
                'rating'=> 5
            ],
            [
                'genre_id'=> 2,
                'title'=>'Happy Tree Friends',
                'photo'=>'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQxrmHMDoL39s5yGDtFxEglzLJxspjePJjo-Rhhz5zYEMX3Djph',
                'description'=>'Happy Tree Friends (Commonly abbreviated to HTF) is a Flash cartoon series by Mondo Mini Shows, created by Kenn Navarro, Rhode Montijo, and Aubrey Ankrum, and developed by Montijo, Navarro, and Warren Graff. Since its debut, the show has become a popular internet phenomenon and has won a cult following.',
                'rating'=> 5
            ],
            [
                'genre_id'=> 2,
                'title'=>'Phineas and Ferb',
                'photo'=>'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTQMja8qEl6bB7qzjpWDlnFzEkQeNKU5I_7dBloSFXNLflPiL7I',
                'description'=>'The show follows the adventures of stepbrothers Phineas Flynn (Vincent Martella) and Ferb Fletcher (Thomas Sangster), who live in the fictional city of Danville, in a (never specified) tri-state area, as they seek ways to occupy their time during their summer vacation.',
                'rating'=> 4
            ],
            [
                'genre_id'=> 3,
                'title'=>'The Witcher',
                'photo'=>'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSyN85JQSuwzb6AXatDSoCIkzN-GdNWKTegJ6q0pbC-0jNnoLoQ',
                'description'=>'Netflix’s The Witcher is a show a lot like its protagonist: large, rugged, and not fond of explaining a damn thing. The fantasy epic stars Henry Cavill as silver-haired hunk Geralt of Rivia, a gruff wanderer and the eponymous Witcher. For some of us, that will be enough: Henry Cavill can Geralt our Rivias all day long.',
                'rating'=> 5
            ],
            [
                'genre_id'=> 3,
                'title'=>'Arrow',
                'photo'=>'https://images-na.ssl-images-amazon.com/images/I/81Tj2UsVYtL._SY445_.jpg',
                'description'=>'Arrow follows billionaire playboy Oliver Queen (Stephen Amell), who claimed to have spent five years shipwrecked on Lian Yu, a mysterious island in the North China Sea, before returning home to Starling City (later renamed "Star City") to fight crime and corruption as a secret vigilante whose weapon of choice is a bow and arrow.',
                'rating'=> 4
            ]
        ]);
    }
}
