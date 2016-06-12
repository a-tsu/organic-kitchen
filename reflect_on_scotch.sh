#!/bin/bash

#view
mkdir -p ../html
mkdir -p ../public/html
cp view/*.html ../public/html/
cp view/*.inc ../html/
cp -r view/user ../public/html/

#replace file extension
for nm in ../public/html/*.html; do
    mv $nm ${nm%.html}.php;
done

for nm in ../public/html/user/*.html; do
    mv $nm ${nm%.html}.php;
done

#replace extention in files
grep -l '.html' ../html/*.inc | xargs sed -i.bak -e 's/\.html/.php/g'
grep -l '.html' ../public/html/*.php | xargs sed -i.bak -e 's/\.html/.php/g'
grep -l '.html' ../public/html/user/*.php | xargs sed -i.bak -e 's/\.html/.php/g'

#controller
#cp controller/* /var/www/cgi-bin/
