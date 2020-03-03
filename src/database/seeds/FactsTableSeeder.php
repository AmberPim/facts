<?php
namespace Funsies\Facts\Database\Seeds;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'fact' => 'The heart of a shrimp is located in its head.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'A snail can sleep for three years.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'The fingerprints of a koala are so indistinguishable from humans that they have on occasion been confused at a crime scene.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'Slugs have four noses.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'Elephants are the only animal that can\'t jump.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'Nearly three percent of the ice in Antarctic glaciers is penguin urine.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'An ostrich\'s eye is bigger than its brain.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'Frogs cannot vomit. If one absolutely has to, then it will vomit its entire stomach.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Alaska it is illegal to whisper in someone’s ear while they’re moose hunting.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => '‘Jaws’ is the most common name for a goldfish.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'The longest recorded life span of a slug was 1 year, 6 months.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Arkansas, it\'s illegal honk your horn near a sandwich shop after 9 p.m.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Delaware, it\'s illegal to whisper in church.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Georgia, it\'s forbidden to eat fried chicken with a knife and fork.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Nebraska, you can\'t get married if you have an STD.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In North Carolina, drunk bingo is banned.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Wisconsin, cheese has to be delicious, or at least "highly pleasing."',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'It\'s illegal to eat a frog that dies during a frog-jumping contest in California ',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'In Colorado you have to get a permit to modify the weather. ',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'It\'s illegal in Arkansas to mispronounce Arkansas',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'The first tiger shark to hatch inside of its mother’s womb eats all the other embryos of its siblings. Even scientists admit that this is an unusual mode of survival.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => ' Baby porcupines are called “porcupettes”.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => ' Lasting only 38 minutes, the Anglo-Zanzibar War of 1896 is generally considered to be the shortest war in history.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'A group of flamingos is called a “flamboyance”.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'Many lipsticks contain fish scales.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'The medical term for a gurgling stomach is “borborygmus”.',
            'likes' => 0,
        ]);

        DB::table('facts')->insert([
            'fact' => 'When spliced together, there are 26 minutes of quiet staring in the Twilight film series.',
            'likes' => 0,
        ]);
    }

}
