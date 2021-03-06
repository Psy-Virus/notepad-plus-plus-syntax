<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <title>Notepad++ default theme</title>
    <link href="style.css" rel="stylesheet">

    <script>
      // Test javascript
      var slices = 555;
      if ( slices > this.slices ) { return 'Bonjou'; }
      else { return slices; }
    </script>

  </head>
  <body>

    <?php
      // Test php
      if ($request->method() == 'POST') {
        $comment = new Comment([
          'news' => $request->getData('news'),
          'nombre' => 1700
        ]);
      }
    ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html class="no-js" lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(e,t){return function(){o(e,[(new Date).getTime()].concat(a(arguments)),null,t)}}var o=e("handle"),i=e(2),a=e(3);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var u=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(u,function(e,t){newrelic[t]=r(f+t,"api")}),i(c,function(e,t){newrelic[t]=r(f+t)}),t.exports=newrelic,newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),o("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(0>o?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?u(e,a,i):i()}function n(n,r,o){e&&e(n,r,o);for(var i=t(o),a=l(n),u=a.length,c=0;u>c;c++)a[c].apply(i,r);var s=f[g[n]];return s&&s.push([m,n,r,i]),i}function p(e,t){w[e]=l(e).concat(t)}function l(e){return w[e]||[]}function d(e){return s[e]=s[e]||o(n)}function v(e,t){c(e,function(e,n){t=t||"feature",g[n]=t,t in f||(f[t]=[])})}var w={},g={},m={on:p,emit:n,get:d,listeners:l,context:t,buffer:v};return m}function i(){return new r}var a="nr@context",u=e("gos"),c=e(2),f={},s={},p=t.exports=o();p.backlog=f},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!w++){var e=v.info=NREUM.info,t=s.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&t){c(l,function(t,n){e[t]||(e[t]=n)});var n="https"===p.split(":")[0]||e.sslForHttp;v.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=v.proto+e.agent,t.parentNode.insertBefore(r,t)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=window,s=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},e(1);var p=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-918.min.js"},d=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),v=t.exports={offset:a(),origin:p,features:{},xhrWrappable:d};s.addEventListener?(s.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(s.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),u("mark",["firstbyte",a()],null,"api");var w=0},{}]},{},["loader"]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-iphone-retina-display.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-ipad-retina-display.png" />

        <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png" />

            <link href="/bundles/course/css/main.css?bc40b9d" type="text/css" rel="stylesheet" media="all"/>

        <script type="text/javascript" src="/js/modernizr.js?bc40b9d"></script>

        <link rel="shortcut icon" href="/favicon.ico?bc40b9d" />


    <meta property="og:locale" content="fr"/>
    <meta property="og:type" content="website"/>

    <meta property="og:title" content="Découvrez le cours &quot;L&#039;opérateur instanceof&quot; sur @OpenClassrooms"/>
    <meta property="og:url" content="https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/l-operateur-instanceof"/>
    <meta property="og:site_name" content="OpenClassrooms"/>
    <meta property="og:image" content="https://static.oc-static.com/prod/courses/illustrations/illu_programmez-en-oriente-objet-en-php.png"/>
    <meta property="og:description" content="Vous connaissez les bases de PHP, mais savez-vous organiser votre code comme un professionnel ? La programmation orientée objet est une façon de programmer incontournable. Ce cours va vous aider à bien structurer votre code."/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@OpenClassrooms"/>
    <meta name="twitter:title" content="Découvrez le cours &quot;L&#039;opérateur instanceof&quot; sur @OpenClassrooms"/>
    <meta name="twitter:description" content=""/>


        <title>L&#039;opérateur instanceof</title>

        <!-- inlined top javascript block -->


        <script type="text/javascript">
            var App = {
                startTime: (new Date()).getTime(),
                debug: false
            };

            App.user = {
                                    id: 46434,

                                    displayName: 'tarzane',

                                    email: 'postmaster@classik-design.com',

                isPremium: false
            };


            App.preferences = {
                assetVersion: 'bc40b9d',
                contactMail: 'hello@openclassrooms.com',
                adyenPublicKey: '10001|889EBFD4D434B82683E21DCA26E77C3E20E0EE09A5ECE3830B0ED51F2FA721A2F7E9EC871C6AB9A1E12C4492F4717673047757E02C5256D8E265CD51E413E5EFCCFEAC41B39C662A424ADC13EE187C38C372A7FCCEC1EA5DF841989437D78B252A8EB51008E60BB55B1E55A7A80DE1A9D60D998C128A576BFAE1DDB97D514AF0A073AEDDE84CEE40D1F8F6ECE85D0FFA50C95C06DB274021C1371376C6EB16561FD65C5E2704B570A7504D617D0F3820F176A0609F6162BDF5890533289FDC3DA7DB03B50BB3BD60A613E1FF72060F22987627E8F1A29F0128A94EC4C8FF7CF6B7AB9558D8433BF86D7A388AB927641CD6C02689139CEE3AAC9ACBFFE83806CB',
                algolia: {
                    appId: 'JGRXRFVQM0',
                    apiKey: 'dfbdea500cb0b5f46e449ad334916c44', indexName: 'prod_v1_COURSES_fr'
                },
                routes: {
                    COURSE_EVENT: '/components/courses/:courseId',
                    COURSE_PART_EVENT: '/components/courses/:courseId/parts/:partId',

                    ACCEPT_COOKIE: '/components/user-accept-consent-cookie'
                }

                                            };

            App.preferences.navigationPreference = {
                                                                };

            App.preferences.modules = {
                'smiley': {
                    basePath: '/bundles/common/images/smiley/'
                }
            };
        </script>
        <!-- inlined top javascript block end -->

        <script>    App.preferences.modules['course/view/internalFolding'] = {
        isBigCourse: true
    };

    App.data = App.data || {};
App.data.currentCourse = {"partId":1669151,"courseId":1665806};
App.preferences.modules['view/currentCoursePage'] = App.data.currentCourse;

</script>



    </head>

    <body class="course oc-body is-connected">

            <script id="_EVENTS-IDENTIFY" type="application/json">
        {
            "type": "identify",
            "userId": "46434",
            "properties": {
                "age": "",
                "name": "tarzane",
                "createdAt": "2007-01-23T00:00:00+01:00",
                "email": "postmaster@classik-design.com",
                "gender": "",
                "premium": false,
                "locale": "fr"
            },
            "integrations": {
                "MailChimp": false
            }
        }
    </script>





    <script id="_EVENTS-PAGE" type="application/json">
        {"type":"page"}
    </script>


        <!--[if lt IE 9]>
<div class="disclaimer  disclaimer-error">
    Vous utilisez un navigateur obsolète, veuillez le <a href="http://browsehappy.com/">mettre à jour</a>.
</div>
<![endif]-->

<noscript>
    <div class="disclaimer  disclaimer--error">
        Veuillez utiliser un <a href="http://browsehappy.com/">navigateur internet moderne</a> avec JavaScript activé pour naviguer sur OpenClassrooms.com
    </div>
</noscript>

