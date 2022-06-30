Run `php repro.php`.

Error:

> PHP Fatal error:  Uncaught CuyZ\Valinor\Mapper\Tree\Exception\MissingObjectImplementationRegistration: No implementation of `App\Serialization\InterfaceB` found with return type `The type `class-string<ClassB1|ClassB2>` for return type of method `App\Serialization\InterfaceBInferer::infer()` could not be resolved: Cannot parse unknown symbol `ClassB1`.` of `App\Serialization\InterfaceBInferer::infer()`. in /vagrant/lab/github/valinor-repro/vendor/cuyz/valinor/src/Mapper/Tree/Builder/ObjectImplementations.php:111
