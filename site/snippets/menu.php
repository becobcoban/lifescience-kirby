<?php /*<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>*/ ?>

<nav class="header-nav" role="navigation">
    <a class="hidden-md hidden-lg header-toggle" data-toggle="off" href="javascript:void(0);">
        <span class="header-hamburger"></span>
    </a><!-- /.header-toggle -->
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm">
            <ul class="header-menu header-menu--small">
                <li class="header-menu__item">
                    <a class="header-menu__link" href="#">Your Health Digest</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="faqs.php">FAQs</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="feedback.php">Feedback</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link btn btn--book" href="#">Book an Appointment</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <ul class="header-menu">
                <li class="header-menu__item">
                    <a class="header-menu__link" href="index.php">Home</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="about.php">About</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="programs.php">Programs</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="#">Press</a>
                </li>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="#">My Account</a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="#">Your Health Digest</a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="faqs.php">FAQs</a>
                </li>
                <li class="header-menu__item hidden-md hidden-lg">
                    <a class="header-menu__link" href="feedback.php">Feedback</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- /.header-nav -->
