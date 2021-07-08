<?php

declare(strict_types=1);

namespace Tests;

use App\InstanceWithoutTemplate;
use App\InstanceWithTemplate;
use App\Bar;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Serializer\SerializerInterface;

final class SerializerTest extends KernelTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        self::bootKernel();
    }

    public function testFails(): void
    {
        $container = self::getContainer();

        $serializer = $container->get(SerializerInterface::class);

        $bar = new Bar('foo');
        $instance = new InstanceWithTemplate($bar);

        $normalized = $serializer->normalize($instance);
        $denormalized = $serializer->denormalize($normalized, InstanceWithTemplate::class);

        $this->expectNotToPerformAssertions();
    }

    public function testPasses(): void
    {
        $container = self::getContainer();

        $serializer = $container->get(SerializerInterface::class);

        $bar = new Bar('foo');
        $instance = new InstanceWithoutTemplate($bar);

        $normalized = $serializer->normalize($instance);
        $denormalized = $serializer->denormalize($normalized, InstanceWithoutTemplate::class);

        $this->expectNotToPerformAssertions();
    }
}
