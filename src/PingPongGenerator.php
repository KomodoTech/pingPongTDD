<?php
    class PingPongGenerator
    {
        //TODO: decide if this should be stored
        private $current_ping_pong_array;

        function __construct($ping_pong_array = array()) {
            print("constructed");
            $this->$current_ping_pong_array = $ping_pong_array;
        }


        function getCurrentPingPongArray() {
            return $this->current_ping_pong_array;
        }

        function setCurrentPingPongArray($new_ping_pong_array) {
            $this->current_ping_pong_array = $new_ping_pong_array;
        }

        function addElementToCurrentPingPongArray($element) {
            array_push($this->getCurrentPingPongArray(), $element);
        }


        //TODO: replace temporary debug code
        function generatePingPongArray($max_number) {
            print("array generated");

            $this->addElementToCurrentPingPongArray($max_number);

            for ($ping_pong_index = 0; $ping_pong_index < count($this->current_ping_pong_array); $ping_pong_index++) {
                print((string) $this->current_ping_pong_array[$ping_pong_index]);
            }
        }
    }
 ?>
