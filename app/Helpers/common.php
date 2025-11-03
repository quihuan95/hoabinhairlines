<?php

use App\Models\Menus;

$url = base_url(TRUE,TRUE);
define('MLIBPATH', $url);
function remove_mspace($string)
{
	return trim(preg_replace('/\s+/', ' ',$string));
}

function stripUnicode($str){
  if(!$str) return false;
   $unicode = array(
		'a' =>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
		'A' =>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'd' =>'đ',
		'D' =>'Đ',
		'e' =>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
		'E' =>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'i' =>'í|ì|ỉ|ĩ|ị',
		'I' =>'Í|Ì|Ỉ|Ĩ|Ị',
		'o' =>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
		'O' =>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'u' =>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
		'U' =>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'y' =>'ý|ỳ|ỷ|ỹ|ỵ',
		'Y' =>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
   );
	foreach($unicode as $khongdau=>$codau) {
		$arr=explode("|",$codau);
		$str = str_replace($arr,$khongdau,$str);

	}
	return $str;
}


function sanitize_title_with_dashes( $title, $raw_title = '', $context = 'display' ) {
	$title = stripUnicode($title);
	$title = strip_tags($title);
	// Preserve escaped octets.
	$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
	// Remove percent signs that are not part of an octet.
	$title = str_replace('%', '', $title);
	// Restore octets.
	$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

	if (seems_utf8($title)) {
		if (function_exists('mb_strtolower')) {
			$title = mb_strtolower($title, 'UTF-8');
		}
		$title = utf8_uri_encode($title, 200);
	}

	$title = strtolower($title);
	$title = preg_replace('/&.+?;/', '', $title); // kill entities
	$title = str_replace('.', '-', $title);

	if ( 'save' == $context ) {
		// Convert nbsp, ndash and mdash to hyphens
		$title = str_replace( array( '%c2%a0', '%e2%80%93', '%e2%80%94' ), '-', $title );

		// Strip these characters entirely
		$title = str_replace( array(
			// iexcl and iquest
			'%c2%a1', '%c2%bf',
			// angle quotes
			'%c2%ab', '%c2%bb', '%e2%80%b9', '%e2%80%ba',
			// curly quotes
			'%e2%80%98', '%e2%80%99', '%e2%80%9c', '%e2%80%9d',
			'%e2%80%9a', '%e2%80%9b', '%e2%80%9e', '%e2%80%9f',
			// copy, reg, deg, hellip and trade
			'%c2%a9', '%c2%ae', '%c2%b0', '%e2%80%a6', '%e2%84%a2',
			// acute accents
			'%c2%b4', '%cb%8a', '%cc%81', '%cd%81',
			// grave accent, macron, caron
			'%cc%80', '%cc%84', '%cc%8c',
		), '', $title );

		// Convert times to x
		$title = str_replace( '%c3%97', 'x', $title );
	}

	$title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
	$title = preg_replace('/\s+/', '-', $title);
	$title = preg_replace('|-+|', '-', $title);
	$title = trim($title, '-');

	return $title;
}

