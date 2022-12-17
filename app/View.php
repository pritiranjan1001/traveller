<?php

namespace visitboard;

use Illuminate\Database\Eloquent\Model;

use Auth; 

class View extends Model
{
    protected $table = 'views';

    /** 
     * profile posts updates
     * @access public
     * @param void
     * @return void
     */

    public static function get_view() {
        try {    
    	    $all_view = static::orderBy('views.created_at', 'DESC')
                                ->leftJoin('users' ,'users.id' , '=' ,'views.user_id')
                                ->select( 'views.id' , 'views.im_url' , 'views.hd_name' , 'views.ab_details' , 'views.q_otes' , 'views.v_hours' , 'views.a_ddress' , 'views.best_points', 'views.bt_url' , 'views.r_cipies' , 'views.btimg_url' , 'views.l_address' , 'users.name','users.avatar' )
                                ->paginate(12);
    	    return $all_view;
            } catch (Exception $e) {
                Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }

    public static function get_profile_view() {
        try { 
        $all_view = static::orderBy('created_at', 'DESC')->where('user_id',Auth::user()->id) ->paginate(12);
        return $all_view;
         } catch (Exception $e) {
                Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }
    public static function get_view_line($id) {
        try { 
    	$all_view_line = static::where('views.id',$id)
                                ->join('users' ,'users.id' , '=' ,'views.user_id')
                                ->select( 'views.id' , 'views.im_url' , 'views.hd_name' , 'views.ab_details' , 'views.q_otes' , 'views.v_hours' , 'views.a_ddress' , 'views.best_points', 'views.bt_url' , 'views.r_cipies' , 'views.btimg_url' , 'views.l_address' , 'users.name','users.avatar' )
                                ->get();
    	    return $all_view_line;
            } catch (Exception $e) {
                Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    } 


    public static function get_ajax_posts() {
        try { 
        $all_view_line = static::orderBy('created_at', 'DESC')->limit(10)->get();
        return $all_views_line;
        } catch (Exception $e) {
                Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }

    public static function get_view_user_id($id) {
        try { 
        $all_view_line = static::where('id',$id)->get(); 
        return $all_view_line;
        } catch (Exception $e) {
                Log::error('Class:' . __CLASS__ . ' Method:' . __METHOD__ . ' Line:' .__LINE__. ' Error:' . $e);
            return false;
        }
    }
}
  