<header id="oc-header" class="js-tabs-mobile mainHeader ">

        <div class="disclaimer  disclaimer--info hidden  js-cookie-disclaimer">
        <div class="disclaimer__wrapper">
            <span class="disclaimer__content">Bienvenue sur OpenClassrooms ! En poursuivant votre navigation, vous acceptez l'utilisation de cookies. <a href="/privacy-policy#personal-data-gathering">En savoir plus</a></span>
            <span class="disclaimer__actions">
                <a href="#" class="disclaimer__button  js-close-button">ok</a>
            </span>
        </div>
    </div>

    <div class="mainHeader__wrapper">

        <div class="mainHeader__topLine">
                <a href="https://openclassrooms.com/pole-emploi/partenariat?utm_source=SiteWeb-OC&amp;utm_medium=Lien-PhraseHeader&amp;utm_campaign=relancePE"> Vous êtes demandeur d'emploi ? On vous offre le Premium Solo en 3 clics :) ! </a>

        </div>

        <div class="mainHeader__top">
            <a href="/" class="mainHeader__logo" title="OpenClassrooms.com">OpenClassrooms.com</a>


<nav role="navigation" class="icoTabs  mainHeader__tabSet">
    <span class="mainHeader__mobileNav">


                    <a class="js-tabs-tab  icoTabs__tab" href="#tab-userMenu">
                <span class="js-popOut-header  popOut  popOut--noArrow">
                    <span class="icoTabs__inner--mobileRightSeparator">
                        <span class="js-popOut-button  popOut__button">
                            <span class="icoTabs__image  mainHeader__avatar" style="background-image: url(//user.oc-static.com/files/186001_187000/186590.jpg)">tarzane</span>
                        </span>
                    </span>
                </span>
            </a>

        <a class="js-tabs-tab  icoTabs__tab  is-disabled" href="#tab-courseMenu">
            <span class="icoTabs__inner--mobileRightSeparator">
                <i class="icon-plus  icoTabs__icon"></i>
            </span>
        </a>

        <a class="js-tabs-tab  icoTabs__tab  is-disabled" href="#tab-courseEditMenu">
            <span class="icoTabs__inner--mobileRightSeparator">
                <i class="icon-plus  icoTabs__icon"></i>
            </span>
        </a>

        <a class="js-tabs-tab  icoTabs__tab  is-disabled" data-tabs-default="true" href="#tab-searchMenu">
            <span class="icoTabs__inner--mobileRightSeparator">
                <i class="icon-search  icoTabs__icon"></i>
            </span>
        </a>

        <a class="js-tabs-tab  icoTabs__tab" href="#tab-main">
            <i class="icon-menu  icoTabs__icon"></i>
        </a>
    </span>

</nav>
        </div>

                <div class="js-tabs-content  mainHeader__content"></div>

        <div class="mainHeader__content">
            <div id="tab-main" class="mainHeader__tabs">
                <nav class="mainTopNav  scrollPanel  js-scrollPanel-mobileMenu">
    <div class="mainTopNav__container  scrollPanel__container  js-scrollPanel-container">
        <ul class="mainHeader__container  mainHeader__container--mainMenu  js-scrollPanel-content">
            <li class="mainHeader__containerItem">
                <a class="mainTopNav__item" href="http://openclassrooms.com/paths/">Parcours</a>
            </li>
            <li class="mainHeader__containerItem">
                <a class="mainTopNav__item" href="/courses">Cours</a>
            </li>
            <li class="mainHeader__containerItem">
                <a class="mainTopNav__item" href="/forum/">Forums</a>
            </li>

            <li class="mainHeader__containerItem">
                <a class="mainTopNav__item" href="/partners">Partenaires</a>
            </li>

            <li class="mainHeader__containerItem">
                <a class="mainTopNav__item" href="/premium">Premium</a>
            </li>
        </ul>
    </div>
</nav>

                <div class="mainHeader__contentInner">
                    <div class="mainHeader__container  mainHeader__container--search">


 <div class="js-courseSearch  topSearchBox">
     <form tabindex="0" class="js-courseSearch-form  oc-form" action="/courses" method="get">
         <div class="js-courseSearch-inputGroup oc-form__widget  inputGroup  topSearchBox__inner">
             <input id="algolia-search-input"
                    type="search"
                    class="js-courseSearch-input oc-form__control inputGroup__input  topSearchBox__input"
                    title="Rechercher"
                    autocomplete="off"
                    data-option_source="/components/courses/search?q=<%= term %>"
                    placeholder="Rechercher"
                    name="q" />

             <button class="js-courseSearch-button  oc-btn dark-btn  only-icon  inputGroup__button  topSearchBox__button" type="submit" title="Rechercher un cours">
                 <i class="inputGroup__icon icon-search"></i>
                 <i class="inputGroup__icon inputGroup__icon--load icon-spinner icon-spin"></i>
             </button>
         </div>
     </form>
 </div>
                    </div>

                                            <div class="mainHeader__container  mainHeader__container--separatorLarge  hidden-s"></div>



                                            <div class="mainHeader__container  mainHeader__container--avatar">
                            <div class="popOut  popOut--rightAlign  popOut--noArrow js-popOut-header" data-tabs-content="#tab-userMenu">
                                <a class="js-popOut-button  popOut__button" href="/membres/tarzane-44527">
                                    <span class="icoTabs__image  mainHeader__avatar" style="background-image: url(//user.oc-static.com/files/186001_187000/186590.jpg)">tarzane</span>
                                </a>
                                <div class="popOut__content">
                                    <div id="tab-userMenu">
                                        <ul class="popOutList">
    <li class="popOutList__item">
        <a class="popOutList__link" href="/membres/tarzane-44527">
            <strong class="popOutList__linkMain">tarzane</strong>
            <small class="popOutList__linkSub">
                            </small>
        </a>
    </li>

    <li class="popOutList__item">
        <a class="popOutList__link" href="/dashboard">Tableau de bord</a>
    </li>

    <li class="popOutList__item">
        <a class="popOutList__link" href="/membres/tarzane-44527/parametres">Mes paramètres</a>
    </li>

    <li class="popOutList__item">
        <a class="popOutList__link" href="/my-courses">Mes cours</a>
    </li>


    <li class="popOutList__item">
        <a class="popOutList__link" href="/logout?_csrf_token=hbinZrjh2LY4xD-ziTLhqP1oaP4vu3C7W8Fkj5loyqo"><i class="icon-off"></i> <span>Déconnexion</span></a>
    </li>
</ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                                            <div class="mainHeader__container  mainHeader__container--notifications">
    <div class="mainHeader__containerItem mainHeader__containerItem--notifications">

<div class="js-popOut-header  popOut  popOut--rightAlign  popOut--noArrow">
    <a href="/mp/" class="js-popOut-button  popOut__button  notifications__wrapper">
        <i class="icon-letter  notifications__icon is-disabled"></i>
            </a>

    <ul class="popOut__content  popOutList  notificationsList">
                <li class="popOutList__item popOutList__item--alt"><a href="/mp/" class="popOutList__link">Tous mes messages privés</a></li>
    </ul>
</div>


<div class="js-popOut-header  popOut  popOut--rightAlign  popOut--noArrow">
    <a href="/notifications" class="js-popOut-button  popOut__button  notifications__wrapper">
        <i class="icon-alarm  notifications__icon is-disabled"></i>
            </a>

    <ul class="popOut__content  popOutList  notificationsList">
                <li class="popOutList__item popOutList__item--alt"><a href="/notifications" class="popOutList__link">Toutes mes notifications</a></li>
    </ul>
</div>

    </div>
