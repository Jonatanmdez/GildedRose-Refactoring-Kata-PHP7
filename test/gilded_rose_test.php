<?php

require_once '../src/gilded_rose.php';

class GildedRoseTest extends \PHPUnit\Framework\TestCase {

    function testDiff() {

        $this->assertEquals(shell_exec('php ../src/texttest_fixture.php'), shell_exec('php ../original/texttest_fixture.php'));
    }

    function testFoo() {
        $items = array(new Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("fixme", $items[0]->name);
    }

}
