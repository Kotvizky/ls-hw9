<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 29,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Поиск по тегу',
    'longtitle' => '',
    'description' => '',
    'alias' => 'poisk-po-tegu',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 10,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1492708309,
    'editedby' => 1,
    'editedon' => 1492708976,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1492708260,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'poisk-po-tegu',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'thumb' => 
    array (
      0 => 'thumb',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'image' => 
    array (
      0 => 'image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="ru">

<head>
        <title>Поиск по тегу | Туристик</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/template/css/libs.min.css">
    <link rel="stylesheet" href="/assets/template/css/main.css">
    <link rel="stylesheet" href="/assets/template/css/media.css">
</head>

<body>
    <div class="wrapper">
              <header class="main-header">
        <div class="top-header">
          <div class="top-header__wrap">
            <div class="logotype-block">
              <div class="logo-wrap"><a href="/"><img src="/assets/template/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
            <nav class="main-navigation">
                <ul class="nav-list">
                    <li class="nav-list__nav-item"><a href="/"  class="nav-list__nav-item__nav-link">Главная</a></li>            
                    <li class="nav-list__nav-item"><a href="/poleznaya-informacziya/"  class="nav-list__nav-item__nav-link">Полезная информация</a></li><li class="nav-list__nav-item"><a href="/o-servise"  class="nav-list__nav-item__nav-link">О сервисе</a></li><li class="nav-list__nav-item"><a href="/novosty/"  class="nav-list__nav-item__nav-link">Новости</a></li><li class="nav-list__nav-item"><a href="/poslednie-akczii/"  class="nav-list__nav-item__nav-link">Последние акции</a></li>            
                </ul>
            </nav>
          </div>
        </div>
        <div class="bottom-header">
          <div class="search-form-wrap">
            [[!SimpleSearchForm? &landing=`30` &tpl=`head_search_form`]]
          </div>
        </div>
      </header>

        <!-- header_end-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="content">
                    <h1 class="title-page">Поиск по тегу</h1>
                    Получаем стати

[[!pdoPage?
  &element = `pdoResources`
  &limit=`2`
  &loadModels=`tagger`
  &class=`TaggerTagResource`
  &leftJoin=`{
    "NameTag": {
      "class": "TaggerTag",
      "on": "TaggerTagResource.tag = NameTag.id"
    },
    "Posts": {
      "class": "modResource",
      "on": "TaggerTagResource.resource = Posts.id"
    }
  }`
  &select=`{
    "TaggerTagResource": "*",
    "NameTag": "NameTag.tag, NameTag.alias",
    "Posts": "Posts.id, Posts.pagetitle, Posts.description"
  }`
  &where=`{
    "NameTag.alias": "[[!#GET.tag]]"
  }`
  &sortby=`TaggerTagResource.resource`
  &sortdir=`ASC`  
  &tplWrapper =`@INLINE <h2 class="h3">Всего результатов: [[+page.total]]</h2>[[+output]]`
  &tpl= `chunkTagRow`
]]
[[!+page.nav]]
                </div>
                <!-- sidebar-->
                <div class="sidebar">
                    <div class="sidebar__sidebar-item">              
    <div class="sidebar-item__title">Теги</div>
    <div class="sidebar-item__content">
    [[+tags]]
    </div>
</div>
                    <div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
            
            <ul class="category-list"><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из столиц12</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/moskva-capital/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/sankt-peterburg-capital/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из регионов13</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/moskva-region/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/sankt-peterburg-region/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li></ul>

    </div>
</div>
                </div>
            </div>
        </div>
              <footer class="main-footer">
        <div class="content-footer">
          <div class="bottom-menu">
              <ul class="b-menu__list"><li class="b-menu__list__item"><a href="//"  class="b-menu__list__item__link">Главная</a></li><li class="b-menu__list__item"><a href="/poleznaya-informacziya/"  class="b-menu__list__item__link">Полезная информация</a></li><li class="b-menu__list__item"><a href="/calendar/"  class="b-menu__list__item__link">Календарь</a></li><li class="b-menu__list__item"><a href="/o-servise"  class="b-menu__list__item__link">О сервисе</a></li><li class="b-menu__list__item"><a href="/poslednie-akczii/"  class="b-menu__list__item__link">Последние акции</a></li></ul>            
          </div>
          <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2017</a></div>
          </div>
        </div>
      </footer>
    </div>
    <!-- wrapper_end-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/assets/template/js/main.js"></script>

</body>

</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '    <title>Поиск по тегу | Туристик</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/template/css/libs.min.css">
    <link rel="stylesheet" href="/assets/template/css/main.css">
    <link rel="stylesheet" href="/assets/template/css/media.css">',
    '[[pdoMenu?
                        &parents=`0`
                        &resources = `1`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]' => '<li class="nav-list__nav-item"><a href="/"  class="nav-list__nav-item__nav-link">Главная</a></li>',
    '[[pdoMenu?
                        &parents=`0`
                        &resources = `2,3,4,6`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="/[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]' => '<li class="nav-list__nav-item"><a href="/poleznaya-informacziya/"  class="nav-list__nav-item__nav-link">Полезная информация</a></li><li class="nav-list__nav-item"><a href="/o-servise"  class="nav-list__nav-item__nav-link">О сервисе</a></li><li class="nav-list__nav-item"><a href="/novosty/"  class="nav-list__nav-item__nav-link">Новости</a></li><li class="nav-list__nav-item"><a href="/poslednie-akczii/"  class="nav-list__nav-item__nav-link">Последние акции</a></li>',
    '[[$header-main]]' => '      <header class="main-header">
        <div class="top-header">
          <div class="top-header__wrap">
            <div class="logotype-block">
              <div class="logo-wrap"><a href="/"><img src="/assets/template/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
            <nav class="main-navigation">
                <ul class="nav-list">
                    <li class="nav-list__nav-item"><a href="/"  class="nav-list__nav-item__nav-link">Главная</a></li>            
                    <li class="nav-list__nav-item"><a href="/poleznaya-informacziya/"  class="nav-list__nav-item__nav-link">Полезная информация</a></li><li class="nav-list__nav-item"><a href="/o-servise"  class="nav-list__nav-item__nav-link">О сервисе</a></li><li class="nav-list__nav-item"><a href="/novosty/"  class="nav-list__nav-item__nav-link">Новости</a></li><li class="nav-list__nav-item"><a href="/poslednie-akczii/"  class="nav-list__nav-item__nav-link">Последние акции</a></li>            
                </ul>
            </nav>
          </div>
        </div>
        <div class="bottom-header">
          <div class="search-form-wrap">
            [[!SimpleSearchForm? &landing=`30` &tpl=`head_search_form`]]
          </div>
        </div>
      </header>
',
    '[[$article-title]]' => '<h1 class="title-page">Поиск по тегу</h1>',
    '[[$get_article_by_tag]]' => 'Получаем стати

[[!pdoPage?
  &element = `pdoResources`
  &limit=`2`
  &loadModels=`tagger`
  &class=`TaggerTagResource`
  &leftJoin=`{
    "NameTag": {
      "class": "TaggerTag",
      "on": "TaggerTagResource.tag = NameTag.id"
    },
    "Posts": {
      "class": "modResource",
      "on": "TaggerTagResource.resource = Posts.id"
    }
  }`
  &select=`{
    "TaggerTagResource": "*",
    "NameTag": "NameTag.tag, NameTag.alias",
    "Posts": "Posts.id, Posts.pagetitle, Posts.description"
  }`
  &where=`{
    "NameTag.alias": "[[!#GET.tag]]"
  }`
  &sortby=`TaggerTagResource.resource`
  &sortdir=`ASC`  
  &tplWrapper =`@INLINE <h2 class="h3">Всего результатов: [[+page.total]]</h2>[[+output]]`
  &tpl= `chunkTagRow`
]]
[[!+page.nav]]',
    '[[$sidebar-tags]]' => '<div class="sidebar__sidebar-item">              
    <div class="sidebar-item__title">Теги</div>
    <div class="sidebar-item__content">
    [[+tags]]
    </div>
</div>',
    '[[pdoMenu?
                &parents=`3`
                &tplOuter=`@INLINE <ul class="category-list">[[+wrapper]]</ul>`
                &tplParentRow=`@INLINE <li class="category-list__item">
                    <a href="/" class="category-list__item__link">[[+menutitle]][[+id]]</a>[[+wrapper]]</li>`
                &tplInner=`@INLINE <ul class="category-list__inner">[[+wrapper]]</ul>`
                &tpl = `@INLINE <li class="category-list__item"><a href="/[[+link]]"  class="category-list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                &level = `2`
            ]]' => '<ul class="category-list"><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из столиц12</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/moskva-capital/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/sankt-peterburg-capital/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из регионов13</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/moskva-region/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/sankt-peterburg-region/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li></ul>',
    '[[$sidebar-category]]' => '<div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
            
            <ul class="category-list"><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из столиц12</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/moskva-capital/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-stolicz/sankt-peterburg-capital/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li><li class="category-list__item">
                    <a href="/" class="category-list__item__link">Вылеты из регионов13</a><ul class="category-list__inner"><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/moskva-region/"  class="category-list__item__link">Москва</a></li><li class="category-list__item"><a href="/poslednie-akczii/vyiletyi-iz-regionov/sankt-peterburg-region/"  class="category-list__item__link">Санкт-Петербург</a></li></ul></li></ul>

    </div>
</div>',
    '[[pdoMenu?
                    &parents=`0`
                    &resources = `1,2,3,4,31`
                    &tplOuter =	`@INLINE <ul class="b-menu__list">[[+wrapper]]</ul>`
                    &tpl = `@INLINE <li class="b-menu__list__item"><a href="/[[+link]]"  class="b-menu__list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                 ]]' => '<ul class="b-menu__list"><li class="b-menu__list__item"><a href="//"  class="b-menu__list__item__link">Главная</a></li><li class="b-menu__list__item"><a href="/poleznaya-informacziya/"  class="b-menu__list__item__link">Полезная информация</a></li><li class="b-menu__list__item"><a href="/calendar/"  class="b-menu__list__item__link">Календарь</a></li><li class="b-menu__list__item"><a href="/o-servise"  class="b-menu__list__item__link">О сервисе</a></li><li class="b-menu__list__item"><a href="/poslednie-akczii/"  class="b-menu__list__item__link">Последние акции</a></li></ul>',
    '[[$footer]]' => '      <footer class="main-footer">
        <div class="content-footer">
          <div class="bottom-menu">
              <ul class="b-menu__list"><li class="b-menu__list__item"><a href="//"  class="b-menu__list__item__link">Главная</a></li><li class="b-menu__list__item"><a href="/poleznaya-informacziya/"  class="b-menu__list__item__link">Полезная информация</a></li><li class="b-menu__list__item"><a href="/calendar/"  class="b-menu__list__item__link">Календарь</a></li><li class="b-menu__list__item"><a href="/o-servise"  class="b-menu__list__item__link">О сервисе</a></li><li class="b-menu__list__item"><a href="/poslednie-akczii/"  class="b-menu__list__item__link">Последние акции</a></li></ul>            
          </div>
          <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2017</a></div>
          </div>
        </div>
      </footer>',
    '[[$scripts]]' => '    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/assets/template/js/main.js"></script>
',
    '[[%sisea.search? &namespace=`sisea` &topic=`default`]]' => 'Поиск',
    '[[pdoResources?tpl=`chunkTagRow`&returnIds=``&showLog=``&fastMode=``&sortby=`TaggerTagResource.resource`&sortbyTV=``&sortbyTVType=``&sortdir=`ASC`&sortdirTV=`ASC`&limit=`2`&offset=`0`&depth=`10`&outputSeparator=`
`&toPlaceholder=``&parents=``&includeContent=``&includeTVs=``&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&tvFilters=``&tvFiltersAndDelimiter=`,`&tvFiltersOrDelimiter=`||`&where=`{
    "NameTag.alias": "shoping"
  }`&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&context=``&idx=``&first=``&last=``&tplFirst=``&tplLast=``&tplOdd=``&tplWrapper=`@INLINE <h2 class="h3">Всего результатов: [[+page.total]]</h2>[[+output]]`&wrapIfEmpty=``&totalVar=`page.total`&resources=``&tplCondition=``&tplOperator=`==`&conditionalTpls=``&select=`{
    "TaggerTagResource": "*",
    "NameTag": "NameTag.tag, NameTag.alias",
    "Posts": "Posts.id, Posts.pagetitle, Posts.description"
  }`&toSeparatePlaceholders=``&loadModels=`tagger`&scheme=``&useWeblinkUrl=``&plPrefix=``&maxLimit=`100`&page=`1`&pageVarKey=`page`&pageLimit=`5`&element=`pdoResources`&pageNavVar=`page.nav`&pageCountVar=`pageCount`&pageLinkScheme=``&tplPage=`@INLINE <li><a href="[[+href]]">[[+pageNo]]</a></li>`&tplPageWrapper=`@INLINE <div class="pagination"><ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul></div>`&tplPageActive=`@INLINE <li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&tplPageFirst=`@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_first]]</a></li>`&tplPageLast=`@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_last]]</a></li>`&tplPagePrev=`@INLINE <li class="control"><a href="[[+href]]">&laquo;</a></li>`&tplPageNext=`@INLINE <li class="control"><a href="[[+href]]">&raquo;</a></li>`&tplPageSkip=`@INLINE <li class="disabled"><span>...</span></li>`&tplPageFirstEmpty=`@INLINE <li class="disabled"><span>[[%pdopage_first]]</span></li>`&tplPageLastEmpty=`@INLINE <li class="disabled"><span>[[%pdopage_last]]</span></li>`&tplPagePrevEmpty=`@INLINE <li class="disabled"><span>&laquo;</span></li>`&tplPageNextEmpty=`@INLINE <li class="disabled"><span>&raquo;</span></li>`&cache=``&cacheTime=`3600`&cacheAnonymous=``&ajax=``&ajaxMode=``&ajaxElemWrapper=`#pdopage`&ajaxElemRows=`#pdopage .rows`&ajaxElemPagination=`#pdopage .pagination`&ajaxElemLink=`#pdopage .pagination a`&ajaxElemMore=`#pdopage .btn-more`&ajaxTplMore=`@INLINE <button class="btn btn-default btn-more">[[%pdopage_more]]</button>`&ajaxHistory=``&setMeta=`1`&strictMode=`1`&class=`TaggerTagResource`&leftJoin=`{
    "NameTag": {
      "class": "TaggerTag",
      "on": "TaggerTagResource.tag = NameTag.id"
    },
    "Posts": {
      "class": "modResource",
      "on": "TaggerTagResource.resource = Posts.id"
    }
  }`&request=`9201addc7cbeef688a57f3835aa2a994`]]' => '<h2 class="h3">Всего результатов: 1</h2><div class="panel panel-default">
  <div class="panel-body">
    <h3 class="h4">Вылеты из Риги за 0,99 euro</h3><p></p>
    <p class="text-right"><a href="novosty/article-riga" class="btn btn-primary" role="button">Читать далее...	</a></p>
  </div>
