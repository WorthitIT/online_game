<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FillRaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => "Humans",
            'images' => '[{"image" : "human-01.jpg"}, {"image" : "human-02.jpg"} ]',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla ante mauris, a fermentum tortor ornare et. Donec dapibus turpis suscipit, viverra sem eget, tristique justo. Vestibulum vel iaculis orci. Vivamus aliquet nulla et mauris lobortis, sit amet suscipit augue dapibus. Vestibulum tortor risus, luctus eget semper eget, ultricies non dolor. Praesent convallis nulla ac metus interdum, in vehicula urna elementum. Sed purus risus, luctus eu quam in, aliquet feugiat diam. Suspendisse dolor eros, interdum vel justo id, ullamcorper hendrerit augue. Morbi pulvinar tortor nisl, vel scelerisque risus sagittis quis. Duis vitae felis lectus. Sed turpis neque, mattis vel vestibulum sed, lacinia aliquet quam.

            Nam aliquam venenatis nisi, ut bibendum lacus lobortis quis. Suspendisse consectetur quam leo, quis porta tellus volutpat et. Nunc vel ante quis orci elementum ultricies. Phasellus in tellus a erat commodo scelerisque. Ut ut leo quis turpis ullamcorper malesuada at sed nisl. Sed faucibus, nisl ut ultrices blandit, mauris quam fermentum justo, eu porttitor justo urna pellentesque nisl. Etiam porttitor, turpis at lobortis porttitor, ante tellus ultrices ante, et lacinia lacus metus in quam. Fusce turpis leo, elementum nec est sed, pellentesque tristique nulla. Ut fringilla est eu dui efficitur placerat. Morbi pellentesque turpis viverra augue euismod cursus. Pellentesque et massa velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis est consequat, luctus est in, ultricies sem.'
        ]);
        DB::table('races')->insert([
            'name' => "Bots",
            'images' => '[{"image" : "robot-01.jpg"}, {"image" : "robot-02.jpg"} ]',
            'description' => 'Donec massa est, placerat ut elit sit amet, maximus efficitur nunc. Praesent eu consequat neque. Integer non lorem ac nibh volutpat feugiat. Praesent suscipit nibh orci, quis faucibus risus tincidunt in. Pellentesque a commodo purus. Donec id dui quis dui imperdiet viverra. Nulla non gravida purus. In accumsan ut tellus at lobortis. Nunc et auctor libero, in vestibulum odio. Curabitur eget hendrerit nunc. Mauris sagittis aliquet tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

            Pellentesque lectus arcu, porta eu odio quis, aliquam facilisis dolor. Vivamus quis metus id turpis placerat sagittis id et elit. Integer finibus quam enim, sit amet porttitor ante varius et. Mauris pellentesque, risus a varius sagittis, leo metus pulvinar ligula, ullamcorper bibendum leo ligula at odio. In pulvinar, est sit amet fermentum commodo, lacus nunc tempor eros, non fringilla purus est at enim. Suspendisse potenti. Nunc id arcu sit amet leo auctor feugiat. Nullam consequat, quam at finibus gravida, leo dui iaculis ante, nec sollicitudin metus eros in felis. Phasellus ligula sem, maximus at maximus ac, tincidunt ut libero. Mauris vestibulum est augue, et laoreet tellus tempus at. Duis mollis mauris a augue finibus, eu placerat massa pulvinar.'
        ]);
        DB::table('races')->insert([
            'name' => "Wookies",
            'images' => '[{"image" : "wookie-01.jpg"}, {"image" : "wookie-02.jpg"} ]',
            'description' => 'Donec pretium auctor rutrum. In convallis augue vitae purus vestibulum rutrum. Mauris auctor ipsum a est egestas mattis. Phasellus dapibus, nisl eget aliquam rutrum, purus quam tristique dolor, at placerat ligula leo convallis erat. Quisque elementum, leo ut commodo semper, arcu leo lacinia ipsum, at aliquet felis tellus congue justo. Phasellus pellentesque sapien nunc, eu tincidunt urna aliquet ut. Duis in facilisis lacus, at aliquet sem. Nullam augue ante, lobortis in accumsan quis, efficitur eu elit. Fusce blandit at risus ac imperdiet.

            Suspendisse potenti. Praesent rutrum mattis lorem non imperdiet. Vivamus venenatis nisi sit amet nibh tincidunt vulputate at in lorem. Fusce elementum felis ac tortor molestie, non suscipit diam mollis. Nulla turpis ante, commodo non eros ut, fermentum tempus elit. In hac habitasse platea dictumst. Donec ac pharetra nulla. Morbi pulvinar velit vel enim fermentum, id tincidunt dui convallis. Sed ullamcorper congue tellus eu placerat. Cras lacinia, ante non sagittis commodo, eros est volutpat elit, sit amet aliquam nulla risus eu sem. Aenean cursus ac odio in interdum. Vivamus diam ipsum, congue at cursus non, luctus sed risus. Integer porta tortor eu ligula finibus, a iaculis sapien porttitor. Ut bibendum eu felis sed maximus. Morbi a iaculis magna.
            '
        ]);
        DB::table('races')->insert([
            'name' => "Yoda's",
            'images' => '[{"image" : "yoda-01.jpg"}, {"image" : "yoda-02.jpg"} ]',
            "description" => 'Phasellus augue est, tincidunt id mauris sed, facilisis finibus dolor. Morbi bibendum odio a leo porttitor, at congue sapien tristique. Pellentesque facilisis, sapien at facilisis congue, augue nisl pretium quam, vitae euismod velit mauris facilisis lorem. Aliquam nisi eros, vehicula sit amet mauris eu, faucibus fringilla quam. Vivamus blandit varius arcu sit amet interdum. Aenean libero neque, faucibus sit amet leo ut, gravida mattis libero. Morbi posuere tincidunt leo ac imperdiet. Integer ultricies commodo purus, tincidunt vestibulum augue mattis vel. In et facilisis lorem.

            In orci turpis, vulputate id nisl rutrum, malesuada dapibus tellus. Fusce fringilla est ac aliquet commodo. Sed ullamcorper turpis non leo maximus laoreet. Ut varius magna nec viverra ornare. Duis sagittis purus dui, ac venenatis lorem eleifend sollicitudin. Aliquam erat volutpat. Sed nec pulvinar quam, fringilla pellentesque est. Maecenas eget nunc urna. Nulla sit amet sapien a massa iaculis imperdiet non ac justo. Pellentesque porttitor arcu nec placerat fringilla. Nulla facilisi. Proin vitae tortor et orci interdum accumsan. Phasellus condimentum dolor sed semper sodales. Sed posuere sollicitudin velit, eu rutrum erat commodo in. Ut scelerisque enim ut nibh porta, vel ultrices nulla facilisis. Sed a orci tortor.'
        ]);
    }
}
