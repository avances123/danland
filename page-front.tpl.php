<?php
// $Id$
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
   <!--[if IE 6]><link rel="stylesheet" href="<?php echo $base_path . $directory; ?>/style.ie6.css" type="text/css" /><![endif]-->
  <?php print $scripts; ?>
 </head>

<body<?php print phptemplate_body_class($left, $right); ?>>
<div id="header">
<div id="header-wrapper">
        <div id="header-first">
          <?php if ($logo): ?> 
          <div class="logo">
            <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" height="50"/></a>
          </div>
          <?php endif; ?>
        </div><!-- /header-first -->
        <div id="header-middle">
	  <?php if ($site_name) : ?><h1 class="logo-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1><?php endif; ?>
				<?php if ($site_slogan) : ?><div class='logo-text'><?php print $site_slogan; ?></div><?php endif; ?>
        </div><!-- /header-middle -->
        <div id="search-box">
          <?php print $search_box; ?>
        </div><!-- /search-box -->

	<div id="authorize">
      <ul><?php global $user; if ($user->uid != 0) { print '<li class="first">' .t('Logged in as&nbsp;'). '<a href="' .url('user/'.$user->uid). '">' .$user->name. '</a></li>'; print '<li><a href="' .url('logout'). '">' .t('Logout'). '</a></li>'; } else { print '<li class="first"><a href="' .url('user'). '">' .t('Login'). '</a></li>'; print '<li><a href="' .url('user/register'). '">' .t('Register'). '</a></li>'; } ?></ul>
	  <?php print $feed_icons; ?>
  </div>

      </div><!-- /header-wrapper -->

</div> <!-- /header -->

<div id="menu">
<div id="rounded-menu-left"></div>
<?php if (isset($primary_links)) : ?>
			<?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'nav')); ?>
		<?php endif; ?>
<div id="rounded-menu-right"></div>
</div> <!-- end menu -->


<div id="banner">
<div class="banner-inner">
<div id="banner-preface">
 <?php if ($preface): ?>
          <div id="preface">
            <?php print $preface; ?>
          </div><!-- /preface -->
 <?php endif; ?>
</div>
<?php if ($mission) : ?><div id="banner-bottom">
<div id="mission"><?php print $mission; ?></div><?php endif; ?>
</div>
</div>
</div>

<?php if ($preface_first || $preface_middle || $preface_last): ?>
      <div id="preface-wrapper-front">
 	  <div id="container">
        <?php if ($preface_first): ?>
        <div id="preface-first">
          <?php print $preface_first; ?>
        </div><!-- /preface-first -->
        <?php endif; ?>
        <?php if ($preface_middle): ?>
        <div id="preface-middle">
          <?php print $preface_middle; ?>
        </div><!-- /preface-middle -->
        <?php endif; ?>
        <?php if ($preface_last): ?>
        <div id="preface-last">
          <?php print $preface_last; ?>
        </div><!-- /preface-last -->
        <?php endif; ?>
      </div>
	<div style="clear:both"></div>
     </div><!-- /preface-wrapper -->
    <?php endif; ?>


<div id="wrapper-front">
<div id="container">

<?php if ($left): ?>
			<div id="sidebar-left" class="sidebar-front">
				<?php print $left ?>
			</div>
		<?php endif; ?>
<div id="content-front">
			<?php if ($content_top) : ?><div class="content-top"><?php print $content_top; ?></div>
			<?php endif; ?>
			<?php if (!$is_front) print $breadcrumb; ?>
			<?php if ($show_messages) { print $messages; }; ?>
			<?php if ($tabs) : ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
			<?php if ($title) : ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
			<?php print $help; ?>
		      <?php if ($content) : ?><div class="content-middle"><?php print $content; ?></div>
			<?php endif; ?>
			<?php if ($content_bottom) : ?><div class="content-bottom"><?php print $content_bottom; ?></div>
			<?php endif; ?>

</div> <!-- end content -->

<?php if ($right): ?>
			<div id="sidebar-right" class="sidebar-front">
				<?php print $right; ?>
			</div>
		<?php endif; ?>
</div>
</div> <!-- end wrapper -->

 <div style="clear:both"></div>

 <?php if ($bottom_1 || $bottom_2 || $bottom_3 || $bottom_4): ?>
      <div id="bottom-wrapper-front">
 	  <div class="spacer">
        <?php if ($bottom_1): ?>
        <div id="bottom-1">
          <?php print $bottom_1; ?>
        </div><!-- /bottom-1 -->
        <?php endif; ?>
        <?php if ($bottom_2): ?>
        <div id="bottom-2">
          <?php print $bottom_2; ?>
        </div><!-- /bottom-2 -->
        <?php endif; ?>
        <?php if ($bottom_3): ?>
        <div id="bottom-3">
          <?php print $bottom_3; ?>
        </div><!-- /bottom-3 -->
        <?php endif; ?>
	<?php if ($bottom_4): ?>
        <div id="bottom-4">
          <?php print $bottom_4; ?>
        </div><!-- /bottom-4 -->
        <?php endif; ?>
      </div>
	<div style="clear:both"></div>
     </div><!-- /bottom-wrapper -->
    <?php endif; ?>

<div id="footer-wrapper-front">
<div id="footer">
 <?php print $footer; ?>
</div>
<div id="subnav-wrapper">
 <ul><li><?php print $footer_message; ?></li>
<li><?php if (isset($secondary_links)) : ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnav')); ?><?php endif; ?></li></ul>
</div>
</div>
<div id="notice"><p><a href="http://www.danetsoft.com">Drupal theme</a> provided by <a href="http://www.xpsdev.com">Danang Probo Sayekti</a>.</p></div>
<?php print $closure; ?>
</body>
</html>