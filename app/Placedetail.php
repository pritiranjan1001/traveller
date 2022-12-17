<?php

namespace visitboard;

use Illuminate\Database\Eloquent\Model;

class Placedetail extends Model
{
     protected $table = 'place_details';

    /**
     * profile posts updates
     * @access public
     * @param void
     * @return void
     */
     
    public static function get_view_line($id) {
        try {   
    	$all_view_line = static::where('id',$id)->get();
    	return $all_view_line;
        } catch (Exception $e) {
            Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }
}