</div>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 17,
          'cache_type' => 0,
          'snippet' => '    <title>[[*pagetitle]] | [[++site_name]]</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/template/css/libs.min.css">
    <link rel="stylesheet" href="/assets/template/css/main.css">
    <link rel="stylesheet" href="/assets/template/css/media.css">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <title>[[*pagetitle]] | [[++site_name]]</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/assets/template/css/libs.min.css">
    <link rel="stylesheet" href="/assets/template/css/main.css">
    <link rel="stylesheet" href="/assets/template/css/media.css">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header-main' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header-main',
          'description' => '',
          'editor_type' => 0,
          'category' => 17,
          'cache_type' => 0,
          'snippet' => '      <header class="main-header">
        <div class="top-header">
          <div class="top-header__wrap">
            <div class="logotype-block">
              <div class="logo-wrap"><a href="/"><img src="/assets/template/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
            <nav class="main-navigation">
                <ul class="nav-list">
                    [[pdoMenu?
                        &parents=`0`
                        &resources = `1`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]            
                    [[pdoMenu?
                        &parents=`0`
                        &resources = `2,3,4,6`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="/[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]            
                </ul>
            </nav>
          </div>
        </div>
        <div class="bottom-header">
          <div class="search-form-wrap">
            [[!SimpleSearchForm? &landing=`30` &tpl=`head_search_form`]]
          </div>
        </div>
      </header>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '      <header class="main-header">
        <div class="top-header">
          <div class="top-header__wrap">
            <div class="logotype-block">
              <div class="logo-wrap"><a href="/"><img src="/assets/template/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
            <nav class="main-navigation">
                <ul class="nav-list">
                    [[pdoMenu?
                        &parents=`0`
                        &resources = `1`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]            
                    [[pdoMenu?
                        &parents=`0`
                        &resources = `2,3,4,6`
                        &tplOuter =	`@INLINE [[+wrapper]]`
                        &tpl = `@INLINE <li class="nav-list__nav-item"><a href="/[[+link]]"  class="nav-list__nav-item__nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
                    ]]            
                </ul>
            </nav>
          </div>
        </div>
        <div class="bottom-header">
          <div class="search-form-wrap">
            [[!SimpleSearchForm? &landing=`30` &tpl=`head_search_form`]]
          </div>
        </div>
      </header>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'article-title' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'article-title',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<h1 class="title-page">[[*longtitle:default=`[[*pagetitle]]`]]</h1>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<h1 class="title-page">[[*longtitle:default=`[[*pagetitle]]`]]</h1>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'get_article_by_tag' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'get_article_by_tag',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => 'Получаем стати

[[!pdoPage?
  &element = `pdoResources`
  &limit=`2`
  &loadModels=`tagger`
  &class=`TaggerTagResource`
  &leftJoin=`{
    "NameTag": {
      "class": "TaggerTag",
      "on": "TaggerTagResource.tag = NameTag.id"
    },
    "Posts": {
      "class": "modResource",
      "on": "TaggerTagResource.resource = Posts.id"
    }
  }`
  &select=`{
    "TaggerTagResource": "*",
    "NameTag": "NameTag.tag, NameTag.alias",
    "Posts": "Posts.id, Posts.pagetitle, Posts.description"
  }`
  &where=`{
    "NameTag.alias": "[[!#GET.tag]]"
  }`
  &sortby=`TaggerTagResource.resource`
  &sortdir=`ASC`  
  &tplWrapper =`@INLINE <h2 class="h3">Всего результатов: [[+page.total]]</h2>[[+output]]`
  &tpl= `chunkTagRow`
]]
[[!+page.nav]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => 'Получаем стати

[[!pdoPage?
  &element = `pdoResources`
  &limit=`2`
  &loadModels=`tagger`
  &class=`TaggerTagResource`
  &leftJoin=`{
    "NameTag": {
      "class": "TaggerTag",
      "on": "TaggerTagResource.tag = NameTag.id"
    },
    "Posts": {
      "class": "modResource",
      "on": "TaggerTagResource.resource = Posts.id"
    }
  }`
  &select=`{
    "TaggerTagResource": "*",
    "NameTag": "NameTag.tag, NameTag.alias",
    "Posts": "Posts.id, Posts.pagetitle, Posts.description"
  }`
  &where=`{
    "NameTag.alias": "[[!#GET.tag]]"
  }`
  &sortby=`TaggerTagResource.resource`
  &sortdir=`ASC`  
  &tplWrapper =`@INLINE <h2 class="h3">Всего результатов: [[+page.total]]</h2>[[+output]]`
  &tpl= `chunkTagRow`
]]
[[!+page.nav]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'sidebar-tags' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'sidebar-tags',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<div class="sidebar__sidebar-item">              
    <div class="sidebar-item__title">Теги</div>
    <div class="sidebar-item__content">
    [[+tags]]
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="sidebar__sidebar-item">              
    <div class="sidebar-item__title">Теги</div>
    <div class="sidebar-item__content">
    [[+tags]]
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'sidebar-category' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'sidebar-category',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
            
            [[pdoMenu?
                &parents=`3`
                &tplOuter=`@INLINE <ul class="category-list">[[+wrapper]]</ul>`
                &tplParentRow=`@INLINE <li class="category-list__item">
                    <a href="/[[~[[+id]]]]" class="category-list__item__link">[[+menutitle]][[+id]]</a>[[+wrapper]]</li>`
                &tplInner=`@INLINE <ul class="category-list__inner">[[+wrapper]]</ul>`
                &tpl = `@INLINE <li class="category-list__item"><a href="/[[+link]]"  class="category-list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                &level = `2`
            ]]

    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <div class="sidebar-item__content">
            
            [[pdoMenu?
                &parents=`3`
                &tplOuter=`@INLINE <ul class="category-list">[[+wrapper]]</ul>`
                &tplParentRow=`@INLINE <li class="category-list__item">
                    <a href="/[[~[[+id]]]]" class="category-list__item__link">[[+menutitle]][[+id]]</a>[[+wrapper]]</li>`
                &tplInner=`@INLINE <ul class="category-list__inner">[[+wrapper]]</ul>`
                &tpl = `@INLINE <li class="category-list__item"><a href="/[[+link]]"  class="category-list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                &level = `2`
            ]]

    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 17,
          'cache_type' => 0,
          'snippet' => '      <footer class="main-footer">
        <div class="content-footer">
          <div class="bottom-menu">
              [[pdoMenu?
                    &parents=`0`
                    &resources = `1,2,3,4,31`
                    &tplOuter =	`@INLINE <ul class="b-menu__list">[[+wrapper]]</ul>`
                    &tpl = `@INLINE <li class="b-menu__list__item"><a href="/[[+link]]"  class="b-menu__list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                 ]]            
          </div>
          <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2017</a></div>
          </div>
        </div>
      </footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '      <footer class="main-footer">
        <div class="content-footer">
          <div class="bottom-menu">
              [[pdoMenu?
                    &parents=`0`
                    &resources = `1,2,3,4,31`
                    &tplOuter =	`@INLINE <ul class="b-menu__list">[[+wrapper]]</ul>`
                    &tpl = `@INLINE <li class="b-menu__list__item"><a href="/[[+link]]"  class="b-menu__list__item__link">[[+menutitle]]</a>[[+wrapper]]</li>`
                 ]]            
          </div>
          <div class="copyright-wrap">
            <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool 2017</a></div>
          </div>
        </div>
      </footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 17,
          'cache_type' => 0,
          'snippet' => '    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/assets/template/js/main.js"></script>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="/assets/template/js/main.js"></script>
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 14,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'pdoPage' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoPage',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : array();

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    /** Pagination */
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    } elseif (!empty($pageCount) && $pageCount > 1) {
        $pagination = array(
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        );

        if (!empty($pageCount)) {
            foreach (array(\'first\', \'prev\', \'next\', \'last\') as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }

        if (!empty($setMeta) && !$isAjax) {
            $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . $url . \'"/>\');
            if ($page > 1) {
                $modx->regClientStartupHTMLBlock(\'<link rel="prev" href="\' . $pdoPage->makePageLink($url,
                        $page - 1) . \'"/>\');
            }
            if ($page < $pageCount) {
                $modx->regClientStartupHTMLBlock(\'<link rel="next" href="\' . $pdoPage->makePageLink($url,
                        $page + 1) . \'"/>\');
            }
        }

        $pagination = !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination);
    }

    $data = array(
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => $pagination,
        $totalVar => $total,
    );
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', array(), $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', array(), $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'maxLimit' => 
            array (
              'name' => 'maxLimit',
              'desc' => 'pdotools_prop_maxLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 100,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Максимально возможный лимит выборки. Перекрывает лимит, указанный пользователем через url.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'pdotools_prop_page',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер страницы для вывода. Перекрывается номером, указанным пользователем через url.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'pdotools_prop_pageVarKey',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной для поиска номера страницы в url.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'pdotools_prop_pageLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 5,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Количество ссылок на страницы. Если больше или равно 7 - включается продвинутый режим отображения.',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'pdotools_prop_element',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pdoResources',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя сниппета для запуска.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'pdotools_prop_pageNavVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.nav',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода пагинации.',
              'area_trans' => '',
            ),
            'pageCountVar' => 
            array (
              'name' => 'pageCountVar',
              'desc' => 'pdotools_prop_pageCountVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pageCount',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода количества страниц.',
              'area_trans' => '',
            ),
            'pageLinkScheme' => 
            array (
              'name' => 'pageLinkScheme',
              'desc' => 'pdotools_prop_pageLinkScheme',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема генерации ссылки на страницу. Можно использовать плейсхолдеры [[+pageVarKey]] и [[+page]]',
              'area_trans' => '',
            ),
            'tplPage' => 
            array (
              'name' => 'tplPage',
              'desc' => 'pdotools_prop_tplPage',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li><a href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления обычной ссылки на страницу.',
              'area_trans' => '',
            ),
            'tplPageWrapper' => 
            array (
              'name' => 'tplPageWrapper',
              'desc' => 'pdotools_prop_tplPageWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <div class="pagination"><ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul></div>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления всего блока пагинации, содержит плейсхолдеры страниц.',
              'area_trans' => '',
            ),
            'tplPageActive' => 
            array (
              'name' => 'tplPageActive',
              'desc' => 'pdotools_prop_tplPageActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на текущую страницу.',
              'area_trans' => '',
            ),
            'tplPageFirst' => 
            array (
              'name' => 'tplPageFirst',
              'desc' => 'pdotools_prop_tplPageFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_first]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLast' => 
            array (
              'name' => 'tplPageLast',
              'desc' => 'pdotools_prop_tplPageLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="control"><a href="[[+href]]">[[%pdopage_last]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrev' => 
            array (
              'name' => 'tplPagePrev',
              'desc' => 'pdotools_prop_tplPagePrev',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="control"><a href="[[+href]]">&laquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNext' => 
            array (
              'name' => 'tplPageNext',
              'desc' => 'pdotools_prop_tplPageNext',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="control"><a href="[[+href]]">&raquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'tplPageSkip' => 
            array (
              'name' => 'tplPageSkip',
              'desc' => 'pdotools_prop_tplPageSkip',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled"><span>...</span></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления пропущенных страниц при продвинутом режиме отображения (&pageLimit >= 7).',
              'area_trans' => '',
            ),
            'tplPageFirstEmpty' => 
            array (
              'name' => 'tplPageFirstEmpty',
              'desc' => 'pdotools_prop_tplPageFirstEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled"><span>[[%pdopage_first]]</span></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLastEmpty' => 
            array (
              'name' => 'tplPageLastEmpty',
              'desc' => 'pdotools_prop_tplPageLastEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled"><span>[[%pdopage_last]]</span></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrevEmpty' => 
            array (
              'name' => 'tplPagePrevEmpty',
              'desc' => 'pdotools_prop_tplPagePrevEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled"><span>&laquo;</span></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNextEmpty' => 
            array (
              'name' => 'tplPageNextEmpty',
              'desc' => 'pdotools_prop_tplPageNextEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled"><span>&raquo;</span></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ajax' => 
            array (
              'name' => 'ajax',
              'desc' => 'pdotools_prop_ajax',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить поддержку ajax запросов.',
              'area_trans' => '',
            ),
            'ajaxMode' => 
            array (
              'name' => 'ajaxMode',
              'desc' => 'pdotools_prop_ajaxMode',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'None',
                  'value' => '',
                  'name' => 'None',
                ),
                1 => 
                array (
                  'text' => 'Default',
                  'value' => 'default',
                  'name' => 'Default',
                ),
                2 => 
                array (
                  'text' => 'Scroll',
                  'value' => 'scroll',
                  'name' => 'Scroll',
                ),
                3 => 
                array (
                  'text' => 'Button',
                  'value' => 'button',
                  'name' => 'Button',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ajax пагинация "из коробки". Доступны 3 режима: "default", "button" и "scroll".',
              'area_trans' => '',
            ),
            'ajaxElemWrapper' => 
            array (
              'name' => 'ajaxElemWrapper',
              'desc' => 'pdotools_prop_ajaxElemWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента-обёртки с результатами и пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemRows' => 
            array (
              'name' => 'ajaxElemRows',
              'desc' => 'pdotools_prop_ajaxElemRows',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .rows',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с результатами.',
              'area_trans' => '',
            ),
            'ajaxElemPagination' => 
            array (
              'name' => 'ajaxElemPagination',
              'desc' => 'pdotools_prop_ajaxElemPagination',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemLink' => 
            array (
              'name' => 'ajaxElemLink',
              'desc' => 'pdotools_prop_ajaxElemLink',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination a',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор ссылки на страницу.',
              'area_trans' => '',
            ),
            'ajaxElemMore' => 
            array (
              'name' => 'ajaxElemMore',
              'desc' => 'pdotools_prop_ajaxElemMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .btn-more',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор кнопки загрузки результатов при ajaxMode = button.',
              'area_trans' => '',
            ),
            'ajaxTplMore' => 
            array (
              'name' => 'ajaxTplMore',
              'desc' => 'pdotools_prop_ajaxTplMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <button class="btn btn-default btn-more">[[%pdopage_more]]</button>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Шаблон кнопки для загрузки новых результатов при ajaxMode = button. Должен включать селектор, указанный в "ajaxElemMore".',
              'area_trans' => '',
            ),
            'ajaxHistory' => 
            array (
              'name' => 'ajaxHistory',
              'desc' => 'pdotools_prop_ajaxHistory',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Auto',
                  'value' => '',
                  'name' => 'Auto',
                ),
                1 => 
                array (
                  'text' => 'Enabled',
                  'value' => 1,
                  'name' => 'Enabled',
                ),
                2 => 
                array (
                  'text' => 'Disabled',
                  'value' => 0,
                  'name' => 'Disabled',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сохранять номер страницы в url при работе в режиме ajax.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'pdotools_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/pdopage.min.js',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на javascript для подключения сниппетом.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'pdotools_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/pdopage.min.css',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на css стили оформления для подключения сниппетом.',
              'area_trans' => '',
            ),
            'setMeta' => 
            array (
              'name' => 'setMeta',
              'desc' => 'pdotools_prop_setMeta',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Регистрация мета-тегов со ссылками на предыдущую и следующую страницу.',
              'area_trans' => '',
            ),
            'strictMode' => 
            array (
              'name' => 'strictMode',
              'desc' => 'pdotools_prop_strictMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Строгий режим работы. pdoPage делает редиректы при загрузке несуществующих страниц.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdopage.php',
          'content' => '/** @var array $scriptProperties */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoPage\'))) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : array();

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    /** Pagination */
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    } elseif (!empty($pageCount) && $pageCount > 1) {
        $pagination = array(
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        );

        if (!empty($pageCount)) {
            foreach (array(\'first\', \'prev\', \'next\', \'last\') as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }

        if (!empty($setMeta) && !$isAjax) {
            $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . $url . \'"/>\');
            if ($page > 1) {
                $modx->regClientStartupHTMLBlock(\'<link rel="prev" href="\' . $pdoPage->makePageLink($url,
                        $page - 1) . \'"/>\');
            }
            if ($page < $pageCount) {
                $modx->regClientStartupHTMLBlock(\'<link rel="next" href="\' . $pdoPage->makePageLink($url,
                        $page + 1) . \'"/>\');
            }
        }

        $pagination = !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination);
    }

    $data = array(
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => $pagination,
        $totalVar => $total,
    );
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', array(), $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', array(), $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);