function seems_utf8($str) {
	mbstring_binary_safe_encoding();
	$length = strlen($str);
	reset_mbstring_encoding();
	for ($i=0; $i < $length; $i++) {
		$c = ord($str[$i]);
		if ($c < 0x80) $n = 0; // 0bbbbbbb
		elseif (($c & 0xE0) == 0xC0) $n=1; // 110bbbbb
		elseif (($c & 0xF0) == 0xE0) $n=2; // 1110bbbb
		elseif (($c & 0xF8) == 0xF0) $n=3; // 11110bbb
		elseif (($c & 0xFC) == 0xF8) $n=4; // 111110bb
		elseif (($c & 0xFE) == 0xFC) $n=5; // 1111110b
		else return false; // Does not match any model
		for ($j=0; $j<$n; $j++) { // n bytes matching 10bbbbbb follow ?
			if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
				return false;
		}
	}
	return true;
}
function mbstring_binary_safe_encoding( $reset = false ) {
    static $encodings = array();
    static $overloaded = null;

    if ( is_null( $overloaded ) )
        $overloaded = function_exists( 'mb_internal_encoding' ) && ( ini_get( 'mbstring.func_overload' ) & 2 );

    if ( false === $overloaded )
        return;

    if ( ! $reset ) {
        $encoding = mb_internal_encoding();
        array_push( $encodings, $encoding );
        mb_internal_encoding( 'ISO-8859-1' );
    }

    if ( $reset && $encodings ) {
        $encoding = array_pop( $encodings );
        mb_internal_encoding( $encoding );
    }
}
 function reset_mbstring_encoding() {
	mbstring_binary_safe_encoding( true );
}
function utf8_uri_encode( $utf8_string, $length = 0 ) {
	$unicode = '';
	$values = array();
	$num_octets = 1;
	$unicode_length = 0;

	mbstring_binary_safe_encoding();
	$string_length = strlen( $utf8_string );
	reset_mbstring_encoding();

	for ($i = 0; $i < $string_length; $i++ ) {

		$value = ord( $utf8_string[ $i ] );

		if ( $value < 128 ) {
			if ( $length && ( $unicode_length >= $length ) )
				break;
			$unicode .= chr($value);
			$unicode_length++;
		} else {
			if ( count( $values ) == 0 ) {
				if ( $value < 224 ) {
					$num_octets = 2;
				} elseif ( $value < 240 ) {
					$num_octets = 3;
				} else {
					$num_octets = 4;
				}
			}

			$values[] = $value;

			if ( $length && ( $unicode_length + ($num_octets * 3) ) > $length )
				break;
			if ( count( $values ) == $num_octets ) {
				for ( $j = 0; $j < $num_octets; $j++ ) {
					$unicode .= '%' . dechex( $values[ $j ] );
				}

				$unicode_length += $num_octets * 3;

				$values = array();
				$num_octets = 1;
			}
		}
	}

	return $unicode;
}


function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
function category_parent($data,$parent = 0,$str="&nbsp;",$select=0)
{
	foreach ($data as $val) {
		$id = $val->id;
		$name = $val->name;
		if ($val->parent == $parent) {
			if ($select != 0 && $id == $select) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			} else {
				echo "<option value='$id'>$str $name</option>";
			}
			permission_parent ($data,$id,$str."&nbsp;&nbsp;",$select);
		}
	}
}
function permission_parent ($data,$parent = 0,$str="&nbsp;",$select=0) {

	foreach ($data as $val) {
		$id = $val->id;
		$name = $val->name;
		if ($val->parent == $parent) {
			if ($select != 0 && $id == $select) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			} else {
				echo "<option value='$id'>$str $name</option>";
			}
			permission_parent ($data,$id,$str."&nbsp;&nbsp;",$select);
		}
	}
}
function menu_item_parent($data,$parent = 0,$str="&nbsp;",$select=0)
{
	foreach ($data as $val) {
		$id = $val->id;
		$name = $val->label;
		if ($val->parent == $parent) {
			if ($select != 0 && $id == $select) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			} else {
				echo "<option value='$id'>$str $name</option>";
			}
			menu_item_parent ($data,$id,$str."&nbsp;&nbsp;",$select);
		}
	}
}
function permission_table ($data,$parent = 0,$str="",$select=0) {
	foreach ($data as $val) {
		$id = $val->id;
		$slug = $val->slug;
		$name = $val->name;
		$description = $val->description;
		if ($val->parent == $parent) {

            echo '<tr >
                                            <td> '.$str.$name.' </td>
                                            <td>'.$description.'</td>
                                            <td>'.$slug.'</td>
                                            <td><a href="'. URL::route('admin.permission.getEdit',array($val->id)) .'" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                      <a href=""' . URL::route('admin.permission.getDelete',array($val->id)) .'" data-toggle="tooltip"  class="confirmbox" data-title="Xác nhận xóa" data-content="Bạn có chắc chắn muốn xóa ?"> <i class="fa fa-close text-danger m-r-10"></i> </a>
 </td>
                                        </tr>';

			permission_table ($data,$id,$str."—&nbsp;",$select);
		}
	}
}

