# UML Diagrams

UML Diagrams rendered with (plantuml)[http://plantuml.sourceforge.net/]
that requires (java)[http://java.com] and (graphviz)[http://www.graphviz.org]

## References

[Class Diagram](http://plantuml.sourceforge.net/classes.html) describes plantuml definition file format.

[Command line](http://plantuml.sourceforge.net/command_line.html) describes command line usage.

## Building Diagrams

To build diagrams run following command:

    java -jar UML\plantuml.jar -tsvg ./*

To check syntax of UML definition files run following command:

    java -jar UML\plantuml.jar -checkonly ./*

To check that graphviz is installed and accessible by plantuml you can run:

    java -jar UML\plantuml.jar -testdot
