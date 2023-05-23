<?php

namespace Chumbatainment\EventObjectCollection\Test\ValueObjects;

use Chumbatainment\EventObjectCollection\ValueObject;

class ValueObjectTest extends \PHPUnit\Framework\TestCase
{
    public function testClasses(): void
    {
        foreach($this->getClasses() as [$object, $value]){
            var_dump(get_class($object));
            $this->assertEquals($value, $object->getValue());
        }
    }

    /**
     * @return string[]
     */
    public function getClasses(): iterable
    {
        $path = __DIR__.'/../../src/ValueObjects';
        $namespace = 'Chumbatainment\EventObjectCollection\ValueObjects';
        $files = scandir($path);
        if($files){
            $mapped = array_map(
                fn(string $name) => $this->createData(
                    sprintf('%s\\%s', $namespace, str_replace('.php', '', $name))
                ),
                array_filter(
                    $files,
                    fn(string $name) => is_file(sprintf('%s/%s',$path,$name))
                )
            );
            foreach($mapped as $data){
                yield $data;
            }
        }
    }

    /**
     * @return array<mixed>
     * @throws \ReflectionException
     * @throws \Exception
     */
    private function createData(string $className): array
    {
        $reflection = new \ReflectionClass($className);
        $this->assertContains(ValueObject::class, $reflection->getInterfaceNames());
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