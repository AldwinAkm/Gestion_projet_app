<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentToolsTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\ValidatableComponentTrait;

#[AsLiveComponent]
class Issue
{
    use ComponentToolsTrait;
    use DefaultActionTrait;
    use ValidatableComponentTrait;

    #[LiveProp(writable: ['description','summary'])]
    public \App\Entity\Issue $issue;
}