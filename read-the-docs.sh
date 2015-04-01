#!/bin/bash

# Step 1 use pandoc to convert README.md to index.rst
find . -type f -name "README.md" \
    -execdir pandoc -f markdown -t rst -s -o "index.rst" {} \; \
#    -delete

# Step 2 move uml/* of every pattern to images/path_to_pattern/uml/*
#find . -type d -name "uml" \
#    -exec bash -c 'mkdir -p images/${1:2}' funcname {} \; \
#    -exec bash -c 'mv ${1}/* images/${1:2}' funcname {} \; \
#    -delete

# Step 3 change the content of index.rst
#        embed php files in index.rst
for INDEX in $(find . -type f -name "index.rst")
do
    # fix figure to image, add align center
    sed -i "s|.. figure::|.. image::|g" ${INDEX}
    sed -i "/:alt:/{n;d}" ${INDEX}
    sed -i "s|   Alt.*|   :align: center|" ${INDEX}

    BASEDIR=$(dirname ${INDEX})

    # fix image path uml/uml.png to images/path_to_pattern/uml/uml.png
    # sed -i "s|uml/uml.png|/images/${BASEDIR:2}/uml/uml.png|g" ${INDEX}

    # embed pattern files
    echo -e "\nCode\n----\n" >> ${INDEX}
    echo -e "You can also find these code on \`GitHub\`_\n" >> ${INDEX}

    for PHPFILE in $(find ${BASEDIR} -maxdepth 1 -type f -name "*.php")
    do
        echo -e "$(basename ${PHPFILE})\n" >> ${INDEX}
        echo -e ".. literalinclude:: $(basename ${PHPFILE})\n   :language: php\n   :linenos:\n" >> ${INDEX}
    done

    # embed test files
    echo -e "Test\n----\n" >> ${INDEX}

    for TESTFILE in $(find ${BASEDIR}/Tests -maxdepth 1 -type f -name "*.php")
    do
        echo -e "Tests/$(basename ${TESTFILE})\n" >> ${INDEX}
        echo -e ".. literalinclude:: Tests/$(basename ${TESTFILE})\n   :language: php\n   :linenos:\n" >> ${INDEX}
    done

    # add link on GitHub of this pattern
    echo -e ".. _\`GitHub\`: https://github.com/domnikl/DesignPatternsPHP/tree/master/${BASEDIR:2}" >> ${INDEX}
done

# Step 4 embed other php files in index.rst
#        fix TocTree of projet