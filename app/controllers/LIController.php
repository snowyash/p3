<?php

    class LIController extends BaseController {
     
        /**
         * show a view with form to get input
         */
        public function add() {
            return View::make( 'lorem_ipsum' );
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
            $parCount = Input::get( 'parCount' );

            $generator = new Badcow\LoremIpsum\Generator();
            $paragraphs = $generator->getParagraphs($parCount);
            $result = implode('<p><p>', $paragraphs);
     
            return Response::json(array('type' => 'message', 'msg' => $result));
        }
     
    //end of class
    }

