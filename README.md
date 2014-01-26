# DesignPatternsPHP 中文

[![Build Status](https://travis-ci.org/domnikl/DesignPatternsPHP.png?branch=master)](https://travis-ci.org/domnikl/DesignPatternsPHP)

这里收集的是现有的一些设计模式以及简单的PHP实现代码。每一种模式都有一些实例(大部分来自Zend Framework,Symfony2或者Doctrine2这样我熟知的软件)。

设计模式的问题在于让大家知道了它，但是没让大家知道什么时候去用它。

## 模式

设计模式粗略的可以分三大类. 点击下面的连接可以在维基百科上查看完整的介绍。

### 创建型

* [抽象工厂模式](AbstractFactory) [:notebook:](http://zh.wikipedia.org/wiki/抽象工厂模式)
* [生成器模式](Builder) [:notebook:](http://zh.wikipedia.org/wiki/生成器模式)
* [简单工厂模式](SimpleFactory)
* [工厂方法模式](FactoryMethod) [:notebook:](http://zh.wikipedia.org/wiki/工厂方法)
* [静态工厂模式](StaticFactory)
* [原型模式](Prototype) [:notebook:](http://zh.wikipedia.org/wiki/原型模式)
* [单例模式](Singleton) [:notebook:](http://zh.wikipedia.org/wiki/单例模式) (被认为是一种反模式! :no_entry:)
* [多例模式](Multiton) (被认为是一种反模式! :no_entry:)

### 结构型

* [适配器模式](Adapter) [:notebook:](http://zh.wikipedia.org/wiki/适配器模式)
* [组合模式](Composite) [:notebook:](http://en.wikipedia.org/wiki/Composite_pattern)
* [修饰模式](Decorator) [:notebook:](http://zh.wikipedia.org/wiki/修饰模式)
* [外观模式](Facade) [:notebook:](http://zh.wikipedia.org/wiki/外觀模式)
* [代理模式](Proxy) [:notebook:](http://zh.wikipedia.org/wiki/代理模式)
* [服务定位模式](Registry) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)
* [流畅接口模式](FluentInterface) [:notebook:](http://en.wikipedia.org/wiki/Fluent_interface)
* [数据映射模式](DataMapper) [:notebook:](http://en.wikipedia.org/wiki/Data_mapper_pattern)
* [依赖注入模式](DependencyInjection) [:notebook:](http://en.wikipedia.org/wiki/Dependency_injection)

### 行为型

* [责任链模式](ChainOfResponsibilities) [:notebook:](http://zh.wikipedia.org/wiki/责任链模式)
* [命令模式](Command) [:notebook:](http://zh.wikipedia.org/wiki/命令模式)
* [迭代器模式](Iterator) [:notebook:](http://zh.wikipedia.org/wiki/迭代器模式)
* [中介者模式](Mediator) [:notebook:](http://en.wikipedia.org/wiki/Mediator_pattern)
* [空对象模式](NullObject) [:notebook:](http://en.wikipedia.org/wiki/Null_Object_pattern)
* [观察者模式](Observer) [:notebook:](http://zh.wikipedia.org/wiki/观察者模式)
* [规格模式](Specification) [:notebook:](http://en.wikipedia.org/wiki/Specification_pattern)
* [状态模式](State) [:notebook:](http://en.wikipedia.org/wiki/State_pattern)
* [策略模式](Strategy) [:notebook:](http://zh.wikipedia.org/wiki/策略模式)
* [模板方法模式](TemplateMethod) [:notebook:](http://zh.wikipedia.org/wiki/模板方法模式)
* [访问者模式](Visitor) [:notebook:](http://zh.wikipedia.org/wiki/访问者模式)

## Contribute

Please feel free to fork and extend existing or add your own examples and send a pull request with your changes!
To establish a consistent code quality, please check your code using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) against [this standard](https://github.com/domnikl/Symfony2-coding-standard).

## License

(The MIT License)

Copyright (c) 2013 Dominik Liebler

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

