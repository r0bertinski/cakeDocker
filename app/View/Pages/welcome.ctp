<?php
/**
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h2>Welcome papi!</h2>
<p>
	<?php echo $this->Html->link(__d('cake_dev', 'Read the changelog'), 'https://cakephp.org/changelogs/' . Configure::version()); ?>
</p>
<h2>Hello papi</h2>