
<div class="separator codex-icons">
    <a id="icon-toggle-top" href="javascript:void(0);" title="<?=$texts['viewMenu']?>" onclick="nav()" class="masterTooltip">
        <img border="0" src="media/img/equip_mini.png" />
    </a>
    <a id="icon-codex-general" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['general']['text']?>" onclick="showOnly('general');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_1.png" />
    </a>
    <a id="icon-codex-location" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['location']['text']?>" onclick="showOnly('location');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_2.png" />
    </a>
    <a id="icon-codex-events" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['events']['text']?>" onclick="showOnly('events');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_3.png" />
    </a>
    <a id="icon-codex-society" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['society']['text']?>" onclick="showOnly('society');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_4.png" />
    </a>
    <a id="icon-codex-character" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['character']['text']?>" onclick="showOnly('character');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_5.png" />
    </a>
    <a id="icon-codex-tutorials" href="javascript:void(0);" title="<?=$texts['viewSection']?>: <?=$menu['tutorials']['text']?>" onclick="showOnly('tutorials');closeNav()" class="masterTooltip">
        <img border="0" src="media/img/codex_6.png" />
    </a>
    <br />
    <img src="media/img/questLog_line.png" />
</div>

<div id="menu" class="sidenav">
<? if ($debug) { ?>
[ &nbsp;&nbsp; 
<span onclick="showAll()">all</span> &nbsp;&nbsp; 
<span onclick="showOnly('')">blank</span> &nbsp;&nbsp; ]
<? } ?>
<a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
<a href="javascript:void(0);" class="resetbtn masterTooltip" onclick="reset()" title="<?=$texts['home']?>">
    <img src="media/img/icon_map_home.png" />
</a>
<input type="text" id="search" onkeyup="search(this)" placeholder="<?=$texts['search']?>">
<? foreach ($menu as $cat=>$v) {
    if ($cat) {
        echo '<div class="each-cat"><div class="title"><a href="javascript:void(0);" title="'.$v['text'].'" class="category-item" id="category_item_'.$cat.'" onclick="despliega(\''.$cat.'\')">'.$v['text'].'</a></div><div class="read-all masterTooltip" title="'.$texts['mark-as-read'].'" onclick="markAllAsRead(\''.$cat.'\')">&nbsp;</div> <div class="eye masterTooltip" title="'.$texts['category'].'" onclick="showOnly(\''.$cat.'\')">&nbsp;</div><div class="clear"></div></div>';
        foreach ($data as $line) {
            if ($line['category']==$cat) {
                echo '<a href="javascript:void(0);" title="'.$line['title'].'" style="display:none" id="menu_item_'.$line['id'].'" class="menu-item cat_'.$cat.'" onclick="showEntry(\''.$line['id'].'\', \''.$line['category'].'\')">· '.$line['title'];
                if (@$markers_common[$line['id']]) {
                    echo ' <span class="icon-location"></span>';
                }
                echo '</a>';
            }
        }
    }
}
echo '<div class="each-cat"><div class="title"><a title="'.$kcdMapLink.'" href="'.$kcdMapLink.'" target="_blank" class="category-item" id="category_item_map">'.$texts['mapOnline'].'</a></div> <div class="map">&nbsp;</div><div class="clear"></div> </div>';
?>
<div class="separator"><img src="media/img/questLog_line.png" /></div>
<div class="center"><img src="media/img/shield_codex.png" id="escudo" /></div>
<div>&nbsp;</div>

<svg height="0" xmlns="http://www.w3.org/2000/svg">
    <filter id="drop-shadow-svg">
        <feGaussianBlur in="SourceAlpha" stdDeviation="4"/>
        <feOffset dx="0" dy="0" result="offsetblur"/>
        <feFlood flood-color="rgba(0, 0, 0, 0.5)"/>
        <feComposite in2="offsetblur" operator="in"/>
        <feMerge>
            <feMergeNode/>
            <feMergeNode in="SourceGraphic"/>
        </feMerge>
    </filter>
