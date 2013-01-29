<?php
/**
 * ActionEvent class file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright &copy; 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\base;

/**
 * ActionEvent represents the event parameter used for an action event.
 *
 * By setting the [[isValid]] property, one may control whether to continue running the action.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ActionEvent extends Event
{
	/**
	 * @var Action the action currently being executed
	 */
	public $action;
	/**
	 * @var boolean whether to continue running the action.
	 */
	public $isValid = true;

	/**
	 * Constructor.
	 * @param Action $action the action associated with this action event.
	 * @param array $config name-value pairs that will be used to initialize the object properties
	 */
	public function __construct($action, $config = array())
	{
		$this->action = $action;
		parent::__construct($config);
	}
}
