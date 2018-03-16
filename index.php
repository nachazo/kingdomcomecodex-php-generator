<?php
define("VALID", true);
codex::init();
die;

class codex
{
	public function init()
	{
		require_once("config.php");

		//exec("chmod -R 777 ./");

		if (is_dir($folder)) {
			deleteDir($folder);
		}
		if (!is_dir($folder)) {
			mkdir($folder);
		}

		ob_start();
		include_once("view_header.php");
		include_once("view_footer.php");
		$html_gen = ob_get_contents();
		ob_end_clean();

		$fileName = "{$folder}/index.html";
		if (file_exists($fileName)) unlink($fileName);
		file_put_contents($fileName, $html_gen);

		$perk_codex = "lang/all/perk_codex.xml";
		$perk_codex_file = file_get_contents($perk_codex);

		$action_map = "lang/all/action_map.xml";
		$action_map = readActionMap(file_get_contents($action_map));

		if (!is_dir($folder."/lang")) mkdir($folder."/lang");
		if (!is_dir($folder."/media")) mkdir($folder."/media");

		foreach ($lang_texts as $langfor=>$v) {
			print_r("<pre>"); print_r($langfor); print_r("</pre>");

			$texts = $lang_texts[$langfor];

			$text_ui_soul = "lang/".$langfor."/text_ui_soul.xml";
			$text_ui_menus = "lang/".$langfor."/text_ui_menus.xml";
			
			if (!file_exists($text_ui_soul) or !file_exists($text_ui_menus)) {
				continue;
			}

			$html_gen = null;

			$file_text_ui_menus = file_get_contents($text_ui_menus);
			//$titleCodex = getCodexTitle($file_text_ui_menus);
			$menu = prepareMenu($menu_orig, $file_text_ui_menus);
			$images = readImages($perk_codex_file, $fixations, $menu);
			$categorias = getCategories($images);
			$index = readCodex(file_get_contents($text_ui_soul), $valid_ids, true, $fixations);
			$index['ui_tutorial_name_combat_basic'] = getCombatTitle($file_text_ui_menus);
			$data = readCodex($file_text_ui_menus, $valid_ids, false, $fixations, $not_valid_ids);
			$data = putTitles($data, $index);
			$data = putCategories($data, $images);
			$data = array_csort($data, 'title', SORT_ASC);

			ob_start();
			include("view_body.php");
			$html_gen = ob_get_contents();
			ob_end_clean();

			print_r("<pre>"); print_r( md5($html_gen) ); print_r("</pre>");

			$fileName = "{$folder}/lang/{$langfor}.html";
			if (file_exists($fileName)) unlink($fileName);
			file_put_contents($fileName, $html_gen);

			unset($menu, $images, $categorias, $index, $data, $html_gen);
		}

		recurse_copy($mediaFolder, $folder."/media");

		die;
	}
}

function putTitles($data, $index)
{
	if (is_array($data) and is_array($index)) {
		foreach ($data as $key => $value) {
			$data[$key]['title'] = $index[$data[$key]['id']];
		}
	}
	return $data;
}

function getCodexTitle($xml)
{
	$res = readUiTab($xml, array("ui_tab_codex"));
	return $res['ui_tab_codex'];
}

function getCombatTitle($xml)
{
	$res = readUiTab($xml, array("ui_tab_combat"));
	return $res['ui_tab_combat'];
}

function prepareMenu($menu, $xml)
{
	if (is_array($menu)) {
		foreach ($menu as $k=>$v) {
			$tabs[] = $v['text'];
		}
		$data = readUiTab($xml, $tabs);
		foreach ($menu as $k=>$v) {
			$menu[$k]['text'] = $data[$v['text']];
		}
	}
	return $menu;
}

function putCategories($data, $images)
{
	if (is_array($data) and is_array($images)) {
		foreach ($data as $key => $value) {
			$data[$key]['category'] = $images[$data[$key]['id']]['tipo'];
		}
	}
	return $data;
}

