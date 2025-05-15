<style>
 a.custom-button {
  display: inline-block;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: 600;
  text-align: center;
  text-decoration: none;
  background-color: #02075d;
  color: #ffffff;
  border-radius: 8px;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}
 a.custom-button:hover {
  background-color: #ffffff;
  color: #02075d;
  border: 2px solid #02075d;
  text-decoration: none !important;
}
</style>

<?php
/**
 * SPDX-FileCopyrightText: 2016-2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-FileCopyrightText: 2011-2016 ownCloud, Inc.
 * SPDX-License-Identifier: AGPL-3.0-only
 */
/** @var array $_ */
/** @var \OCP\IL10N $l */
/** @var \OCP\Defaults $theme */
// @codeCoverageIgnoreStart

if (!isset($_)) {//standalone  page is not supported anymore - redirect to /
	require_once '../../lib/base.php';

	$urlGenerator = \OC::$server->getURLGenerator();
	header('Location: ' . $urlGenerator->getAbsoluteURL('/'));
	exit;
}
// @codeCoverageIgnoreEnd
?>
<?php if (isset($_['content'])): ?>
	<?php print_unescaped($_['content']) ?>
<?php else: ?> 

	<div class="" style="background-color: #fff;top: -8rem !important; position: relative;  padding: 2rem; border-radius: 3rem;">
		<img src="<?php p(\OC::$server->getURLGenerator()->imagePath('core', '404.png')); ?>" alt="Page Not Found" style="height: 300px;" />
		<!-- <p class="infogroup"><?php p($l->t('The page could not be found on the server or you may not be allowed to view it.')); ?></p> -->
		<p><a class="custom-button" href="<?php p(\OC::$server->getURLGenerator()->linkTo('', 'index.php')) ?>">
			<?php p($l->t('Back to %s', [$theme->getName()])); ?>
		</a></p>
	</div>
	<!-- <div class="body-login-container update">
		
		 <div class="icon-big icon-search"></div>
		<h2><?php p($l->t('Page not found')); ?></h2>
		
		
	</div> -->
<?php endif; ?>