function category_table($data,$parent = 0,$str="",$select=0)
{
	foreach ($data as $val) {
		$id = $val->id;
		$slug = $val->slug;
		$name = $val->name;
		$description = $val->description;
		if ($val->parent == $parent) {

            echo '<tr >
                                            <td> '.$str.'<a href="'.url("/chuyen-muc/".$slug).'" target="_blank">'.$name.'</a> </td>
                                            <td>'.strip_tags($description).'</td>
                                          
                                            <td><a href="'. URL::route('admin.category.edit',array($val->id)) .'" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                      <a href="' . URL::route('admin.category.delete',array($val->id)) .'" data-toggle="tooltip"  class="confirmbox" data-title="Xác nhận xóa" data-content="Bạn có chắc chắn muốn xóa ?"> <i class="fa fa-close text-danger m-r-10"></i> </a>
 </td>
                                        </tr>';

			category_table ($data,$id,$str."—&nbsp;",$select);
		}
	}
}
function menu_table($data,$parent = 0,$str="")
{
	foreach ($data as $val) {
		$id = $val->id;

		$name = $val->label;

		if ($val->parent == $parent) {

            echo '<td>
                                                                '.$str.'<input type="checkbox" id="md_checkbox_'.$id.'" class="filled-in chk-col-indigo"  name="row_ids[]">
                                                                <label for="md_checkbox_'.$id.'" style="margin-bottom: 0;">'.$name.'</label>
                                                            
            <td class="text-nowrap text-center"><input type="number" value="'.$val->order_num.'" style="width:40px;text-align:center;"></td>
                                                            </td> <td class="text-nowrap text-center">
                                                    <a href="'.route('admin.menuitem.edit',['id'=>$val->menu_id,'itemid'=>$val->id]).'" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>


                                                    <a href="'.route('admin.menuitem.delete',array($val->menu_id,$val->id)) .'" data-toggle="tooltip" class="confirmbox" data-title="Xác nhận xóa" data-content="Bạn có chắc chắn muốn xóa ?" > <i class="fa fa-close text-danger m-r-10"></i> </a>




                                                </td>
                                            </tr>';

			menu_table ($data,$id,$str."  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
		}
	}
}

function get_meta($data,$meta_key)
{
	foreach ($data as $key => $value) {
		if ($value->meta_key == $meta_key) {
			return $value->meta_value;
		}
	}
}

function cate_parent_with_box ($data,$parent = 0,$str="",$select) {


	echo '<ul class="category_box ms-list">';
	foreach ($data as $val) {
		$id = $val->id;
		//$term_taxonomy_id = $val->term_taxonomy_id;
		$name = $val->name;

		if ($val->parent == $parent) {
			if (!empty($select)) {
				$checked = '';
				foreach ($select as $value) {
					//echo $id;
					if ($value->cat_id != 0 && $id == $value->cat_id) {
					//echo "<option value='$id' selected='selected'>$str $name</option>";
					$checked = 'checked';

					}

					}
					// echo "<li><label>$str<input type='checkbox' name='term_id[]' ".$checked." value='$id'>$str $name</label>";
					echo '<li>'.$str.'
                                            <input name="term_id[]" type="checkbox" id="md_checkbox_'.$id.'" class="filled-in chk-col-red" '.$checked.' value="'.$id.'"">
                                    <label for="md_checkbox_'.$id.'">'.$str. $name.'</label>
                                        </li>';
			}else{
				if ($select != 0 && $id == $select) {


					echo '<li>'.$str.'
                                            <input name="term_id[]" type="checkbox" id="md_checkbox_'.$id.'" class="filled-in chk-col-red" checked value="'.$id.'"">
                                    <label for="md_checkbox_'.$id.'">'.$str. $name.'</label>
                                        </li>';
					} else {


						echo '<li>'.$str.'
                                            <input name="term_id[]" type="checkbox" id="md_checkbox_'.$id.'" class="filled-in chk-col-red"  value="'.$id.'"">
                                    <label for="md_checkbox_'.$id.'">'.$str .$name.'</label>
                                        </li>';
					}

			}

			cate_parent_with_box ($data,$id,$str."",$select);


		}


	}
	echo '</li></ul>';
}




function get_setting_meta($data,$meta_key)
{
	foreach ($data as $key => $value) {
		if ($value->name == $meta_key) {
			return $value->value;
		}
	}
}
function filePathParts($arg1) {

$arg1 = pathinfo($arg1);
echo @$arg1['filename'], "\n";
}


function has_parent($categories,$itemid)
{
	 $hasparent = false;
	  foreach ($categories as  $category) {
			  	if ($itemid == $category->parent) {
			 		 $hasparent = true;
			 		 break;
			  	}
	  }
	 return $hasparent;
}
