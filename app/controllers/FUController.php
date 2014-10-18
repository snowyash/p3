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

            $users = "";
            for($i = 0; $i < $userCount; $i++){
                $faker = Faker\Factory::create();
                $users .= ($i+1).') Name: '.$faker->name.'<br />';
                $users .= 'Address: '.$faker->address.'<br />';
                $users .= 'Description: '.$faker->text.'<br />'.'<br />';
            }
     
            return Response::json(array('type' => 'message', 'msg' => $users));
        }

        //end of class
    }

