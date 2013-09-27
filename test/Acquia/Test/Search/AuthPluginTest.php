<?php

namespace Acquia\Test\Search;

use Acquia\Common\RandomStringNoncer;
use Acquia\Search\AcquiaSearchAuthPlugin;

class AuthPluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \Acquia\Search\AcquiaSearchAuthPlugin
     */
    public function getAuthPlugin()
    {
        return new AcquiaSearchAuthPlugin('testid', 'testkey');
    }

    public function testGetters()
    {
        $plugin = new AcquiaSearchAuthPlugin('testid', 'testkey');

        $this->assertEquals('testid', $plugin->getIndexId());
        $this->assertEquals('testkey', $plugin->getDerivedKey());
    }

    public function testSetters()
    {
        $plugin = $this->getAuthPlugin();

        $plugin->setIndexId('anotherid');
        $this->assertEquals('anotherid', $plugin->getIndexId());
    }
}
