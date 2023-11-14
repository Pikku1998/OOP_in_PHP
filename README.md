What is OOP?
------------
* Type of software design or methodology or a Paradigm. (It basically means the way of putting all our code together).
* Based on objects instead of functions or procedures.
* A data structure becomes an Object which contains properties and methods.
* PHP can be procedural and OOP, whereas languages like Java, c# are strictly OOP.

Why OOP?
--------
* Cleaner and better organization
* Modular structure
* Re-usability
* Easier to maintain
* Easy Debugging

Classes Vs Objects:
-------------------
* Class is like a blueprint by which we can instantiate multiple objects.
* Class has properties and methods.

Ex: A Building analogy

* $this to access properties within the class.

Constructors and Destructors:
-----------------------------
* Constructor will run first when the class is instantiated.
* Destructor will run when there are no references to the object. That is it runs at last. used for cleanup, closing connections etc.
* __construct and __destruct are called magic methods.
* \_\_CLASS__ is called magic constant.

Access Modifiers:
----------------- 
* public - can be accessed from anywhere
* private - can only be accessed within the class.
* protected - can be accessed within the class and from classes that inherited it.

Getters and Setters:
--------------------
* __get($property)
* __set($property, $value)

Inheritance:
-------------
* extends keyword.
* parent::_property or method_ to access property of parent class.

Static methods and properties:
------------------------------
* We don't need to instantiate a class to use static properties or methods.
* We use (self::) instead of ($this->) to access static methods or properties within the class.
