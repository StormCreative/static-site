<?php
trait testGetAllMethodsWithVisibilityChangedToPublic
{
    use testGetAllMethodsWithVisibilityChangedToPublicUsedTraitOne {
        foo as public;
    }
}

trait testGetAllMethodsWithVisibilityChangedToPublicUsedTraitOne {
    protected function foo() {}
}
