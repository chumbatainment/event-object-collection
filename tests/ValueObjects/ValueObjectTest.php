<?php

namespace ValueObjects;

use Bczopp\EventObjectCollection\ValueObjects\ValueObject;

class ValueObjectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @ParamProvider getClasses
     */
    public function testClasses(ValueObject $object, mixed $value): void
    {
        $this->assertEquals($value, $object->getValue());
    }

    /**
     * @return string[][]
     */
    public function getClasses(): array
    {
        return array_map(
            fn(string $name) => $this->createData($name),
            array_filter(
                scandir(__DIR__.'/../..src/ValueObjects'),
                fn(string $name) => is_file($name)
            )
        );
    }

    /**
     * @return array<mixed>
     * @throws \ReflectionException
     */
    private function createData(string $className): array
    {
        $reflection = new \ReflectionClass($className);
        $constructorParameters = $reflection->getConstructor()->getParameters();
        $this->assertCount(1, $constructorParameters);
        $parameter = $constructorParameters[0];
        $this->assertTrue($parameter->hasType());
        $type = $parameter->getType()->getName();
        $value = match($type){
            'string' => '123',
            'int' => 123,
            'default' => throw new \Exception(
                sprintf('type "%s" not specified in test yet. (%s:%s)', $type, __METHOD__, __LINE__)
            )
        };
        return [new $className($value), $value];
    }
}