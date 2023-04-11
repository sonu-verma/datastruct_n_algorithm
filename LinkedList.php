<?php

    class Node{
        public $data;
        public $next;
        public function __construct($value){
            $this->data = $value;
            $this->next = null;
        }
    }
    
    class LinkedList {
        public $head;
        public $tail;
        public $lenght = 0;
        public function __construct($value){
            $node = new Node($value);
            $this->head = $node;
            $this->tail = $node;
            $this->lenght++;
        }
        
        //add at end
        public function push($value){
            $node = new Node($value);
            if(!$this->head){
                $this->head = $node;
            }else{
                $this->tail->next = $node;
                $this->tail = $node;
                $this->lenght++;
            }
            
        }
        //remove at end
        public function pop(){
            $temp = $this->head;
            $pre = $this->head;
            while($temp->next){
                $pre = $temp;
                $temp = $temp->next;
            }
           
           $this->tail = $pre;
           $this->tail->next = null;
           $this->lenght--;
           if($this->lenght == 0){
               $this->head = null;
               $this->tail = null;
           }
           
        }
        // add value at start
        public function unshift($value){
            $node = new Node($value);
            if(!$this->head){
                $this->head  = $node;
            }else{
                $temp = $this->head;
                $this->head = $node;
                $node->next = $temp;
            }
            $this->lenght++;
        }
        
        public function shift(){
            $temp = $this->head;
            if($this->lenght == 0 && $this->lenght == 1){
                $this->head = null;
                $this->head = null;
            }else{
                $this->head = $temp->next;
            }
            $this->lenght--;
        }
        
        public function get($index){
            if($index > $this->lenght && $index < $this->lenght){
                return false;
                exit;
            }
            $findOf = $index;
            $temp = $this->head;
            while($findOf > 0){
                $temp = $temp->next;
                $findOf--;
            }
            return $temp;
            //echo  'on '.$index.' index is having '.$temp->data.' values.';
        }
        
        public function set($index, $value){
            $getIndexData = $this->get($index);
            if($getIndexData){
                $getIndexData->data = $value;
            }
        }
        
        public function remove($index){
            $tempIndex = $index;
            if($index > $this->lenght && $index < $this->length){
                echo 'data not stored on that index';
                exit;
            }
            
            $before = $this->get($index-1);
            $temp = $before->next;
            
            $before->next = $temp->next;
            $temp->next = null;
            $this->lenght--;
        }
        
        public function showList(){
            $temp = $this->head;
            if(!$temp){
                echo "no items available.";
                exit;
            }
            while($temp){
                echo $temp->data;
                echo $temp->next?', ': '';
                $temp = $temp->next;
            }
             echo ' -> total added item is '.$this->lenght.".\n\r";
        }
    }
    
    $ll = new LinkedList(1);
    $ll->push(2);
    $ll->push(3);
    // $ll->pop();
    // $ll->unshift(0);
    // $ll->unshift(-1);
    // $ll->shift();
    // $ll->shift();
    $ll->showList();
    $ll->get(2);
    $ll->set(2,5);
    $ll->remove(1);
    $ll->remove(1);
    
    $ll->showList();
    //print_r($ll->head);
?>
