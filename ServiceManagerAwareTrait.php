<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_ServiceManager
 */

namespace Zend\ServiceManager;

use Zend\ServiceManager\ServiceManager;

/**
 * @category  Zend
 * @package   Zend_ServiceManager
 */
trait ServiceManagerAwareTrait
{
    /**
     * @var \Zend\ServiceManager\ServiceManager
     */
    protected $service_manager = null;

    /**
     * setServiceManager
     *
     * @param \Zend\ServiceManager\ServiceManager $serviceManager
     * @return
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->service_manager = $serviceManager;

        return $this;
    }
}
