#! /bin/bash
# Author: Elliot Whitehead
if [[ $# -eq 0 ]] ; then
	echo 'Usage: RegexAnswers.sh filename'
	exit 0
elif [[ $# -gt 1 ]]; then
	echo 'Usage: RegexAnswers.sh filename'
	exit 0
fi

grep -c -E '[0-9]$' $1
grep -c -E -v -i '^[aeiou]' $1
grep -c -E -i '^[abcdefghijklmnopqrstuvwxyz]{12}$' $1
grep -c -E '^[0-9]{3}[-][0-9]{3}[-][0-9]{4}$' $1
grep -c -E '^303[-][0-9]{3}[-][0-9]{4}$' $1
grep -c -E -i '^[aeiou].*[0-9]$' $1
grep -c -E -i 'geocities.com$' $1
grep -E '@' $1 | grep -E -v "\b[a-zA-Z0-9\.\_\-]+@[a-zA-Z0-9\.\_\-]+\.[a-zA-Z]{2,4}\b" | wc -l