function printNav($line, $texts, $markers = null, $mapLink, $bottom = false)
{
	if ($line) {
		$html = null;

		if (is_array($markers) and $mapLink!=false and $bottom==false) {
			if (@$markers[$line['id']]) {
				$zoom = 4;
				if (@$markers[$line['id']]['zoom']) {
					$zoom = $markers[$line['id']]['zoom'];
				}
				$spoiler = false;
				if (@$markers[$line['id']]['spoiler']) {
					$spoiler = $markers[$line['id']]['spoiler'];
				}
				$html .= '<div title="'.$texts['openInMap'].'" class="masterTooltip open-in-map map-top" onclick="openInMap(\''.$markers[$line['id']]['x'].'\', \''.$markers[$line['id']]['y'].'\', \''.$zoom.'\', \''.$spoiler.'\')"></div>';
			}
		}

		$html .= '

	<div id="nav-controls">
		<div class="arrow-left masterTooltip" title="'.$texts['previous'].'" onclick="previous(\''.$line['id'].'\')"></div>
		<div class="arrow-sep masterTooltip" title="'.$texts['viewMenu'].'" onclick="nav()"></div>
		<div class="wplus masterTooltip" title="'.$texts['plusSize'].'" onclick="plusWidth()"></div>
		<div class="wminus masterTooltip" title="'.$texts['minusSize'].'" onclick="minusWidth()"></div>';
		if ($bottom==true) {
			$html .= '
    	<div class="permalink-mobile masterTooltip" title="'.$texts['permalink'].'" onclick="permalink(\''.$line['id'].'\')"></div>';
		}
		if (is_array($markers) and $mapLink!=false) {
			$spaceMobile = "";
			if ($bottom==true) {
				$spaceMobile = " space-mobile";
			}
			if (@$markers[$line['id']]) {
				$zoom = 4;
				if (@$markers[$line['id']]['zoom']) {
					$zoom = $markers[$line['id']]['zoom'];
				}
				$spoiler = false;
				if (@$markers[$line['id']]['spoiler']) {
					$spoiler = $markers[$line['id']]['spoiler'];
				}
				$html .= '<div title="'.$texts['openInMap'].'" class="masterTooltip open-in-map-mobile'.$spaceMobile.'" onclick="openInMap(\''.$markers[$line['id']]['x'].'\', \''.$markers[$line['id']]['y'].'\', \''.$zoom.'\', \''.$spoiler.'\')"></div>';
			}
		}
		$html .= '
		<div id="read">
	        <div class="mark-as-read masterTooltip" title="'.$texts['mark-as-read'].'" onclick="markAsRead(\''.$line['id'].'\')" style="display:none"></div>
	        <div class="mark-as-unread masterTooltip" title="'.$texts['mark-as-unread'].'" onclick="markAsUnread(\''.$line['id'].'\')" style="display:none"></div>
	    </div>
		<div class="arrow-right masterTooltip" title="'.$texts['next'].'" onclick="next(\''.$line['id'].'\')"></div>
    </div>';

    	if (is_array($markers) and $mapLink!=false and $bottom==true)
    	{
			if (@$markers[$line['id']]) {
				$zoom = 4;
				if (@$markers[$line['id']]['zoom']) {
					$zoom = $markers[$line['id']]['zoom'];
				}
				$spoiler = false;
				if (@$markers[$line['id']]['spoiler']) {
					$spoiler = $markers[$line['id']]['spoiler'];
				}
				$html .= '<div title="'.$texts['openInMap'].'" class="masterTooltip open-in-map" onclick="openInMap(\''.$markers[$line['id']]['x'].'\', \''.$markers[$line['id']]['y'].'\', \''.$zoom.'\', \''.$spoiler.'\')"></div>';
			}
		}

    	if ($bottom==true) {
    	$html .= '
    <div class="permalink masterTooltip" title="'.$texts['permalink'].'" onclick="permalink(\''.$line['id'].'\')"></div>';
    	}
    	return $html;
	}
	return false;
}

function readActionMap($xmlString)
{
	if ($xmlString) {
		$xml = new SimpleXMLElement($xmlString);
		foreach ($xml->actionmap as $grupo) {
			foreach ($grupo->action as $action) {
				$id = (String)$action->attributes()->name;
				foreach ($action->rebind as $rebind) {
					$tecla = (String)$rebind->attributes()->input;
				}
				$final[$id] = $tecla;
			}
		}
		return $final;
	}
	return false;
}

function readImages($xmlString, $fixations, $menu)
{
	if ($xmlString) {
		$xml = new SimpleXMLElement($xmlString);
		foreach ($xml->table->rows->row as $element) {
			$id = (String)$element->attributes()->codex_ui_text;
			$id = replaceId($id, $fixations);
			$final[$id]['codex_ui_image'] = (String)$element->attributes()->codex_ui_image;
	        $final[$id]['codex_ui_layout_id'] = (String)$element->attributes()->codex_ui_layout_id;
	        $final[$id]['codex_ui_page_id'] = (String)$element->attributes()->codex_ui_page_id;
	        $final[$id]['codex_ui_text'] = (String)$element->attributes()->codex_ui_text;
	        $final[$id]['default_learned'] = (String)$element->attributes()->default_learned;
	        $aux = explode("_", (String)$element->attributes()->codex_ui_image);
	        $tmp = null;
	        if (!$aux[0]) {
	        	$aux = explode("_", (String)$element->attributes()->codex_ui_text);
	        	if ($aux[1]!="codex") {
		        	$tmp = $aux[1];
		        	unset($aux);
		        	$aux[0] = $tmp;
	        	} else {
	        		$aux[0] = "general";
	        	}
	        }	        
	        $final[$id]['tipo'] = fixCategory($aux[0], $menu);
		}
		return $final;
	}
	return false;
}