</div>

                    <div class="mainHeader__container  mainHeader__container--langSelector">
                        <div class="js-popOut-header  popOut popOut--small  popOut--rightAlign" data-keep-it-mobile="true">
    <span class="js-popOut-button  popOut__button">
                    <a href="javascript:;" class="languageSelector__selected">Français</a>
            </span>
    <ul class="popOutList  popOut__content  popOutList--small">
                    <li class="popOutList__item">
                <a class="popOutList__link" href="/change-locale/en/ZDbrv62qSGLOU-GbE5JCpnYoqEgczKaif1k2tXYk3Wc">English</a>
            </li>
                    <li class="popOutList__item">
                <a class="popOutList__link" href="/change-locale/es/ZDbrv62qSGLOU-GbE5JCpnYoqEgczKaif1k2tXYk3Wc">Español</a>
            </li>
            </ul>
</div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


        <div id="mainSearch" class="mainSearch  centered"></div>

        <div id="mainContentWithHeader">
            <div id="pre-main-part">

                                        <section class="inset no-padding">
        <div class="centered">

            <h6 class="accessibility-hidden">Fil d&#039;Ariane</h6>

            <nav class="breadcrumb">
                <ul class="breadcrumbtrail">
                                                                        <li class="home" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                                                            <a href="/" itemprop="url">
                                <span itemprop="title">Accueil</span>
                            </a>
                                                                            <div class="arrow-right"></div>
                                                </li>
                                                                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                                                            <a href="/courses" itemprop="url">
                                <span itemprop="title">Cours</span>
                            </a>
                                                                            <div class="arrow-right"></div>
                                                </li>
                                                                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                                                            <a href="/courses/programmez-en-oriente-objet-en-php?status=published" itemprop="url">
                                <span itemprop="title">Programmez en orienté objet en PHP</span>
                            </a>
                                                                            <div class="arrow-right"></div>
                                                </li>
                                                                        <li class="current" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                                                            L&#039;opérateur instanceof
                                                                        </li>
                                    </ul>
            </nav>
        </div>
    </section>


                            </div>

            <div class="claire clearfix" >
                    <article itemscope itemtype="http://schema.org/Article">


<header class="course-header" xmlns="http://www.w3.org/1999/html">
    <div class="centered"><div class="course-header__topPart"><div class="course-header__info"><a itemprop="url" href="/courses/programmez-en-oriente-objet-en-php"><h1 data-course-title="Programmez en orienté objet en PHP">Programmez en orienté objet en PHP</h1></a><span class="course-header__updatedTime visible-l">Mis à jour le jeudi 10 mars 2016</span></div></div></div><div class="course-header__details-container"><div class="centered"><div class="row"><div class="col12"><div class="course-header__details  iconBar"><div class="course-header__detailsGroup  course-header__detailsGroup--formats iconBar__group"><ul data-option_popinselector="#popin-formats-availables" class="course-types iconBar__list js-course-formats-bar"><li class="iconBar__item  course-types__item  js-tooltip" title="Ce cours est visible gratuitement en ligne."><a href="/courses/programmez-en-oriente-objet-en-php"><i class="icon-desktop  course-types__icon"></i><span class="course-header__format-current"></span></a></li><li class="iconBar__item  course-types__item iconBar__item--dimmed js-tooltip" title="Ce cours n&#039;est pas encore en vidéo."><span><i class="icon-video course-types__icon"></i></span></li><li class="iconBar__item  course-types__item  js-tooltip" title="Ce cours existe en livre papier."><a href="http://www.eyrolles.com/Informatique/Livre/programmez-en-oriente-objet-en-php-9791090085855?societe=openclassrooms" target="_blank"><i class="icon-book  course-types__icon"></i></a></li><li class="iconBar__item  course-types__item  js-tooltip" title="Ce cours existe en eBook."><a href="/ebooks/programmez-en-oriente-objet-en-php"><i class="icon-ebook  course-types__icon"></i></a></li><li class="iconBar__item  course-types__item  js-tooltip"
                                                                                            title="Vous pouvez obtenir un certificat de réussite à l&#039;issue de ce cours."
                                                                                ><a
                                                                                                                                                            href="/courses/1665806/certificate_example" target="_blank"
                                                                                                                                            ><i class="icon-badge  course-types__icon"></i></a></li><li class="iconBar__item  course-types__item iconBar__item--dimmed js-tooltip" title="Ce cours n&#039;est pas encore diplômant et ne vous permet pas d&#039;obtenir des crédits universitaires européens (ECTS)."><span><i class="icon-hat  course-types__icon"></i></span></li><li class="iconBar__item  course-types__item  js-tooltip" title="Vous pouvez être accompagné sur ce cours par un mentor dédié en visioconférence."><a  href="/premium#discover-premium-plus-offer" ><i class="icon-mentor  course-types__icon"></i></a></li></ul></div><div class="course-header__detailsGroup  course-header__detailsGroup--info  iconBar__group"><ul class="iconBar__list"><li class="iconBar__item"><i class="icon-duration iconBar__icon js-tooltip" title="Ce cours demande en moyenne 30 heures de travail pour être réussi."></i><span class="iconBar__label">30 heures</span></li><li class="iconBar__item"><i class="icon-level iconBar__icon"></i><span class="iconBar__label">
                                                                                                    Difficile
                                                                                            </span></li></ul></div><div class="course-header__detailsGroup course-header__detailsGroup--licences iconBar__group"><a target="_blank" href="http://creativecommons.org/licenses/by-nc-sa/2.0"><span class="iconBar__label">Licence</span><ul class="iconBar__list"><li class="iconBar__item"><i class="icon-cc iconBar__icon" title="CC"></i></li><li class="iconBar__item"><i class="icon-ccby iconBar__icon" title="BY"></i></li><li class="iconBar__item"><i class="icon-ccnc iconBar__icon" title="NC"></i></li><li class="iconBar__item"><i class="icon-ccsa iconBar__icon" title="SA"></i></li></ul></a></div></div></div></div></div></div>
    <div id="popin-formats-availables" class="popin popin--course-formats-availables">
        <i class="popin__close-button icon-close js-close-button"></i>

        <div class="course-types course-types--withSpace">
                            <a class="course-types__item" href="/courses/programmez-en-oriente-objet-en-php">
                    <i class="icon-desktop course-types__icon"></i>
                </a>


                            <a class="course-types__item" href="http://www.eyrolles.com/Informatique/Livre/programmez-en-oriente-objet-en-php-9791090085855?societe=openclassrooms">
                    <i class="icon-book course-types__icon"></i>
                </a>

                            <a class="course-types__item" href="/ebooks/programmez-en-oriente-objet-en-php">
                    <i class="icon-ebook course-types__icon"></i>
                </a>

                            <a class="course-types__item"
                                                    href="/courses/1665806/certificate_example" target="_blank"
                                        >
                    <i class="icon-badge course-types__icon js-close-button"></i>
                </a>

                                        <a class="course-types__item" href="/premium#discover-premium-plus-offer">
                    <i class="icon-mentor course-types__icon"></i>
                </a>
                    </div>

                    <p>Ce cours est visible <a href="/courses/programmez-en-oriente-objet-en-php">gratuitement en ligne</a>.</p>


                    <p>
                Ce cours existe en livre papier.
            </p>

                    <p>Ce cours existe <a href="/ebooks/programmez-en-oriente-objet-en-php">en eBook</a>.</p>

                    <p>
                Vous pouvez obtenir un certificat de réussite à l&#039;issue de ce cours.
            </p>


                    <p>
                Vous pouvez être <a href="/premium#discover-premium-plus-offer">accompagné et mentoré par un professeur particulier</a> par visioconférence sur ce cours.
            </p>

        <a class="oc-btn orange-alt-btn js-close-button" href="#">J&#039;ai tout compris !</a>
    </div>


