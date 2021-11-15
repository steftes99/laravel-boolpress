<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post-1',
                'content'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit erat in gravida sagittis. Ut dapibus fringilla enim, a mollis eros dignissim varius. In tincidunt dui vitae enim dictum rutrum. Duis congue vehicula ante, vitae pulvinar mauris rhoncus vel. In hac habitasse platea dictumst. Sed vel hendrerit libero. Nam sapien ante, tincidunt nec varius quis, vestibulum nec justo. Phasellus malesuada pharetra nisl vitae ultrices. Mauris euismod auctor erat et consectetur. Proin dictum, dolor vitae aliquam posuere, nibh libero dignissim eros, quis semper leo odio eu leo. Nunc porttitor et lacus ut suscipit. Duis fermentum risus eget lacus elementum faucibus. Sed dictum in ex nec consectetur. Aenean non lacinia quam. Pellentesque lobortis maximus felis, non tristique lorem sodales vel. Nulla ac est at purus imperdiet pretium nec eget tortor.',
                'author' => 'Pippo',
            ],
            [
                'title' => 'Post-2',
                'content'=> 'Donec ac tortor a nunc suscipit pulvinar. Quisque finibus lorem libero, sit amet cursus orci hendrerit id. Mauris sit amet dignissim mauris, sed malesuada enim. Etiam viverra nec felis ut pharetra. Nam at nibh sodales, congue magna vel, feugiat eros. Cras quis iaculis metus, nec malesuada quam. Vivamus dignissim metus non sem lacinia, ac malesuada ligula mattis. Praesent accumsan orci id dui elementum pulvinar. Sed dignissim tempor nibh, et rutrum tortor egestas in. Maecenas et arcu dignissim, tincidunt massa eget, convallis enim. Proin laoreet magna sed erat commodo, vel porttitor nunc dapibus.',
                'author' => 'Topolino',
            ],
            [
                'title' => 'Post-3',
                'content'=> 'Cras interdum molestie enim vestibulum gravida. Duis ut consectetur risus, vitae egestas ante. Sed sed dui sodales, egestas tortor id, laoreet risus. Proin laoreet vestibulum risus, porttitor pellentesque magna consequat sit amet. Integer pulvinar mauris quis vulputate lobortis. Ut volutpat maximus faucibus. Etiam tempus, sapien non accumsan viverra, est lorem bibendum nibh, ut malesuada augue purus id diam. Praesent ultrices est ut nunc rutrum aliquet. Proin posuere convallis erat, sed commodo ligula efficitur vel.',
                'author' => 'Il Gabibbo',
            ],
            [
                'title' => 'Post-4',
                'content'=> 'Phasellus fermentum risus dui, nec accumsan ante condimentum a. Cras et diam vel massa tristique mollis. Proin felis massa, gravida at eros a, laoreet elementum risus. Suspendisse porta dui finibus, laoreet lorem ac, lacinia nisi. Praesent rutrum leo ipsum, sed finibus arcu maximus quis. Aenean ac mauris turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur nisi ipsum, vestibulum sed nisl at, fermentum elementum tortor. Aenean non interdum tortor. Quisque ornare posuere porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'author' => 'Ezio Greggio',
            ]
            ];
        
        foreach($posts as $post)
        {
            $newPost = new Post();

            $newPost->fill($post);
            $newPost->save();
        }
    }
}
