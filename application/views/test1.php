<select name="type">
    <option value="1">www.this.com</option>
    <option value="2">www.that.com</option>
    <option value="3" selected>www.theother.com</option>
</select>
<?php
$redis = new Redis(); //Initialization
$redis->connect('127.0.0.1', 6379); //Connect to local redis service

$redis->set("tutorial-name", "redis"); //Set redis string data
echo 'hello, '.$redis->get("tutorial-name"); //Get the stored data and output it
//Approximately what is the annual revenue for your organization?