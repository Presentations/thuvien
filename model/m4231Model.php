<?php
/**
 * Project: thuvien.
 * File: m4231Model.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 17:46 - 17/10/2013
 * Website: www.xiao.vn
 */
Class m4231Model extends baseModel
{
    public function baicungmon($mon,$limit = 5)
    {
        if(isset($mon) && $mon != "")
        {
            global $db;
            $db->query("SELECT * FROM xiaob_book WHERE booksubj = '".$mon."' ORDER BY bookid DESC LIMIT ".$limit);
            if($db->num_row())
            {
                return $db->fetch_object();
            }
            else
            {
                return null;
            }
        }
        else
        {
            return null;
        }
    }
}