</header>

    <div class="centered">


            <div class="row">
        <div class="col12 col11-s">
                            <nav class="timeline">
        <div class="timeline__inner">

        <span class="timeline__iconContainer">
            <a href="/courses/programmez-en-oriente-objet-en-php" title="Retour sur le sommaire du cours" class="roundIcon timeline__roundIcon">
                <i class="icon-home roundIcon__icon"></i>
            </a>
        </span>
            <div class="timeline__steps">

                    <span class="timeline__splitChapter"></span>

                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Introduction à la POO
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/utiliser-la-classe" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Utiliser la classe
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/l-operateur-de-resolution-de-portee" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    L&#039;opérateur de résolution de portée
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/manipulation-de-donnees-stockees" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Manipulation de données stockées
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/tp-mini-jeu-de-combat" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    TP : Mini-jeu de combat
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/l-heritage-3" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    &nbsp; héritage
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/tp-des-personnages-specialises" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    TP : Des personnages spécialisés
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-methodes-magiques-3" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les méthodes magiques
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/exercises/389" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Quiz
                                </span>

                                                            </a>


                    <span class="timeline__splitChapter"></span>

                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-objets-en-profondeur" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les objets en profondeur
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-interfaces-1" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les interfaces
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-exceptions-10" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les exceptions
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-traits-2" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les traits
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/l-api-de-reflexivite" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    L&#039;API de réflexivité
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/uml-presentation-1-2" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    UML : présentation (1/2)
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/uml-modelisons-nos-classes-2-2" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    UML : modélisons nos classes (2/2)
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-design-patterns" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les design patterns
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/tp-un-systeme-de-news" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    TP : un système de news
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-generateurs-4" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les générateurs
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/les-closures-2" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Les closures
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/exercises/390" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Quiz
                                </span>

                                                            </a>


                    <span class="timeline__splitChapter"></span>

                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/description-de-l-application" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Description de l&#039;application
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/developpement-de-la-bibliotheque" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Développement de la bibliothèque
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/le-frontend" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Le frontend
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/le-backend" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Le backend
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/gerer-les-formulaires" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Gérer les formulaires
                                </span>

                                                            </a>
                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/exercises/391" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    Activité : Créez un système de mise en cache
                                </span>

                                                            </a>


                    <span class="timeline__splitChapter"></span>

                                                                                                        <a
                                                                    href="/courses/programmez-en-oriente-objet-en-php/l-operateur-instanceof" class="timeline__step"
                                                            >
                                <span class="timeline__stepName">
                                    L&#039;opérateur instanceof
                                </span>

                                                                    <span class="timeline__progressMarker"></span>
                                                            </a>


                <span class="timeline__splitChapter"></span>

            </div>

        <span class="timeline__iconContainer">
                                                <a href="/courses/1665806/certificate_example" title="Certificat de réussite (voir un exemple)" class="roundIcon timeline__roundIcon">
                        <i class="icon-trophy roundIcon__icon"></i>
                    </a>
                                    </span>

        </div>
    </nav>
        </div>
    </div>
    </div>


        <div class="centered">
            <div class="contentWithSidebar  spacer  js-contentWithSidebar" >
                <main class="contentWithSidebar__content" >


        <div class="relative js-sidebar-container">
        <div class="static">
    <h2 itemprop="name" data-part-title="L&#039;opérateur instanceof" class="part-title">L&#039;opérateur instanceof</h2>

    <section class="row space-bottom js-desktop-sticky-container">
        <div class="col9 col11-s col__small-padding--right">


            <div
                itemprop="articleBody"
                data-page-indentifier="/courses/programmez-en-oriente-objet-en-php/l-operateur-instanceof"
                class="js-isRestrictablePage course-content js-course-container js-smilize js-userCanWatchVideo"




                            >

                <p id="r-1672339" data-claire-element-id="1696127">Vous êtes-vous déjà demandé s'il était possible de savoir si un objet était une instance de telle classe ? Si vous vous êtes déjà posé cette question, vous n'avez normalement pas trouvé de réponse vraiment claire. Un moyen simple de vérifier une telle chose est d'utiliser l'opérateur <code>instanceof</code>. Ce sera un court chapitre car cette notion n'est pas bien difficile. Il faut juste posséder quelques pré-réquis.</p><p id="r-1672340" data-claire-element-id="1696128">En voici la liste :</p><ul id="r-1672347" data-claire-element-id="1696135"><li id="r-1672342" data-claire-element-id="1696130"><p id="r-1672341" data-claire-element-id="1696129">Bien maîtriser les notions de <strong>classe</strong>, d'<strong>objet </strong>et d'<strong>instance </strong>.</p></li><li id="r-1672344" data-claire-element-id="1696132"><p id="r-1672343" data-claire-element-id="1696131">Bien maîtriser le concept de l'<strong>héritage</strong> (si vous ne maîtrisez pas bien la résolution statique à la volée ce n'est pas bien important).</p></li><li id="r-1672346" data-claire-element-id="1696134"><p id="r-1672345" data-claire-element-id="1696133">Savoir ce qu'est une <strong>interface</strong> et savoir s'en servir.</p></li></ul><h3 id="r-1669111" data-claire-element-id="3473688">Présentation de l'opérateur</h3><p id="r-1672348" data-claire-element-id="3473681">L'opérateur <code>instanceof</code> permet de vérifier si tel objet est une <em>instance de</em> telle classe. C'est un opérateur qui s'utilise dans une condition. Ainsi, on pourra créer des conditions comme <em>« si </em><code>$monObjet</code><em>est une instance de </em><code>MaClasse</code><em>, alors... »</em>.</p><p id="r-1672349" data-claire-element-id="1696137">Maintenant voyons comment construire notre condition. À gauche de notre opérateur,nous allons y placer notre objet. À droite de notre opérateur, nous allons placer, comme vous vous en doutez sûrement, le nom de la classe.</p><p id="r-1672350" data-claire-element-id="1696138">Exemple :</p><pre id="r-1672351" data-claire-element-id="3473682"><code data-claire-semantic="php">&lt;?php
class A { }
class B { }

$monObjet = new A;

if ($monObjet instanceof A) // Si $monObjet est une instance de A.
{
  echo '$monObjet est une instance de A';
}
else
{
  echo '$monObjet n\'est pas une instance de A';
}

if ($monObjet instanceof B) // Si $monObjet est une instance de B.
{
  echo '$monObjet est une instance de B';
}
else
{
  echo '$monObjet n\'est pas une instance de B';
}</code></pre><p id="r-1672352" data-claire-element-id="1696140">Bref, je pense que vous avez compris le principe. :)</p><aside id="r-1672354" data-claire-element-id="3473684" data-claire-semantic="information"><p id="r-1672353" data-claire-element-id="3473683">Si votre version de PHP est ultérieure à la version 5.1, alors aucune erreur fatale ne sera générée si vous utilisez l'opérateur <code>instanceof</code> en spécifiant une classe qui n'a pas été déclarée. La condition renverra tout simplement <code>false</code>.</p></aside><p id="r-1672355" data-claire-element-id="1696143">Il y a cependant plusieurs façons de procéder et quelques astuces (c'est d'ailleurs pour toutes les présenter que j'ai créé ce chapitre).</p><p id="r-1672356" data-claire-element-id="1696144">Parmi ces méthodes, il y en a une qui consiste à placer le nom de la classe pour laquelle on veut vérifier que tel objet est une instance dans une variable sous forme de chaîne de caractères. Exemple :</p><pre id="r-1672357" data-claire-element-id="3473685"><code data-claire-semantic="php">&lt;?php
class A { }
class B { }

$monObjet = new A;

$classeA = 'A';
$classeB = 'B';

if ($monObjet instanceof $classeA)
{
  echo '$monObjet est une instance de ', $classeA;
}
else
{
  echo '$monObjet n\'est pas une instance de ', $classeA;
}

if ($monObjet instanceof $classeB)
{
  echo '$monObjet est une instance de ', $classeB;
}
else
{
  echo '$monObjet n\'est pas une instance de ', $classeB;
}</code></pre><aside id="r-1672359" data-claire-element-id="1696147" data-claire-semantic="error"><p id="r-1672358" data-claire-element-id="1696146">Attention ! Vous ne pouvez spécifier le nom de la classe entre apostrophes ou guillemets directement dans la condition ! Vous devez obligatoirement passer par une variable. Si vous le faites directement, vous obtiendrez une belle erreur d'analyse.</p></aside><p id="r-1672360" data-claire-element-id="1696148">Une autre façon d'utiliser cet opérateur est de spécifier un autre objet à la place du nom de la classe. La condition renverra <code>true</code> si les deux objets sont des instances de la même classe. Exemple :</p><pre id="r-1672361" data-claire-element-id="3473686"><code data-claire-semantic="php">&lt;?php
class A { }
class B { }

$a = new A;
$b = new A;
$c = new B;

if ($a instanceof $b)
{
  echo '$a et $b sont des instances de la même classe';
}
else
{
  echo '$a et $b ne sont pas des instances de la même classe';
}

if ($a instanceof $c)
{
  echo '$a et $c sont des instances de la même classe';
}
else
{
  echo '$a et $c ne sont pas des instances de la même classe';
}</code></pre><p id="r-1672362" data-claire-element-id="3473687">Et voilà. Vous connaissez les trois méthodes possibles pour utiliser cet opérateur. Pourtant, il existe encore quelques effets que peut produire <code>instanceof</code>. Poursuivons donc ce chapitre tranquillement.</p><h3 id="r-1669117" data-claire-element-id="3473691">instanceof et l'héritage</h3><p id="r-1672363" data-claire-element-id="1696152">L'héritage est de retour ! En effet, <code>instanceof</code> a un comportement bien particulier avec les classes qui héritent entre elles. Voici ces effets.</p><p id="r-1672364" data-claire-element-id="3473689">Vous vous souvenez sans doute (enfin j'espère...) de la première façon d'utiliser l'opérateur. Voici une révélation : la condition renvoie <code>true</code> si la classe spécifiée est une classe <strong>parente</strong> de la classe instanciée par l'objet spécifié. Exemple :</p><pre id="r-1672365" data-claire-element-id="3473690"><code data-claire-semantic="php">&lt;?php
class A { }
class B extends A { }
class C extends B { }

$b = new B;

if ($b instanceof A)
{
  echo '$b est une instance de A ou $b instancie une classe qui est une fille de A';
}
else
{
  echo '$b n\'est pas une instance de A et $b instancie une classe qui n\'est pas une fille de A';
}

if ($b instanceof C)
{
  echo '$b est une instance de C ou $b instancie une classe qui est une fille de C';
}
else
{
  echo '$b n\'est pas une instance de C et $b instancie une classe qui n\'est pas une fille de C';
}</code></pre><p id="r-1672366" data-claire-element-id="1696155">Voilà, j'espère que vous avez compris le principe car celui-ci est le même avec les deuxième et troisième méthodes.</p><p id="r-1672367" data-claire-element-id="1696156">Nous allons donc maintenant terminer ce chapitre avec une dernière partie concernant les réactions de l'opérateur avec les interfaces. Ce sera un mélange des deux premières parties, donc si vous êtes perdus, relisez bien tout (eh oui, j'espère que vous n'avez pas oublié l'héritage entre interfaces :-° ).</p><h3 id="r-1669150" data-claire-element-id="3473700">instanceof et les interfaces</h3><p id="r-1672368" data-claire-element-id="1696158">Voyons maintenant les effets produits par l'opérateur avec les interfaces.</p><div id="r-1672370" data-claire-element-id="1696160" data-claire-semantic="question"><p id="r-1672369" data-claire-element-id="1696159">Hein ? Comment ça ? Je comprends pas... Comment peut-on vérifier qu'un objet soit une instance d'une interface sachant que c'est impossible ? o_O</p></div><p id="r-1672371" data-claire-element-id="1696161">Comme vous le dites si bien, il est impossible de créer une instance d'une interface (au même titre que de créer une instance d'une classe abstraite, ce qu'est à peu près une interface). L'opérateur va donc renvoyer <code>true</code> si tel objet instancie une classe implémentant telle interface.</p><p id="r-1672372" data-claire-element-id="1696162">Voici un exemple :</p><pre id="r-1672373" data-claire-element-id="3473692"><code data-claire-semantic="php">&lt;?php
interface iA { }
class A implements iA { }
class B { }

$a = new A;
$b = new B;

if ($a instanceof iA)
{
  echo 'Si iA est une classe, alors $a est une instance de iA ou $a instancie une classe qui est une fille de iA. Sinon, $a instancie une classe qui implémente iA.';
}
else
{
  echo 'Si iA est une classe, alors $a n\'est pas une instance de iA et $a n\'instancie aucune classe qui est une fille de iA. Sinon, $a instancie une classe qui n\'implémente pas iA.';
}

if ($b instanceof iA)
{
  echo 'Si iA est une classe, alors $b est une instance de iA ou $b instancie une classe qui est une fille de iA. Sinon, $b instancie une classe qui implémente iA.';
}
else
{
  echo 'Si iA est une classe, alors $b n\'est pas une instance de iA et $b n\'instancie aucune classe qui est une fille de iA. Sinon, $b instancie une classe qui n\'implémente pas iA.';
}</code></pre><p id="r-1672374" data-claire-element-id="3473693">Ce code se passe de commentaires, les valeurs affichées détaillant assez bien je pense.</p><p id="r-1672375" data-claire-element-id="3473694">Après avoir vu l'utilisation de l'opérateur avec les interfaces, nous allons voir comment il réagit lorsqu'on lui passe en paramètre une interface qui est héritée par une autre interface qui est implémentée par une classe qui est instanciée. Vous voyez à peu près à quoi je fais sréférence ? Je vais procéder en PHP au cas où vous n'ayez pas tout suivi.</p><pre id="r-1672376" data-claire-element-id="3473695"><code data-claire-semantic="php">&lt;?php
interface iParent { }
interface iFille extends iParent { }
class A implements iFille { }

$a = new A;

if ($a instanceof iParent)
{
  echo 'Si iParent est une classe, alors $a est une instance de iParent ou $a instancie une classe qui est une fille de iParent. Sinon, $a instancie une classe qui implémente iParent ou une fille de iParent.';
}
else
{
  echo 'Si iParent est une classe, alors $a n\'est pas une instance de iParent et $a n\'instancie aucune classe qui est une fille de iParent. Sinon, $a instancie une classe qui n\'implémente ni iParent, ni une de ses filles.';
}</code></pre><p id="r-1672377" data-claire-element-id="1696167">Vous savez maintenant tous les comportements que peut adopter cet opérateur et tous les effets qu'il peut produire (tout est écrit dans le précédent code).</p><h4 id="r-1672399" data-claire-element-id="3473699">En résumé</h4><ul id="r-1672384" data-claire-element-id="1696174"><li id="r-1672379" data-claire-element-id="1696169"><p id="r-1672378" data-claire-element-id="1696168">L'opérateur <code>instanceof</code> permet de vérifier la nature de la classe dont l'objet testé est une instance.</p></li><li id="r-1672381" data-claire-element-id="1696171"><p id="r-1672380" data-claire-element-id="1696170">Cet opérateur permet de vérifier qu'un certain objet est bien une instance d'une classe fille de telle classe.</p></li><li id="r-1672383" data-claire-element-id="1696173"><p id="r-1672382" data-claire-element-id="1696172">Cet opérateur permet de vérifier qu'un certain objet est une instance d'une classe implémentant telle interface, ou que l'une de ses classes mère l'implémente.</p></li></ul><h5 id="r-1672398" data-claire-element-id="3473698">Pour aller plus loin</h5><p id="r-1672386" data-claire-element-id="1696176">Dès à présent, vous êtes prêts à être lâchés dans la nature. Cependant, il est possible d'aller encore plus loin dans le monde de l'orienté objet. En effet, la meilleure technique pour progresser est de <strong>pratiquer</strong> afin d'être le plus à l'aise possible avec ce paradigme. Cette pratique s'acquiert en utilisant des <strong>frameworks</strong> orientés objets. Il en existe un bon nombre, dont voici les principaux.</p><ul id="r-1672395" data-claire-element-id="1696185"><li id="r-1672388" data-claire-element-id="1696178"><p id="r-1672387" data-claire-element-id="1696177"><a href="http://symfony.com/">Symfony</a>. Framework assez complet et puissant, il est beaucoup utilisé dans le monde professionnel (le Site du Zéro l'utilise par exemple). Si ce framework vous intéresse, je vous conseille de lire le <a href="http://www.siteduzero.com/tutoriel-3-517569-symfony2-un-tutoriel-pour-debuter-avec-le-framework-symfony2.html">tutoriel sur Symfony</a> disponible sur ce site. Si vous avez lu et compris la partie <em>« Réalisation d'un site web »</em>, l'apprentissage des bases de ce <em>framework</em> sera quasi instantanée (cette partie du tutoriel s'inspire beaucoup de Symfony).</p></li><li id="r-1672390" data-claire-element-id="1696180"><p id="r-1672389" data-claire-element-id="1696179"><a href="http://framework.zend.com/">Zend Framework</a>. Framework encore plus complet, souvent comparé à une usine à gaz. Certains diront que c'est une qualité (car le framework est par conséquent très souple et s'adapte à votre façon de coder), d'autres un défaut. Ce framework est aussi très utilisé dans le milieu professionnel.</p></li><li id="r-1672392" data-claire-element-id="1696182"><p id="r-1672391" data-claire-element-id="1696181"><a href="http://codeigniter.com/">CodeIgniter</a>. Framework bien plus léger mais moins complet. C'est à vous de compléter sa bibliothèque, soit en téléchargeant des scripts que la communauté a développés, soit en les créant vous-mêmes. <a href="http://www.siteduzero.com/tutoriel-3-370694-codeigniter-le-framework-aux-services-des-zeros.html">Lire le tutoriel sur CodeIgniter</a> disponible sur ce site.</p></li><li id="r-1672394" data-claire-element-id="1696184"><p id="r-1672393" data-claire-element-id="1696183"><a href="http://cakephp.org/">CakePHP</a>. Ce framework a cherché du même côté que Symfony pour trouver son inspiration. Par conséquent, là aussi, l'apprentissage des bases de ce framework sera très rapide. Si vous voulez vous pencher sur CakePHP, je vous conseille le <a href="http://book.cakephp.org/2.0/en/index.html"><em>CakePHP Cookbook</em></a>.</p></li></ul><div id="r-1672397" data-claire-element-id="3473697"><p id="r-1672396" data-claire-element-id="3473696"></p></div>

                <div class="js-courseSelementActions sideActions">
    <ul class="sideActions__container">
        <li>
            <a class="sideActions__item  js-courseElementActions-copyUrl  js-tooltip"
               href="#" data-tooltip="Copier le lien"
               data-tooltip-done="Lien copié !">
            #
            </a>
        </li>
    </ul>
</div>
            </div>

                            <div class="text-left space-top">







    <form name="form" method="post" action="/courses/1665806/parts/1669151/mark-as-complete" class=" oc-form">

    <button type="submit" id="form_submit" name="form[submit]" class="oc-btn orange-alt-btn oc-btn"><i class='icon-to_do'></i> J'ai terminé ce chapitre</button>
                    <input type="hidden" id="form__token" name="form[_token]" value="QuiKFRcpAs0BOW-MCe6UXQIfak57d4g_HkkEKJXnJQY" /></form>
                </div>

            <nav class="course-pagination  course-pagination--onlyPrev  clearfix">

                        <a href="/courses/programmez-en-oriente-objet-en-php/exercises/391" class="oc-btn dark-btn course-pagination__btn course-pagination__btn--previous">
                <i class="icon-previous"></i>
                <span>Activité : Créez un système de mise en cache</span>
            </a>

    <span class="course-pagination__separator"></span>

    </nav>


<aside  tabindex="-1"
        role="dialog"
                    aria-labelledby="popin-view-restriction_popin_title"
                class="popin popin--illustrated  js-popin"
        id="popin-view-restriction"
>
    <i class="popin__close-button icon-close js-close-button"></i>

    <div class="popin__inner">
                    <div class="popin__illustrationWrapper">
                <div class="popin__illustration illustration--balloon"></div>
            </div>

        <div class="popin__mainContainer">
                            <h3 id="popin-view-restriction_popin_title" class="popin__title  js-popin-title">Waouh !</h3>

                            <i class="icon-to_do popin__icon  js-popin-icon"></i>


            <div class="popin__content  js-popin-content">
                <div class="popin__contentWrapper">
                                                <p>
            Très heureux de voir que nos cours vous plaisent, déjà 3 pages lues aujourd&#039;hui ! Vous pouvez continuer la lecture de nos cours en devenant un Roomie, un membre de la communauté d&#039;OpenClassrooms. C&#039;est gratuit !
        </p>
        <p>
            Vous pourrez aussi suivre votre avancement dans le cours, faire les exercices et discuter avec les autres Roomies.
        </p>
                    </div>
            </div>

                            <div class="popin__actions  js-popin-actions">
                                                                        <a class="oc-btn orange-alt-btn "  href="/register">S'inscrire</a>
                                                    <a class="oc-btn dark-btn "  href="/login">Se connecter</a>
                                                            </div>


                    </div>
    </div>
</aside>

        </div>


    </section>
</div>
    </div>


    <div id="popin-not-certifying-yet"
     class="popin"
     data-popin-title="Vous ne pouvez pas encore obtenir de certificat de réussite à l&#039;issue de ce cours.
                            <a href='/premium'><i class='icon-star'></i> Devenez Premium</a>
                    ">
    <img alt="Exemple de certificat de réussite" src="//static.oc-static.com/prod/images/courses/certif.jpg"/>
</div>


                </main>

                <aside class="contentWithSidebar__sidebar  js-contentWithSidebar-slidingElement" >
                        <nav class="col-nav">
    <div id="tab-courseMenu" class="col-nav__inner js-sidebar-inner">
        <div class="col-nav__block  col-nav__block--summary">

            <div class="side-paginate">
                                    <a href="/courses/programmez-en-oriente-objet-en-php/exercises/391" class="side-paginate__previous">
                        <i class="icon-previous"></i>
                    </a>

                    <span class="side-paginate__separator"></span>

                <h6 class="side-paginate__title">
                    Annexes
                </h6>

                            </div>

                            <div class="col-nav__block--summary-list">
                    <ol class="col-nav__chapters">
                                                    <li class="selected">
                                                                                                    <span class="col-nav__chapterTitle">L&#039;opérateur instanceof</span>
                                                            </li>
                                            </ol>

                                    </div>
                    </div>



                        <div class="col-nav__block  col-nav__block--subscribe">

                <div class="js-followForms">





    <form name="oc_form_type_submit" method="post" action="/ajax/courses/1665806/follow-course" data-form-name="unfollow" class="hidden oc-form" data-active="false"><input type="hidden" name="_method" value="DELETE" />
                    <div>
    <button type="submit" id="oc_form_type_submit_submit" name="oc_form_type_submit[submit]" class="orange-alt-btn oc-btn"> Ne plus suivre</button></div><input type="hidden" id="oc_form_type_submit__token" name="oc_form_type_submit[_token]" value="ETvg4OXBj97DpMncw0T_v8gwvietYtzlUiNQX8Ayuw4" />
                    </form>






    <form name="oc_form_type_submit" method="post" action="/ajax/courses/1665806/follow-course" data-form-name="follow" class=" oc-form" data-active="true">
                    <div>
    <button type="submit" id="oc_form_type_submit_submit" name="oc_form_type_submit[submit]" class="orange-alt-btn oc-btn"> Suivre ce cours</button></div><input type="hidden" id="oc_form_type_submit__token" name="oc_form_type_submit[_token]" value="ETvg4OXBj97DpMncw0T_v8gwvietYtzlUiNQX8Ayuw4" />
                    </form>
                </div>

                <a href="/how-does-it-work">
                    <small>Comment ça marche ?</small>
                </a>
            </div>




                    <div class="col-nav__block col-nav__block--button">
                <a href="/forum/categorie/php" class="oc-btn red-btn">
                    Accéder au forum
                </a>
            </div>


                    <div class="col-nav__block col-nav__block--institution">
    <h2>Avec le soutien de</h2>
            <a  href="http://oc.cm/1WxoM6H" target="_blank">
            <img src="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/partners/55/14533902385044_logo%20HD%20DIgital-01.png" alt="logo IFOCOP" class="col-nav__institutionLogo"/>
            <p class="col-nav__block--institutionDescription">
                Formez-vous aux différents métiers du digital avec l’IFOCOP
            </p>
        </a>
    </div>





    <div class="socialNetwork col-nav__block">
        <ul class="socialButtons  js-socialButtons"
    data-options="
                title: 'Découvrez le cours &quot;L&#039;opérateur instanceof&quot; sur @OpenClassrooms',
        mailTitle: 'Cours &quot;L&#039;opérateur instanceof&quot; sur OpenClassrooms',
        mailContent: 'Découvrez le cours &quot;L&#039;opérateur instanceof&quot; sur OpenClassrooms.'">

    <li>
        <a class="roundIcon  roundIcon--twitter addthis_button_twitter  js-socialButtons-btn" data-tooltip="Partagez sur Twitter" >
            <i class="roundIcon__icon  icon-twitter"></i>
        </a>
    </li>

    <li>
        <a class="roundIcon  roundIcon--facebook  addthis_button_facebook  js-socialButtons-btn" data-tooltip="Partagez sur Facebook">
            <i class="roundIcon__icon  icon-facebook"></i>
        </a>
    </li>

    <li>
        <a class="roundIcon  roundIcon--googlePlus  addthis_button_google_plusone_share  js-socialButtons-btn" data-tooltip="Partagez sur Google+" >
            <i class="roundIcon__icon  icon-google"></i>
        </a>
    </li>

    <li>
        <a class="roundIcon  addthis_button_email  js-socialButtons-btn  js-socialButtons-email" data-tooltip="Partagez par e-mail">
            <i class="roundIcon__icon  icon-letter"></i>
        </a>
    </li>

</ul>

    </div>
    </div>
</nav>
                </aside>
            </div>
        </div>

                    <footer class="alt-section">
    <div class="centered">

        <div class="row">
                            <div class="col4 course-bottom__category">
                    <h2 class="highlighted">
                        L&#039;auteur
                    </h2>
                    <div>
                                                    <a itemprop="author" itemscope itemtype="http://schema.org/Person" href="/membres/vyk12-68874" class="no-underlined">
                                <div class="course-bottom__text-illustrated">
                                    <span data-author="Victor Thuillier" style="background-image: url(//sdz-upload.s3.amazonaws.com/prod/users/avatars/Light%20Blue1.png);"></span>
                                    <h4 itemprop="name">Victor Thuillier</h4>
                                                                            <p itemprop="description">
                                            Auteur du livre sur la POO en PHP ainsi que de 4 autres tutoriels
                                        </p>
                                                                    </div>
                            </a>
                                            </div>
                </div>

                            <div class="col8 course-bottom__category">
                    <h2 class="highlighted">Découvrez aussi ce cours en...</h2>

                    <ul class="course-bottom__format">
                                                    <li>
                                <a
                                                                                    href="/ebooks/programmez-en-oriente-objet-en-php" class="text-decoration-none"
                                                                        >
                                    <div class="circle circle--x-small">
                                        <span class="circle__content"></span>
                                        <i class="icon-ebook"></i>
                                                                                    <div class="ribbon ribbon--orange">
                                                <div class="ribbon__content">
                                                    <span>Premium</span>
                                                </div>
                                            </div>
                                                                            </div>
                                    <div class="course-bottom__format-entitled">eBook</div>
                                </a>
                            </li>
                                                    <li>
                                <a
                                                                                    href="http://www.eyrolles.com/Informatique/Livre/programmez-en-oriente-objet-en-php-9791090085855?societe=openclassrooms" target="_blank" class="text-decoration-none"
                                                                        >
                                    <div class="circle circle--x-small">
                                        <span class="circle__content"></span>
                                        <i class="icon-book"></i>
                                                                            </div>
                                    <div class="course-bottom__format-entitled">Livre papier</div>
                                </a>
                            </li>
                                                    <li>
                                <a
                                                                                    href="/ebooks/programmez-en-oriente-objet-en-php" class="text-decoration-none"
                                                                        >
                                    <div class="circle circle--x-small">
                                        <span class="circle__content"></span>
                                        <i class="icon-ebook pdf"></i>
                                                                                    <div class="ribbon ribbon--orange">
                                                <div class="ribbon__content">
                                                    <span>Premium</span>
                                                </div>
                                            </div>
                                                                            </div>
                                    <div class="course-bottom__format-entitled">PDF</div>
                                </a>
                            </li>
                                            </ul>
                </div>
                    </div>

    </div>
</footer>


    </article>
            </div>
        </div>

                    <footer class="footer">
    <div class="centered">
        <div class="row">

            <div class="col3 col6-s  footer__item  linksList  foldable  js-foldable" data-options="mobileOnly: true, disableOnLargeScreen: true, initialState: 'closed'">
                <h2 class="linksList__title  foldable__button  js-foldable-button">
                    OpenClassrooms
                    <i class="icon-next  foldable__icon"></i>
                </h2>

                <ul class="linksList__content foldable__content">
                    <li>
                        <a href="/about-us" class="footer__link">Qui sommes-nous ?</a>
                    </li>
                    <li>
                        <a href="/how-does-it-work" class="footer__link">Fonctionnement de nos cours</a>
                    </li>
                    <li>
                        <a href="/jobs" class="footer__link">Recrutement</a>
                    </li>
                    <li>
                        <a href="#" class="js-zendesk-show footer__link">Nous contacter</a>
                    </li>
                </ul>
            </div>

            <div class="col3 col6-s  footer__item  linksList  foldable  js-foldable" data-options="mobileOnly: true, disableOnLargeScreen: true, initialState: 'closed'">
                <h2 class="linksList__title  foldable__button  js-foldable-button">
                    Professionnels
                    <i class="icon-next  foldable__icon"></i>
                </h2>

                <ul class="linksList__content foldable__content">
                    <li>
                        <a href="/affiliation" class="footer__link">
                            Affiliation
                        </a>
                    </li>
                    <li>
                        <a href="/business" class="footer__link">Entreprises</a>
                    </li>
                    <li>
                        <a href="/universities" class="footer__link">Universités et écoles</a>
                    </li>
                </ul>
            </div>

            <div class="col3 col6-s  footer__item  linksList  foldable  js-foldable" data-options="mobileOnly: true, disableOnLargeScreen: true, initialState: 'closed'">
                <h2 class="linksList__title  foldable__button  js-foldable-button">
                    Participez
                    <i class="icon-next  foldable__icon"></i>
                </h2>

                <ul class="linksList__content foldable__content">
                    <li>
                        <a href="/new-teachers" class="footer__link">Créer un cours</a>
                    </li>
                    <li>
                        <a href="/courses/courselab" class="footer__link">CourseLab</a>
                    </li>
                    <li>
                        <a href="/terms-conditions/fr" class="footer__link">
                            <strong>Conditions Générales d&#039;Utilisation</strong>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col3 col6-s  footer__item  linksList  foldable  js-foldable" data-options="mobileOnly: true, disableOnLargeScreen: true, initialState: 'closed'">
                <h2 class="linksList__title  foldable__button  js-foldable-button">
                    Suivez-nous
                    <i class="icon-next  foldable__icon"></i>
                </h2>
                                                                    <ul class="linksList__content foldable__content">
                    <li>
                        <a href="http://blog.openclassrooms.com" class="footer__link">Le blog OpenClassrooms</a>
                    </li>
                    <li>
                        <ul class="footer__socialNetwork">
                            <li>
                                <a href="https://www.facebook.com/openclassrooms" target="_blank" class="roundIcon roundIcon--facebook footer__socialButtons">
                                    <i class="icon-facebook roundIcon__icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/openclassrooms" target="_blank" class="roundIcon roundIcon--twitter footer__socialButtons">
                                    <i class="icon-twitter roundIcon__icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/+OpenClassrooms/posts" target="_blank" class="roundIcon roundIcon--youtube footer__socialButtons">
                                    <i class="icon-google roundIcon__icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://instagram.com/openclassrooms" target="_blank" class="roundIcon roundIcon--instagram footer__socialButtons">
                                    <i class="icon-instagram roundIcon__icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/TheOpenClassrooms" target="_blank" class="roundIcon roundIcon--googlePlus footer__socialButtons">
                                    <i class="icon-youtube roundIcon__icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/openclassrooms" target="_blank" class="roundIcon roundIcon--linkedin footer__socialButtons">
                                    <i class="icon-linkedin roundIcon__icon"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>

        <!-- loaded javascript block -->


            <script type="text/javascript" src="/js/main.js?bc40b9d"></script>



    <script type="text/javascript" src="/js/oc/courseView.js?bc40b9d"></script>


        <!-- loaded javascript block -->

        <script type="text/javascript">
    window.analytics=window.analytics||[],window.analytics.methods=["identify","group","track","page","pageview","alias","ready","on","once","off","trackLink","trackForm","trackClick","trackSubmit"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var key=window.analytics.methods[i];window.analytics[key]=window.analytics.factory(key)}window.analytics.load=function(t){if(!document.getElementById("analytics-js")){var a=document.createElement("script");a.type="text/javascript",a.id="analytics-js",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.io/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)}},window.analytics.SNIPPET_VERSION="2.0.9",
    window.analytics.load('mou95e6tdn');
</script>


        <!-- inlined javascript block -->

        <script type="text/javascript">

            if (App.modules) {
                App.modules.startAll();
            }
        </script>


    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"90dc06697a","applicationID":"20302107","transactionName":"NANaYkJXC0ICAhdYVw1Je0NDQgpcTA4AblsPB1FEVWkGXhYTEFRnEwdKQm9GBEMXPhVYXRQ=","queueTime":0,"applicationTime":338,"atts":"GERZFApNGEw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>



<?php
namespace App\Frontend\Modules\News;

use \OCFram\BackController;
use \OCFram\HTTPRequest;
use \Entity\Comment;
use \OCFram\Form;
use \OCFram\StringField;
use \OCFram\TextField;

class NewsController extends BackController
{
  public function executeInsertComment(HTTPRequest $request)
  {
    // Si le formulaire a été envoyé, on crée le commentaire avec les valeurs du formulaire.
    if ($request->method() == 'POST')
    {
      $comment = new Comment([
        'news' => $request->getData('news'),
        'auteur' => $request->postData('auteur'),
        'contenu' => $request->postData('contenu')
      ]);
    }
    else
    {
      $comment = new Comment;
    }

    $form = new Form($comment);

    $form->add(new StringField([
        'label' => 'Auteur',
        'name' => 'auteur',
        'maxLength' => 50,
       ]))
       ->add(new TextField([
        'label' => 'Contenu',
        'name' => 'contenu',
        'rows' => 7,
        'cols' => 50,
       ]));

    if ($form->isValid())
    {
      // On enregistre le commentaire
    }

    $this->page->addVar('comment', $comment);
    $this->page->addVar('form', $form->createView()); // On passe le formulaire généré à la vue.
    $this->page->addVar('title', 'Ajout d\'un commentaire');
  }
}
?>
<?php
if (isset($_POST['texte']))
{
    $texte = stripslashes($_POST['texte']); // On enlève les slashs qui se seraient ajoutés automatiquement
    $texte = htmlspecialchars($texte); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    $texte = nl2br($texte); // On crée des <br /> pour conserver les retours à la ligne

    // On fait passer notre texte à la moulinette des regex
    $texte = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $texte);
    $texte = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $texte);
    $texte = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $texte);
    $texte = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $texte);

    // Et on affiche le résultat. Admirez !
    echo $texte . '<br /><hr />';
}
?>

<p>
    Bienvenue dans le parser du Site du Zéro !<br />
    Nous avons écrit ce parser ensemble, j'espère que vous saurez apprécier de voir que tout ce que vous avez appris va vous être très utile !
</p>

<p>Amusez-vous à utiliser du bbCode. Tapez par exemple :</p>

<blockquote style="font-size:0.8em">
<p>
    Je suis un gros [b]Zéro[/b], et pourtant j'ai [i]tout appris[/i] sur http://www.siteduzero.com<br />
    Je vous [b][color=green]recommande[/color][/b] d'aller sur ce site, vous pourrez apprendre à faire ça [i][color=purple]vous aussi[/color][/i] !
</p>
</blockquote>

<form method="post">
<p>
    <label for="texte">Votre message ?</label><br />
    <textarea id="texte" name="texte" cols="50" rows="8"></textarea><br />
    <input type="submit" value="Montre-moi toute la puissance des regex" />
</p>
</form>
