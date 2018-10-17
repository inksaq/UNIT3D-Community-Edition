<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'forum_id' => 1,
                'group_id' => 1,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'forum_id' => 1,
                'group_id' => 2,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            2 =>
            array (
                'id' => 3,
                'forum_id' => 1,
                'group_id' => 3,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'forum_id' => 1,
                'group_id' => 4,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'forum_id' => 1,
                'group_id' => 5,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            5 =>
            array (
                'id' => 6,
                'forum_id' => 1,
                'group_id' => 6,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'forum_id' => 1,
                'group_id' => 7,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            7 =>
            array (
                'id' => 8,
                'forum_id' => 1,
                'group_id' => 8,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            8 =>
            array (
                'id' => 9,
                'forum_id' => 1,
                'group_id' => 9,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            9 =>
            array (
                'id' => 10,
                'forum_id' => 1,
                'group_id' => 10,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'forum_id' => 1,
                'group_id' => 11,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            11 =>
            array (
                'id' => 12,
                'forum_id' => 1,
                'group_id' => 12,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'forum_id' => 1,
                'group_id' => 13,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            13 =>
            array (
                'id' => 14,
                'forum_id' => 1,
                'group_id' => 14,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            14 =>
            array (
                'id' => 15,
                'forum_id' => 1,
                'group_id' => 15,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            15 =>
            array (
                'id' => 16,
                'forum_id' => 1,
                'group_id' => 16,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'forum_id' => 1,
                'group_id' => 17,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            17 =>
            array (
                'id' => 18,
                'forum_id' => 1,
                'group_id' => 18,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            18 =>
            array (
                'id' => 19,
                'forum_id' => 2,
                'group_id' => 1,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            19 =>
            array (
                'id' => 20,
                'forum_id' => 2,
                'group_id' => 2,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            20 =>
            array (
                'id' => 21,
                'forum_id' => 2,
                'group_id' => 3,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'forum_id' => 2,
                'group_id' => 4,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            22 =>
            array (
                'id' => 23,
                'forum_id' => 2,
                'group_id' => 5,
                'show_forum' => 0,
                'read_topic' => 0,
                'reply_topic' => 0,
                'start_topic' => 0,
            ),
            23 =>
            array (
                'id' => 24,
                'forum_id' => 2,
                'group_id' => 6,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            24 =>
            array (
                'id' => 25,
                'forum_id' => 2,
                'group_id' => 7,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            25 =>
            array (
                'id' => 26,
                'forum_id' => 2,
                'group_id' => 8,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            26 =>
            array (
                'id' => 27,
                'forum_id' => 2,
                'group_id' => 9,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            27 =>
            array (
                'id' => 28,
                'forum_id' => 2,
                'group_id' => 10,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            28 =>
            array (
                'id' => 29,
                'forum_id' => 2,
                'group_id' => 11,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            29 =>
            array (
                'id' => 30,
                'forum_id' => 2,
                'group_id' => 12,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            30 =>
            array (
                'id' => 31,
                'forum_id' => 2,
                'group_id' => 13,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            31 =>
            array (
                'id' => 32,
                'forum_id' => 2,
                'group_id' => 14,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            32 =>
            array (
                'id' => 33,
                'forum_id' => 2,
                'group_id' => 15,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            33 =>
            array (
                'id' => 34,
                'forum_id' => 2,
                'group_id' => 16,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            34 =>
            array (
                'id' => 35,
                'forum_id' => 2,
                'group_id' => 17,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            35 =>
            array (
                'id' => 36,
                'forum_id' => 2,
                'group_id' => 18,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            36 =>
            array (
                'id' => 37,
                'forum_id' => 1,
                'group_id' => 19,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            37 =>
            array (
                'id' => 38,
                'forum_id' => 2,
                'group_id' => 19,
                'show_forum' => 1,
                'read_topic' => 1,
                'reply_topic' => 1,
                'start_topic' => 1,
            ),
            38 =>
                array (
                    'id' => 39,
                    'forum_id' => 1,
                    'group_id' => 20,
                    'show_forum' => 0,
                    'read_topic' => 0,
                    'reply_topic' => 0,
                    'start_topic' => 0,
                ),
            39 =>
                array (
                    'id' => 40,
                    'forum_id' => 1,
                    'group_id' => 21,
                    'show_forum' => 0,
                    'read_topic' => 0,
                    'reply_topic' => 0,
                    'start_topic' => 0,
                ),
            40 =>
                array (
                    'id' => 41,
                    'forum_id' => 2,
                    'group_id' => 20,
                    'show_forum' => 0,
                    'read_topic' => 0,
                    'reply_topic' => 0,
                    'start_topic' => 0,
                ),
            41 =>
                array (
                    'id' => 42,
                    'forum_id' => 2,
                    'group_id' => 21,
                    'show_forum' => 0,
                    'read_topic' => 0,
                    'reply_topic' => 0,
                    'start_topic' => 0,
                ),
        ));
    }
}
