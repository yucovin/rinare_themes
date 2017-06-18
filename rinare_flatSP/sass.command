#!/bin/sh

cd $(dirname $0)
#sass --watch -t nested style.scss:style.css
#sass --watch -t expended style.scss:style.css
sass --watch -t compact style.scss:style.css
#sass --watch -t compressed style.scss:style.css