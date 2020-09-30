<?php defined( '_JEXEC' ) or die;

include_once JPATH_THEMES.'/'.$this->template.'/inc/logic.php';

?><!doctype html>
<html lang="<?php echo $this->language; ?>">
<head>
  <jdoc:include type="head" />
  <?php include_once JPATH_THEMES.'/'.$this->template.'/inc/head.php'; ?>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-11644875-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>

<body id="origin" class="<?php
  echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site'))
  . ' ' .$active->alias . ' ' . $pageclass;
  echo $option
  . ' view-' . $view
  . ($layout ? ' layout-' . $layout : ' no-layout')
  . ($task ? ' task-' . $task : ' no-task')
  . ($itemid ? ' itemid-' . $itemid : '');
  ?>" role="document">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-modules">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/">
            <img src="/images/innobiochips-logo.svg" alt="<?php echo $app->getCfg('sitename'); ?>" class="img-responsive"/>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-modules">
          <jdoc:include type="modules" name="navbar" />
        </div>
      </div>
    </nav>

    <jdoc:include type="modules" name="slideshow" />

    <div id="main-content">
      <div class="container">
        <div class="row">
          <?php if ($this->countModules('sidebar')) : ?>
          <div class="col-xs-12 col-sm-8 col-sm-push-4">
          <?php else : ?>
          <div class="col-xs-12">
          <?php endif; ?>
          <jdoc:include type="modules" name="breadcrumbs" />
          <?php if ($this->countModules('above')) : ?>
            <jdoc:include type="modules" name="above" />
          <?php endif; ?>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          <?php if ($this->countModules('below')) : ?>
            <jdoc:include type="modules" name="below" />
          <?php endif; ?>
          <?php if ($this->countModules('below-row')) : ?>
            <div class="row">
            <jdoc:include type="modules" name="below-row" />
            </div>
          <?php endif; ?>
          </div>
          <?php if ($this->countModules('sidebar')) : ?>
          <div id="sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8 hidden-xs">
            <?php if(($menu->getActive() != $menu->getDefault())) : ?>
            <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/">
              <img src="/images/innobiochips-logo.svg" alt="<?php echo $app->getCfg('sitename'); ?>" />
            </a>
            <?php endif; ?>
              <div class=" col-md-8 col-md-offset-2">
              <jdoc:include type="modules" name="sidebar" />
              </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <jdoc:include type="modules" name="footer" />
      </div>
      <p class="text-muted">© Innobiochips</p>
    </div>
  </footer>

	<jdoc:include type="modules" name="debug" />

</body>

</html>