</svg>
<svg height="0" xmlns="http://www.w3.org/2000/svg">
    <filter id="drop-shadow-svg-2">
        <feGaussianBlur in="SourceAlpha" stdDeviation="2"/>
        <feOffset dx="0" dy="0" result="offsetblur"/>
        <feFlood flood-color="rgba(0, 0, 0, 0.5)"/>
        <feComposite in2="offsetblur" operator="in"/>
        <feMerge>
            <feMergeNode/>
            <feMergeNode in="SourceGraphic"/>
        </feMerge>
    </filter>
</svg>

<div>&nbsp;</div>

</div>

<div id="entry" class="welcome">
    <div class="center"><img class="shadow logo" src="media/img/logo.png" /><br><div class="logo-codex"><?=$texts['codex']?></div></div>
    <p><?=$texts['welcome']?> <?=$texts['issues']?></p>
    <p><?=$texts['lang']?> <b><?=$texts['name']?></b>. <?=$texts['change']?></p>
    <div id="flags">
    <? foreach ($lang_texts as $lang=>$val) { ?>
    <img src="media/img/flag-<?=$lang?>.png" title="<?=$texts['changeLang']?> <?=$val['name']?>" class="shadow-flag masterTooltip" onclick="changeLang('<?=$lang?>')" /> 
    <? } ?>
    </div>
    <div class="center"><img src="media/img/angel.png" style="width:75%;" /></div>

    <div class="cookie-advise"><?=$texts['cookiesAdvise']?></div>

    <div class="cookie-delete-all" onclick="deleteAllCookies()">
        <div class="cookie-icon"></div> <?=$texts['cookiesDeleteAll']?>
    </div>

    <div class="separator"><img class="ornament" src="media/img/questLog_ornament.png" /></div>
    <div class="clear"></div>
</div>

<? foreach ($data as $line) { ?>
<? if ($debug) {
    if (!$index[$line['id']]) {
        $pop[] = $line['id'];
    }
} ?>

<div id="entry" class="<?=$line['category']?> <?=$line['id']?>">
    <?=printNav($line, $texts, $markers_common, $kcdMapLink);?>

    <h3><? echo $line['title']; ?><? if ($debug) { ?> [<? echo $line['id'];?>] [<?=$line['category']?>]<? } ?></h3>
    <?
    if ($images[$line['id']]['codex_ui_image']) {
        $class = null;
        $class_img = ' class="no-zoom lazyload '.$line['category'].'_img '.$line['id'].'_img"';
        if ($images[$line['id']]['codex_ui_layout_id']=="1") {
            $class = ' style="text-align:center"';
        } else {
            $class_img = ' style="float:right" class="lazyload column '.$line['category'].'_img '.$line['id'].'_img"';
        }
    ?>
    <p<?=$class?>><img<?=$class_img?> data-src="media/codex/<?=$images[$line['id']]['codex_ui_image']?>.png" /></p>
    <?
    }
    ?>
    <p><?
    if ($line['category']=="tutorials") $line['text'] = fixTutorials($line['text'], $action_map);
    echo doBolds($line['text']);
    ?><p>
    <div class="clear"></div>

    <div class="space-mobile">&nbsp;</div>
    
    <?=printNav($line, $texts, $markers_common, $kcdMapLink, true);?>

    <div class="separator"><img class="ornament" src="media/img/questLog_ornament.png" /></div>
</div>

<? } ?>
</div>

<div id="footer"><?=$texts['footer']?></div>
<? if ($debug) {
    foreach ($pop as $p) {
        echo '"'.$p.'" => "'.$p.'",';
        echo "<br />";
    }
} ?>
</div>

<div id="aviso-spoiler" style="display:none">
    <h3><?=$texts['spoilerModalTitle']?></h3>
    <p><?=$texts['spoilerModalText']?></p>
    <p id="yes-always"><?=$texts['spoilerModalYesAlways']?></p>
    <p id="yes-this"><?=$texts['spoilerModalYesThis']?></p>
    <p id="no-never"><?=$texts['spoilerModalNoNever']?></p>
</div>