function getCategories($data)
{
	if (is_array($data)) {
		foreach ($data as $d) {
			$final[] = $d['tipo'];
		}
		$final = array_unique($final);
		return $final;
	}
	return false;
}

function readUiTab($xmlString, $uiTabs)
{
	if ($xmlString) {
		$xml = new SimpleXMLElement($xmlString);
		$i = 0;
		foreach ($xml->Row as $element) {
			$cual = 1;
			$id = null;
			foreach($element as $key => $val) {
				if ($cual==1) {
					$id = (string)$val;
				}
				if ($cual==3 and strposa($id, $uiTabs)) {
					$final[replaceId((string)$id)] = (string)$val;
				}
				$cual++;
			}
		}
		return $final;
	}
	return false;
}

function readCodex($xmlString, $valid_ids, $isIndex = false, $fixations = null, $not_valid_ids = null)
{
	if ($xmlString) {
		$xml = new SimpleXMLElement($xmlString);
		$i = 0;
		foreach ($xml->Row as $element) {
			$cual = 1;
			$id = null;
			foreach($element as $key => $val) {
				if ($cual==1) {
					$id = (string)$val;
				}
				if ($cual==3 and strposa($id, $valid_ids) and !strposa($id, $not_valid_ids)) {
					if ($isIndex==false) {
						$final[$i]['id'] = replaceId((string)$id, $fixations);
						$final[$i]['orig'] = (string)$id;
						$final[$i]['text'] = (string)$val;
					} else {
						$final[$id] = (string)$val;
					}
					$i++;
				}
				$cual++;
			}
		}
		return $final;
	}
	return false;
}

function fixCategory($category, $menu)
{
	if ($category) {
		foreach ($menu as $m=>$v) {
			if (is_array($v['cats'])) {
				foreach ($v['cats'] as $cat) {
					if ($cat==$category) {
						return $m;
					}
				}
			}
		}
	}
	return $category;
}

function fixTutorials($text, $actionMap)
{
	if ($text) {
		$text = htmlspecialchars_decode($text);
		$text = str_replace("img://Libs/UI/Textures/Dynamic", "media/codex", $text);
		$text = str_replace(".dds", ".png", $text);
		$text = str_replace('$', '<span class="key">', $text);
		$text = str_replace(';', '</span>', $text);
		$text = str_replace('{', '', $text);
		$text = str_replace('}', '', $text);
		$text = str_replace('|', ' ', $text);
		$text = str_replace('+', '', $text);
		$text = str_replace('. .', '.', $text);		
		foreach ($actionMap as $action=>$tecla) {
			$text = str_replace($action, $tecla, $text);
		}
	}
	return $text;
}

function replace_between($str, $needle_start, $needle_end, $replacement)
{
    $pos = strpos($str, $needle_start);
    $start = $pos === false ? 0 : $pos + strlen($needle_start);

    $pos = strpos($str, $needle_end, $start);
    $end = $pos === false ? strlen($str) : $pos;

    return substr_replace($str, $replacement, $start, $end - $start);
}

function replaceId($id, $fixations = null)
{
	if ($id) {	
		$id = str_replace("_cont_", "_name_", $id);
		$id = str_replace("_char_", "_name_", $id);
		if ($fixations) {
			foreach ($fixations as $k=>$v) {
				if ($k==$id) {
					$id = str_replace($k, $v, $id);
				}
			}
		}
	}
	return $id;
}

function doBolds($text)
{
	if ($text) {
		$text = str_replace('[', '<span class="bold">[', $text);
		$text = str_replace(']', ']</span>', $text);
	}
	return $text;
}

function strposa($haystack, $needle, $offset=0)
{
    if(!is_array($needle)) $needle = array($needle);
    foreach($needle as $query) {
        if(strpos($haystack, $query, $offset) !== false) return true;
    }
    return false;
}

function array_csort($marray, $columna, $asc_desc)
{
    foreach ($marray as $fila)
    {
        $sortarr[] = $fila[$columna];
    }
    if ($sortarr) array_multisort($sortarr, SORT_REGULAR, $asc_desc, $marray);
    return $marray;
}

function deleteDir($dirPath)
{
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

function recurse_copy($src,$dst)
{ 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 