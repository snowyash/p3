<?php

    class FUController extends BaseController {
     
        /**
         * show a view with form to get input
         */
        public function add() {
            return View::make( 'fake_user' );
        }
     
        /**
         * handle data posted by ajax request
         */
        public function create() {
            //check if its our form
            if ( Session::token() !== Input::get( '_token' ) ) {
                return Response::json( array(
                    'msg' => 'Unauthorized attempt to create setting'
                ) );
            }
            $userCount = Input::get( 'userCount' );

            $users = array();

            for($i = 0; $i < $userCount; $i++){
                $users[$i] = array();

                $faker = Faker\Factory::create();

                $users[$i]['name'] = $faker->name.'<br />';
                $users[$i]['bday'] = $faker->dateTimeThisCentury->format('Y-m-d').'<br />';
                $users[$i]['company'] = $faker->company.'<br />';
                $users[$i]['address'] = $faker->address.'<br />';
                $users[$i]['description'] = $faker->text(150).'<br />'.'<br />';
            }
     
            return Response::json(array('type' => 'message', 'msg' => $users));
        }

        //end of class
    }

