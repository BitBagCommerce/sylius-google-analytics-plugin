<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    winzou\Bundle\StateMachineBundle\winzouStateMachineBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Sylius\Bundle\ThemeBundle\SyliusThemeBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    BabDev\PagerfantaBundle\BabDevPagerfantaBundle::class => ['all' => true],
    Sylius\Bundle\MailerBundle\SyliusMailerBundle::class => ['all' => true],
    Sylius\Bundle\GridBundle\SyliusGridBundle::class => ['all' => true],
    Sylius\Bundle\FixturesBundle\SyliusFixturesBundle::class => ['all' => true],
    Sylius\Calendar\SyliusCalendarBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    SyliusLabs\DoctrineMigrationsExtraBundle\SyliusLabsDoctrineMigrationsExtraBundle::class => ['all' => true],
    Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Knp\Bundle\GaufretteBundle\KnpGaufretteBundle::class => ['all' => true],
    ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    SyliusLabs\Sylius111ShimBundle\SyliusLabsSylius111ShimBundle::class => ['dev' => true, 'test' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
    League\FlysystemBundle\FlysystemBundle::class => ['all' => true],
    HWI\Bundle\OAuthBundle\HWIOAuthBundle::class => ['all' => true],
];
