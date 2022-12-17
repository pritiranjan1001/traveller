<?php

namespace visitboard;

use Illuminate\Database\Eloquent\Model;

class Extrashot extends Model
{
      protected $table = 'travel_img'; 

    /**
     * profile posts updates
     * @access public
     * @param void
     * @return void
     */
    public static function get_view() { 
        try {
        	$all_view = static::orderBy('created_at', 'DESC')->limit(10)->get();
        	return $all_view;
        } catch (Exception $e) {
            Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }
	public static function get_view_line($id) {
    	$all_view_line = static::where('id', $id)->get();
    	return $all_view_line;
    }
}
